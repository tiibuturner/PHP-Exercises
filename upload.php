<?php
/* Tällä php- tiedostolla suoritetaan itse lataus. */
$target_dir = "uploads/images"; /* Määrittää mihin kansioon lataus menee.*/
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); /* Latauksen reitti. */
$uploadOk = 1; /* Selitetään koodin lopussa. */
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); /* Pitää sisällään kansion laajennuksen. */

// Tarkistetaan onko kuva oikea vai feikki.
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Tarkistetaan, onko lataus jo suoritettu.
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Tarkistetaan koko.
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Hyväksytään vain tietyt formaatit (tässä tapauksessa jpg,png,gif,jpeg)
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Tarkistus. Mikäli aiemmin määritelty upload0k olisi nolla, ei lataus onnistuisi.
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// Jos kaikki on ok, suoritetaan lataus.
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    echo "The file ".$target_file. " has been uploaded.<br>";
    print "Name of the picture: ".$_POST["name"]."<br>";
    print "<img src='" . $target_file . "' style='width:200px;'>";
    } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tehtävä 7</title>
    <style>
 body {
    background-color: mediumslateblue;
    text-align: center;
    color:whitesmoke;
    font-size: medium;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
 }
</style>
</head>
<body>
</body>
</html>