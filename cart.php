<!DOCTYPE html>
<?php
  $u=$_GET["u"];
  $m=$_GET["m"];
  $k=$_GET["k"];
  $l=$_GET["l"];
  $sum=0;

       echo "<br><br><table border='1' width='30%'><tr><th>".'Product'."</th><th>".'Qty'."</th><th>".'Cost'."</th></tr>";
           if($u>0){
               echo '<tr>';
               echo '<td>'.'USBPendrive'.'</td>';
               echo '<td>'.$u.'</td>';
               echo '<td>'.(300*$u).'</td>';
               echo '</tr>';
               $sum=$sum+(300*$u);
           }   
           if($m>0){
               echo "<tr><td>".'WirelessMouse'."</td><td>".$m."</td><td>".(200*$m)."</td></tr>";
               $sum=$sum+(200*$m);
           }   
           if($k>0){
               echo "<tr><td>".'KeyBoard'."</td><td>".$k."</td><td>".(400*$k)."</td></tr>";
               $sum=$sum+(400*$k);
           }   
           if($l>0){
               echo "<tr><td>".'Laptop'."</td><td>".$l."</td><td>".(33000*$l)."</td></tr>";
               $sum=$sum+(33000*$l);
           }   
     
       echo "<tr><td colspan='5' align='right'>".'Totalcost'.":".$sum."</td></tr>";           
       echo "</table>";
       echo "<h4>Thankyou for Shopping</h4>";
  ?>
