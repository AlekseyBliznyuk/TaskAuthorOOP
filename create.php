<?php
echo "Add in Table<p>";
echo "<form method='POST' action='save.php'>
 <tr><td>id</td></tr> <input type='text' name='id'> <p>
 <tr><td>name</td></tr> <input type='text' name='name'> <p>
 <tr><td>date_of_birth</td></tr> <input type='text' name='date_of_birth'> <p>
 <tr><td>approved</td></tr> <input type='text' name ='approved'> <p>
 <input type='submit' name='Submit Query'>";
echo "</form>";