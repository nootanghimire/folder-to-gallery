<?php

//dynamic javascript
//Usage: Use it for gallery viewing. Upload a File in a Folder .
//And include this javascript . It will automatically load all the images of the file and display a gallery
//types supported are: jpeg, gif, and png for now

//Made by:Nootan Ghimire
//Licenced Free for personal use and please include the original author.

//now changing the content type as javascript file
header("Content-type:application/javascript");
echo "var nootan1=0;\r";
echo "function nextpic() {\r";
echo "var photo = new Array(";
foreach (glob("gallery/*.jpg") as $filename){
//echo "$filename Size: ".round((filesize($filename)/1024),2)."KB. \r <br><br>";
 echo "\"$filename\",";
 }
foreach (glob("gallery/*.gif") as $filename1){
//echo "$filename Size: ".round((filesize($filename)/1024),2)."KB. \r <br><br>";
 echo "\"$filename1\",";
 }
 foreach (glob("gallery/*.jpeg") as $filename2){
//echo "$filename Size: ".round((filesize($filename)/1024),2)."KB. \r <br><br>";
 echo "\"$filename2\",";
 }
foreach (glob("gallery/*.png") as $filename3){
//echo "$filename Size: ".round((filesize($filename)/1024),2)."KB. \r <br><br>";
 echo "\"$filename3\",";
 }
echo "\"\");\r";
echo "document.slideshow.src=photo[nootan1];\r";
echo "nootan1++;\r";
echo "if(nootan1>=(photo.length)-1){\r";
echo "nootan1=0;\r}\r";
echo "}\r";
echo "setInterval(\"nextpic()\",4000);\r";

?>

 
