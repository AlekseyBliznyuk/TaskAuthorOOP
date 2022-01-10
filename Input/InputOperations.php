<?php

class inputOperations
{
    public function connectDatabase()
    {
        $url = mysqli_connect("localhost", "root", "Leo2803leo", "authors");
        if ($url == false) {
            print("Error:" . mysqli_connect_error());
        } else {
            print("Succeed");
        }
        return $url;
    }

    public function getInfoFromTable(mysqli $url)
    {
        $sql = "SELECT * FROM author";
        $result = $url->query($sql);
        return $result->fetch_all(MYSQLI_BOTH);
    }
}