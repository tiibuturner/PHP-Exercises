<?php include ("./html/header3.html");
?>

<?php
$muuttuja=15;
print "Muuttuja on $muuttuja.<br>";
if ($muuttuja < 0) {
    print "Ulkona on pakkasta.";
} 
elseif ($muuttuja < 5) {
    print "Ulkona on kolea sää.";
} 
elseif ($muuttuja < 15) {
    print "Ulkona on tyypillinen kesäsää.";
} 
elseif ($muuttuja < 20) {
    print "Ulkona on meleko lämmin.";
} 
elseif ($muuttuja <= 25) {
    print "Ulkona on kaunis kesäilma.";
} 
else {
    print "Ulkona on helle.";
}
?>

<?php include ("./html/footer1.html");
?>