<?php
$ordner = './';
        $dateihandle = fopen("./inhalt.txt","w");
  $handle = opendir($ordner);
  while($file = readdir($handle)) {
    if( ($file != ".") && ($file != "..") ) {
      if(is_dir($file)) {
       # echo("<a href=\"".$ordner."/".$file."\">".$file."</a><br />");

fwrite($dateihandle, ($file."\r\n"));
      }
    }
  }


  closedir($handle);

  
  
  
?>

 <?php 
    $löschen = "medionlibrarys"; 
    $file = file("./inhalt.txt"); 
    $neu = fopen ("./inhalt.txt","w"); 

    foreach($file as $zeile) 
    { 
     if(trim($zeile) != $löschen) 
     { 
      fwrite($neu, $zeile); 
     } 
    } 
    fclose ($neu);   
?> 

