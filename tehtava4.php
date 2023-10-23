<?php include ("./html/header4.html");
?>
<?php 
 // Tehdään taulukko.
 $nimet[0]="Kalle";
 $nimet[1]="Kaljami";
 $nimet[2]="Pelle";
 $nimet[3]="Peljami";
 $nimet[4]="Ville";
 $nimet[5]="Viljami";
 
 // For-loop
 // ." " tulostaa vaakaan nimet ja laittaa niihin välilyönnin.
 print "For-loop:<br>";
 for ($i=0;$i<count($nimet);$i++) {
 	print $nimet[$i]." ";
}
 print "<br>";
 // While-loop.
 print "<br>While-loop:<br>";
 $i=0;
 while ($i<count($nimet)){
    print $nimet[$i]." ";
    $i++;
}
 // Do-while.
 print "<br><br>Do-while:<br>";
 $i=0;
do{
    print $nimet[$i]."<br>";
    $i++;
} while ($i<count($nimet));
 // Uusi taulukko & foreach.
 $names[1]="Kalle";
 $names[2]="Kaljami";
 $names[3]="Pelle";
 $names[4]="Peljami";
 $names[5]="Ville";
 $names[6]="Viljami";
// Erilaisia foreach-lauseita.
 print "<br>Foreach-toistolause alkaen numerosta yksi.<br>";
foreach ($names as $key => $value){
    print $key.": ".$value."<br>";
}
print "<br>Foreach-toistolause, joka tulostaa taulukon indeksin ja alkion arvon.<br>";
foreach ($names as $key => $value){
    print "\$names[$key]=$value<br>";
}
?>
<?php include ("./html/footer1.html");
?>