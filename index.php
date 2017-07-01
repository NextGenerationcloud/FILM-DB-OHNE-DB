<body>
<link rel="stylesheet" type="text/css" href="./medionlibrarys/medionlibrarys.css" />
<div id="menu">

<center><br>
<a href="../" class="button gray">Zurück</a>
<a href="./medionlibrarys/bearbeiten.php" class="button gray">ALPA Bearbeiten</a>
<a href="./medionlibrarys/neu.php" class="button gray">NEU EBENE SAFFEN /UPDATE</a>
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

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		
		
    </body>
	<br><br><br><br><br>	<br><br><br><br><br>


<?php
# Test ob datenbank Es besteht eine Verbindung dann kommt das ANFANG





# Test ob datenbank Es besteht eine Verbindung dann kommt das ENDE

#---------------------------------------------------------------------------------------------------------------------------------------- datei Prüfen anfang
$weg = 'inhalt.txt'; # dier ist immer im selben Ordner damit geht man dann in den unterordner
 if (!file_exists($weg))																							#datei Prüfen
         {																												#datei Prüfen
echo "<center>ACHTUNG die Datei $weg ist nicht da</center>";		#datei Prüfen wenn nicht da dann kommt das
   	include './medionlibrarys/infotext.php';
         }		
#----------------------------------------------------------------------------------------------------------------------------------------datei Prüfen ENDE
	


# hier fämgt die schleife an hier müsste dann die DB anstelle sein
	
