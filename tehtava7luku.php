<?php include ("./html/header7.html");
?>
 <?php
 // Käytän POST:ia.
 $nimi=$_POST["nimi"];
 $sahkoposti=$_POST["sahkoposti"];
 $urheilulaji=$_POST["urheilulaji"];
 $aikavali=$_POST["aikavali"];
 // Tulostellaan valinnat.
 if ($nimi) {
    print "Nimi: $nimi<br>";
} if ($sahkoposti) {
    print "Sähköposti: $sahkoposti<br>";
} if ($urheilulaji) {
    foreach($urheilulaji as $key => $value){
        print "Lajini: $value<br>";
    } 
} if ($aikavali) {
    print "Urheiluun käytettävä aika: $aikavali<br>";
}
    // Ystävällisyys ei maksa mitään.
    print "<br><br>Kiitos vastauksestasi!:)";
?>
<?php include ("./html/footer1.html");
?>