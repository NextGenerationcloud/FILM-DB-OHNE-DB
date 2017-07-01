<body>
<link rel="stylesheet" type="text/css" href="./medionlibrarys.css" />
<div id="menu">

<center><br>
<a href="../" class="button gray">Zurück</a>

</center>
</p>
</div>
</body>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<HTML>
<HEAD>


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="de" />
<META ausgeblendet>
  <?php
#---------------------------------------------------------------------------------------------------------------------------------------- datei Prüfen anfang
$weg = '../inhalt.txt'; # dier ist immer im selben Ordner damit geht man dann in den unterordner
 if (!file_exists($weg))																							#datei Prüfen
         {																												#datei Prüfen
echo "<center>ACHTUNG die Datei $weg ist nicht da</center>";		#datei Prüfen wenn nicht da dann kommt das
         }		
#----------------------------------------------------------------------------------------------------------------------------------------datei Prüfen ENDE
	


# hier fämgt die schleife an hier müsste dann die DB anstelle sein
	
$anzahl = count(file($weg));  # Wie oft soll die schleife laufen
$i = 0;
while($i < $anzahl) {
# hier fämgt die schleife an hier müsste dann die DB anstelle sein bis hier her danach geht alle genauso wie in der DB
$weglines = file ($weg);
#echo  trim($weglines[$i]); so wird nach dem weg gefragt (ordner)
  
  
  
  ?>
  

    </body>
	<br><br><br><br><br>
  
 <hr> 
 <?php 
  echo trim($weglines[$i])."_folgenlist.txt";
  $zitatefolgenlist = file_get_contents("../".trim($weglines[$i])."/".trim($weglines[$i])."_folgenlist.txt"); #----------------------------------------------------------------------------------Anfang folgenlist txt erstellen	  ?>	
<br><br>	

   
<form method="POST" action="bearbeiten.php">
<td style="vertical-align: top;">

  <textarea id="text" name="folgenlist_<?php echo trim($weglines[$i]); ?>" cols="90" rows="10"><?php  echo $zitatefolgenlist; 	  ?></textarea><br>
<input name="sent" value="Senden..." type="Submit"/>
</form>
  

  
  
  <form action="bearbeiten.php" method="post">
    Willst du die daten der inhalt.txt in die <?php echo trim($weglines[$i]); ?>_folgenlist.txt vor Schreiben ?
    <input type="checkbox" name="formWheelchair" value="Yes" />
    <input type="submit" name="formSubmit" value="Submit" />
</form>
  
  
  
  
  
  
  <?php

if(isset($_POST['formWheelchair']) && 
   $_POST['formWheelchair'] == 'Yes') 
{
    echo "Es wurde Überschieben mit dem standart weg system in  ".trim($weglines[$i])."_folgenlist.txt";

  
  
  $file = '../'.trim($weglines[$i]).'/inhalt.txt';
$newfile = '../'.trim($weglines[$i]).'/'.trim($weglines[$i]).'_folgenlist.txt';

if (!copy($file, $newfile)) {
    echo "copy $file schlug fehl...\n";

  }
  

  
  
}
else
{

}	 

?>
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
     <?php

$datei = trim($weglines[$i]);

  if(isset($_POST["folgenlist_".trim($weglines[$i])]))
{
  echo "<br>Dein Text wurde gespeichert: ".$_POST['folgenlist_'.trim($weglines[$i])]; // ausgeben des textes
  // hier dann soeichern
$text = $_POST["folgenlist_".trim($weglines[$i])];
  $handle = fopen ("../".$datei."/".$datei."_folgenlist.txt", "w" );
fwrite ( $handle, $text );
  fclose ( $handle );
   }
    ?> 
  
   <?php  #----------------------------------------------------------------------------------ENDE folgenlist txt erstellen	  ?>
  
  
<br><br>
  
   <hr>
   <?php 
  echo  trim($weglines[$i])."_info.txt";
  $zitateinfo = file_get_contents("../".trim($weglines[$i])."/".trim($weglines[$i])."_info.txt"); #----------------------------------------------------------------------------------Anfang	info txt erstellen  ?>
 <br><br>
  
<form method="POST" action="bearbeiten.php">
<td style="vertical-align: top;">

  <textarea id="text" name="info_<?php echo trim($weglines[$i]); ?>" cols="90" rows="10"><?php  echo $zitateinfo; 	  ?></textarea><br>
<input name="sent" value="Senden..." type="Submit"/>
</form>
  

     <?php

$datei = trim($weglines[$i]);

  if(isset($_POST["info_".trim($weglines[$i])]))
{
  echo "<br>Dein Text wurde gespeichert: ".$_POST['info_'.trim($weglines[$i])];
  // hier dann soeichern
$text = $_POST["info_".trim($weglines[$i])];
  $handle = fopen ("../".$datei."/".$datei."_info.txt", "w" );
fwrite ( $handle, $text );
  fclose ( $handle );
   }
    ?> 
  
  
    <?php  #----------------------------------------------------------------------------------ENDE info txt erstellen	  ?>
  

  
    
<br><br>
  
    <hr>
   <?php 
  echo  trim($weglines[$i]).".txt";
  $zitat = file_get_contents("../".trim($weglines[$i])."/".trim($weglines[$i]).".txt"); #----------------------------------------------------------------------------------Anfang	ordnername txt erstellen  ?>
 <br><br>
  
  
<form method="POST" action="bearbeiten.php">
<td style="vertical-align: top;">

  <textarea id="text" name="ordnername_<?php echo trim($weglines[$i]); ?>" cols="90" rows="10"><?php  echo $zitat; 	  ?></textarea><br>
<input name="sent" value="Senden..." type="Submit"/>
</form>
  

     <?php

$datei = trim($weglines[$i]);

  if(isset($_POST["ordnername_".trim($weglines[$i])]))
{
  echo "<br>Dein Text wurde gespeichert: ".$_POST['ordnername_'.trim($weglines[$i])];
  // hier dann soeichern
$text = $_POST["ordnername_".trim($weglines[$i])];
  $handle = fopen ("../".$datei."/".$datei.".txt", "w" );
fwrite ( $handle, $text );
  fclose ( $handle );
   }
    ?> 
  
  
    <?php  #----------------------------------------------------------------------------------ENDE ordnername txt erstellen	  ?>
  
  
  <br><br><br><br>
  
  
  <?php
$verzeichnis = "../".trim($weglines[$i])."/"; // Pfad zum Verzeichnis (Hier ist es ein Unterverzeichnis)
$handle = openDir($verzeichnis); // Verzeichnis öffnen
while ($datei = readDir($handle)) { // Verzeichnis auslesen
 if ($datei != "." && $datei != ".." && !is_dir($datei)) { // Verzeichnisse filtern
  if (strstr($datei, ".gif") || strstr($datei, ".png") || strstr($datei, ".jpg")) { // Bilder filtern
   $verzeichnis_datei = $verzeichnis . $datei; // Pfad zur aktuellen Datei
   $info = getImageSize($verzeichnis_datei); // Bildinfos ermitteln (Breite, Höhe)
	// Bild anzeigen
   echo "<img src=\"$verzeichnis_datei\" width=\"50\" height=\"50\"> \n";
  }
 }
}
closeDir($handle); // Verzeichnis schließen
?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
     <?php

     $i++;
}
  ?>           
               
               
               




<br><br>
