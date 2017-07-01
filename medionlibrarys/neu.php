<?php 

$zitate = file("../inhalt.txt");
for($i=0;$i < count($zitate); $i++){
   echo "<br>".trim($zitate[$i]);
  


  
  
      #script1
$wohin = "../".trim($zitate[$i])."/"."medionlibrarys";
$dest_dir = "../".trim($zitate[$i])."/"."medionlibrarys";

if (is_dir($wohin)) {
echo "verzeichnis gibts schon"; } 
else {
 
  #script1 weiter
mkdir ($wohin, 0775);
} 


  
  
  
  
  
  
  
$file = '../index.php';
$newfile = '../'.trim($zitate[$i]).'/index.php';

if (!copy($file, $newfile)) {
    echo "copy $file schlug fehl...\n";

  }
  
  
  
    
$file1 = './neu.php';
$newfile1 = '../'.trim($zitate[$i]).'/medionlibrarys/neu.php';

if (!copy($file1, $newfile1)) {
    echo "copy $file1 schlug fehl...\n";

}
 
 $file2 = './medionlibrarys.txt';
$newfile2 = '../'.trim($zitate[$i]).'/medionlibrarys/medionlibrarys.txt';

if (!copy($file2, $newfile2)) {
    echo "copy $file2 schlug fehl...\n";

}
 
  
  
  
  
  
  
  
  
  
  
$file3 = './info.txt';
$newfile3 = '../'.trim($zitate[$i]).'/medionlibrarys/info.txt';

if (!copy($file3, $newfile3)) {
    echo "copy $file3 schlug fehl...\n";

}
  
  
$file4 = './folgenlist.txt';
$newfile4 = '../'.trim($zitate[$i]).'/medionlibrarys/folgenlist.txt';

if (!copy($file4, $newfile4)) {
    echo "copy $file4 schlug fehl...\n";

}
  
$file5 = './bearbeiten.php';
$newfile5 = '../'.trim($zitate[$i]).'/medionlibrarys/bearbeiten.php';

if (!copy($file5, $newfile5)) {
    echo "copy $file5 schlug fehl...\n";

} 

$file6 = './medionlibrarys.css';
$newfile6 = '../'.trim($zitate[$i]).'/medionlibrarys/medionlibrarys.css';

if (!copy($file6, $newfile6)) {
    echo "copy $file6 schlug fehl...\n";

}
  
  
$file7 = './medionlibrarys.jpg';
$newfile7 = '../'.trim($zitate[$i]).'/medionlibrarys/medionlibrarys.jpg';

if (!copy($file7, $newfile7)) {
    echo "copy $file7 schlug fehl...\n";

}
  
$file8 = './leer.jpg';
$newfile8 = '../'.trim($zitate[$i]).'/medionlibrarys/leer.jpg';

if (!copy($file8, $newfile8)) {
    echo "copy $file8 schlug fehl...\n";

} 

$file9 = './infotext.php';
$newfile9 = '../'.trim($zitate[$i]).'/medionlibrarys/infotext.php';

if (!copy($file9, $newfile9)) {
    echo "copy $file9 schlug fehl...\n";

}  
  

  
  
  
  
}
header("Refresh:0; url=../")
?>


