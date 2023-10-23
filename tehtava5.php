<?php include ("./html/header5.html");
?>

<?php
echo "<table>";
// tr = rivi
// td = riviotsikko
for($x=1;$x<=10;$x++){
    echo "<tr>";

    if($x == 1){
        echo "<td>*</td>";
        for($i = 1; $i <= 10; $i++){        
            echo "<td style='background-color:mediumorchid;'>".$i ."</td>";
        }
        echo "</tr><tr>"; // tämä tekee "sivut"
    }
    for($y=1;$y<=10;$y++){

        if($y == 1){
            echo "<td style='background-color:mediumorchid;'>".$x ."</td>";
        }
        echo "<td>".$x*$y."</td>"; // tämä tekee sisällön

    }
    echo "</tr>";
}
echo "</table>";
?>


<?php include ("./html/footer1.html");
?>