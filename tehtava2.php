<?php include ("./html/header2.html");
?>
<?php

    // Viiden alkion kokoinen, kokonaislukuja sisältävä taulukko.
    $kokonaislukuja [0] = 5;
    $kokonaislukuja [1] = 8;
    $kokonaislukuja [2] = 9;
    $kokonaislukuja [3] = 64;
    $kokonaislukuja [4] = 359;

    // Lisätään foreach- toistolaude, joka tulostaa alkioiden arvot.
    // Laskee samalla alkioiden summan.
    // Tulostaa myös summan.
    $summa=0;
    
    foreach ($kokonaislukuja as $indeksi => $alkio) {
        print "$indeksi: $alkio <br>";
        $summa=$summa+$alkio;
    }
    print "<br>Edellä mainittujen lukujen summa on $summa";

 ?>
 <?php include ("./html/footer1.html");
 ?>
