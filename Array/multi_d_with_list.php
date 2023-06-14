<?php
    $emp = [
        [1, "John", 1000],
        [2, "Smith", 2000],
        [3, "David", 3000]
    ];
    echo "<table border = '1px' cellpadding = '5px' cellspacing = '0'>
    <tr>
        <th>Emp ID</th>
        <th>Emp Name</th>
        <th>Emp Salary</th>
    </tr>";
    foreach($emp as list($id, $name, $salary)){
        echo "<tr><td>$id</td><td>$name</td><td>$salary</td></tr>";
    }
    echo "</table>";


?>