$anzahl = count(file($weg));  # Wie oft soll die schleife laufen
$i = 0;
while($i < $anzahl) {
# hier fämgt die schleife an hier müsste dann die DB anstelle sein bis hier her danach geht alle genauso wie in der DB
$weglines = file ($weg);



  # zum verglaich so original     <div class="box box-folgen">1</div>
$anfangbox = '<div class="';
$weiterbox = '">';
$endegbox = '</div>';

#    <!-- Gallery I -->
$folgentext = 'box-folgentext';
$titelbox = 'box-titel';


   
#    <div class="flt-clr "></div>
#    <!-- Gallery II -->
$bildbox = 'box box-bild';
$textbox = 'box box-text';



 #       <div class="flt-clr "></div>
#    <!-- Gallery III -->
$folgenbox = 'box box-folgen';
$infobox = 'box box-info';
  
$balben = 'box box-balken';
               
$größe = 'width="407" height="600" border="0"'; #Größe des bildes
#-----------------------------------LINKS und aussehen----------------------ENDE

                 #-----------------------------------Werte und wege unterer ordner----------------------ANFANG						  
$textweg = trim($weglines[$i])."/".trim($weglines[$i]).".txt"; # der weg in den Ordner zur gleichnamigen TXT datei kann durch einen DB abfrage erstezt werden
$textweg1 = trim($weglines[$i]).".txt"; # der weg in den Ordner zur gleichnamigen TXT datei kann durch einen DB abfrage erstezt werden
$bild = trim($weglines[$i])."/".trim($weglines[$i]).".jpg"; #der weg in den Ordner zur gleichnamigen bild kann durch einen DB abfrage erstezt werden
$bild1 = trim($weglines[$i]).".jpg"; #der weg in den Ordner zur gleichnamigen bild kann durch einen DB abfrage erstezt werden  
$infoweg = trim($weglines[$i])."/".trim($weglines[$i])."_info.txt"; # der weg in den Ordner zur info.txt TXT datei kann durch einen DB abfrage erstezt werden
$folgen = trim($weglines[$i])."/".trim($weglines[$i])."_folgenlist.txt"; # der weg in den Ordner zur folgenlist.txt TXT datei kann durch einen DB abfrage erstezt werden
               #-----------------------------------Werte und wege unterer ordner----------------------ENDE

$var = 1;

# aber hier das aussehen und welche infos ANFANG

echo "<hr>";
  
#----------------------------------------------ALLES BILD ANFANG
  
  $filename = $bild1;

if (file_exists($filename)) {
  
   if(@file($bild1)) //prüft ob Bild existiert bzw. erreichbar ist 
{
$datei1 = $bild1; #es ist da 
echo $anfangbox,$titelbox,$weiterbox,'<a href="',trim($weglines[$i]),'">',trim($weglines[$i]),$endegbox;
} 
else  
{ 
$datei = "./medionlibrarys/leer.jpg"; # es ist nicht da! standart anzeige
echo $anfangbox,$titelbox,$weiterbox,"KEIN BILD.jpg Vorhanden es muss den namen des Ordners tragen",$endegbox;
} 
 printf($anfangbox.$bildbox.$weiterbox."<center><img src=\"%s\" . $größe. alt=\"%s\"></a></center>".$endegbox, $datei1, $datei1); //Entsprechendes Bild wird eingebunden 

  
} else {
  
  if(@file($bild)) //prüft ob Bild existiert bzw. erreichbar ist 
{
$datei = $bild; #es ist da 
echo $anfangbox,$titelbox,$weiterbox,'<a href="',trim($weglines[$i]),'">',trim($weglines[$i]),$endegbox;
} 
else  
{ 
$datei = "./medionlibrarys/leer.jpg"; # es ist nicht da! standart anzeige
echo $anfangbox,$titelbox,$weiterbox,"KEIN BILD.jpg Vorhanden es muss den namen des Ordners tragen",$endegbox;
} 
 printf($anfangbox.$bildbox.$weiterbox."<center><img src=\"%s\" . $größe. alt=\"%s\"></a></center>".$endegbox, $datei, $datei); //Entsprechendes Bild wird eingebunden
  
}


#----------------------------------------------ALLES BILD ENDE
  

  
  
  
  
  
  
  
  



  

  

  
  
  
  
  
  
  
#----------------------------------------------ALLES Text der text der mit dem namen des ordner verknüft wird ANFANG
  
    echo $anfangbox.$textbox.$weiterbox;
    $filename = $textweg1;
if (file_exists($filename)) {
  
   if(@file($textweg1)) 
{ 
         $tex=fopen($textweg1,"r");
         if(!$tex)
           {
             echo "Die $textweg1 konnte nicht geöffnet werden.";
             exit;
           }


             while (!feof($tex))
                        {
                          $reihe=fgets($tex,150);
						  $reihe = utf8_encode($reihe);
                          echo $reihe;
                        }
                
            fclose($tex);
} 
else  
{ 
echo "KEIN $textweg1 Vorhanden";

}
  
  } else {
  
  
     if(@file($textweg)) 
{ 
         $tex=fopen($textweg,"r");
         if(!$tex)
           {
             echo "Die $textweg konnte nicht geöffnet werden.";
             exit;
           }


             while (!feof($tex))
                        {
                          $reihe=fgets($tex,150);
						  $reihe = utf8_encode($reihe);
                          echo $reihe;
                        }
                
            fclose($tex);
} 
else  
{ 
echo "KEIN $textweg Vorhanden";

}}
echo $endegbox;  
  
#----------------------------------------------ALLES Text der text der mit dem namen des ordner verknüft wird ENDE
  
 
  
  

  
  
  
  
  
#----------------------------------------------ALLES infoweg der text der mit dem namen des ordner verknüft wird ANFANG
  
  
echo $anfangbox.$infobox.$weiterbox;
    $filename = $infoweg1;
if (file_exists($filename)) {
  
   if(@file($infoweg1)) 
{ 
         $tex=fopen($infoweg1,"r");
         if(!$tex)
           {
             echo "Die $infoweg1 konnte nicht geöffnet werden.";
             exit;
           }


             while (!feof($tex))
                        {
                          $reihe=fgets($tex,150);
						  $reihe = utf8_encode($reihe);
                          echo $reihe;
                        }
                
            fclose($tex);
} 
else  
{ 
echo "KEIN $infoweg1 Vorhanden";

}
  
  } else {
  
  
     if(@file($infoweg)) 
{ 
         $tex=fopen($infoweg,"r");
         if(!$tex)
           {
             echo "Die $infoweg konnte nicht geöffnet werden.";
             exit;
           }


             while (!feof($tex))
                        {
                          $reihe=fgets($tex,150);
						  $reihe = utf8_encode($reihe);
                          echo $reihe;
                        }
                
            fclose($tex);
} 
else  
{ 
echo "KEIN $infoweg Vorhanden";

}}
echo $endegbox;  
  
#----------------------------------------------ALLES infoweg der text der mit dem namen des ordner verknüft wird ENDE
  
  
  
  
  
#----------------------------------------------ALLES folgentext der text der mit dem namen des ordner verknüft wird ANFANG
  
  
echo $anfangbox.$folgentext.$weiterbox;
    $filename = $folgen1;
if (file_exists($filename)) {
  
   if(@file($folgen1)) 
{ 
         $tex=fopen($folgen1,"r");
         if(!$tex)
           {
             echo "Die $folgen1 konnte nicht geöffnet werden.";
             exit;
           }


             while (!feof($tex))
                        {
                          $reihe=fgets($tex,150);
						  $reihe = utf8_encode($reihe);
                          echo $anfangbox,$folgenbox,$weiterbox,'<a href="',trim($weglines[$i]),'/',$reihe,'">',$var++,'</a><br>',$endegbox;
                        }
                
            fclose($tex);
} 
else  
{ 
echo "KEIN $folgen1 Vorhanden";

}
  
  } else {
  
  
     if(@file($folgen)) 
{ 
         $tex=fopen($folgen,"r");
         if(!$tex)
           {
             echo "Die $folgen konnte nicht geöffnet werden.";
             exit;
           }


             while (!feof($tex))
                        {
                          $reihe=fgets($tex,150);
						  $reihe = utf8_encode($reihe);
                          echo $anfangbox,$folgenbox,$weiterbox,'<a href="',trim($weglines[$i]),'/',$reihe,'">',$var++,'</a>',$endegbox;
                        }
                
            fclose($tex);
} 
else  
{ 
echo "KEIN $folgen Vorhanden";

}}
echo $endegbox;  
  
#----------------------------------------------ALLES folgentext der text der mit dem namen des ordner verknüft wird ENDE


  
  


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
 
  

  
  
  
  
  
  
  
  
  
  
 echo $anfangbox.$balben.$weiterbox.$endegbox;
  
  echo "</hr>";
  
  

#echo trim($weglines[$i])."</br>";
#echo $bild."</br>";
#echo $textweg."</br>";
#echo $infoweg."</br>";
#echo $folgen."</br>";
#echo "</br>";



















  
  
  
  
  

 











# aber hier das aussehen und welche infos ENDE





#schleife muss rausgenimmen werden mit unter wenn DB abgefragt wird anfang
   $i++;
}
#schleife muss rausgenimmen werden mit unter wenn DB abgefragt wird ende         
?>

