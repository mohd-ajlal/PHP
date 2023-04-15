<?php
    $emp = [
        [1, "John", 1000],
        [2, "Smith", 2000],
        [3, "David", 3000]
    ];
    echo "<table border= '2px' cellpadding = '5px' cellspacing = '0px'>";
    echo "<tr>";
    echo "<tr>
    <th>Emp ID</th>
    <th>Emp Name</th>
    <th>Emp Salary</th>
</tr>";
    foreach ($emp as $v1){
        
        foreach($v1 as $v2){
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
