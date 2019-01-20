<?php

echo "Data Received(unsorted)<br>";
if($_GET!=null){
    foreach($_GET as $key => $value){
       $array[$key]=$value;
       echo "<br>".$key."=".$value."<br>";
    }
echo "<br>Number lines printed above";
echo count($array);
}
else
  echo "NONE";

echo "<br><br>";

  echo "Data Received(sorted by name)<br>";
if($_GET!=null){
   ksort($array);
   foreach($array as $key => $value)
   echo "<br>".$key."=".$value."<br>";
echo "<br>Number lines printed above";
echo count($array);
}
else
   echo "NONE";

echo "<br><br>";

echo "Data Received(sorted by value)<br>";
if($_GET!=null){
  asort($array);
foreach($array as $key=>$value)
  echo "<br>".$key."=".$value."<br>";
echo "<br>Number lines printed above";
echo count($array);  
}
else
  echo "NONE";
echo "<br><br>";
 ?>
  
  
