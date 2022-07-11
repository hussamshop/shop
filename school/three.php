
<!DOCTYPE html>



<?php
session_start();
 if(!isset($_SESSION['user'])){
   header("Location:tow.php");
 }
include_once "connect.php";
    
$tabl=$_SESSION['user'];
$sch=mysqli_query($conn,"SELECT * FROM `school` WHERE email='$tabl'");  

while($row=mysqli_fetch_array($sch)){
   echo"<tr>";
   $idd=$row[0];
   
  $name=$row[1];
    
    $class=$row[4];
    
}
$ad=mysqli_query($conn,"SELECT * FROM `address` WHERE id=1");  

$w=mysqli_query($conn,"SELECT * FROM `een` WHERE id='$idd'");  
$w1=mysqli_query($conn,"SELECT * FROM `ab` WHERE id='$idd'");  
     
$w2=mysqli_query($conn,"SELECT * FROM `ass` WHERE id='$idd'");  
     
$w3=mysqli_query($conn,"SELECT * FROM `hte` WHERE id='$idd'");  
$w4=mysqli_query($conn,"SELECT * FROM `ah` WHERE id='$idd'");  
$w5=mysqli_query($conn,"SELECT * FROM `math` WHERE id='$idd'");  
     

     
  

?>
<html>
<head><meta  name="viewport" content="width=device-width,intial-scale=1.0"/> </head>
<body>    

<style>

div{ width: 100%;
}
.eh{
   background-color:red;
   color:#ffffff;
   width: 60px;
   height: 40px;}
   .rd{
      background-color:#00fff0;
   color:red;
   width: 80px;
   height: 40px;
   font-size:30px
   }
}
table ,th,td{
   color:black;
   
   background-color:#ffffff;
border: 2px solid black;

}
.ed{
   width: 60px;
   height: 40px;
   font-size:20px
}
#w{width:400px;
}
body{background-color:#007878;
 }

</style> <center><div>
<form action=""method="post">
   <input type="submit" name="end" style="background-color:#ff0000;color:#ffffff;font-size:20px;" value="تسجيل الخروج">
   <?php
   if (isset($_POST["end"])){
session_unset();
session_destroy();

   }

   ?>
</form>






 
<style>
table ,th,td{
   color:black;
   
   background-color:#ffffff;
border: 2px solid black;

}
.ed{
   width: 60px;
   height: 40px;
   font-size:20px ;
   
}
.rd{
   width: 170px;
   height: 40px;
   font-size:20px;
  

}
#w{width:400px;
}
body{background-color:#00c0c0; }

p{
   font-size:20px;
   color:#ffffff;

}
</style>
 <center><p><?php echo $name?></p>
 <p><?php 
 if($class=="a1")
 
 echo "الصف الاول أ";
if($class=="a2")
 
 echo "الصف الاول ب";
 if($class=="a3")
 
 echo "الصف الاول ج";
 if($class=="a4")
 
 echo "الصف الاول د";
 if($class=="a5")
 
 echo "الصف الاول ه";
 if($class=="b1")
 
 echo "الصف الثاني أ";
if($class=="b2")
 
 echo "الصف الثاني ب";
 if($class=="b3")
 
 echo "الصف الثاني ج";
 if($class=="b4")
 
 echo "الصف الثاني د";
 if($class=="c1")
 
 echo "الصف الثالث أ";
if($class=="c2")
 
 echo "الصف الثالث ب";
 if($class=="c3")
 
 echo "الصف الثالث ج";
 if($class=="c4")
 
 echo "الصف الثالث د";
 if($class=="c5")
 
 echo "الصف الثالث ه";

 ?></p>
</center></div>
 <marquee behavior="" direction="right" style="color:red;font-size:30px;">
<?php while($row=mysqli_fetch_array($ad)){
    echo"<tr>";
   
   
    echo$row[1];

 }?></marquee>
<form method ="post">
 

 
 <table >
 <tr style="background-color:#d8bfd8; color:blue; ">
 
 <th class ="eh">المادة</th>
 <th class ="eh">اليومي</th>
 <th class ="eh">شهر الاول</th>
 
 <th class ="eh">يومي</th>
 <th class ="eh">شهر ثاني</th>
 
 <th class ="eh">سعي</th>
 <th class ="eh">تحضير </th>
 <th class ="eh">امتحان </th>
 <th class ="eh"> عدد ايام الغياب</th>
 <th class ="eh">ملاحضات</th>
 
 </tr>
 <?php
 while($row=mysqli_fetch_array($w)){
    echo"<tr>";
   
    echo"<td class='rd'>الانكليزي</td>";
    echo"<td class='ed'><center>".$row[3]."</center></td>";
    
    echo"<td class='ed'><center>".$row[5]."</center></td>";
    echo"<td class='ed'><center>".$row[6]."</center></td>";
    
    echo"<td class='ed'><center>".$row[8]."</center></td>";
    echo"<td class='ed'><center>".$row[9]."</center></td>";
    echo"<td class='rd'><center>".$row[10]."</center></td>";
    echo"<td class='rd'><center>".$row[11]."</center></td>";
    echo"<td class='ed'><center>".$row[12]."</center></td>";
    echo"<td class='rd'><center>".$row[13]."</center></td>";
        echo"</tr>";
 }
 
 while($row=mysqli_fetch_array($w1)){
    echo"<tr>";
    
    echo"<td class='rd'>العربي</td>";
    echo"<td class='ed'><center>".$row[3]."</center></td>";
    
    echo"<td class='ed'><center>".$row[5]."</center></td>";
    echo"<td class='ed'><center>".$row[6]."</center></td>";
    
    echo"<td class='ed'><center>".$row[8]."</center></td>";
    echo"<td class='ed'><center>".$row[9]."</center></td>";
    echo"<td class='rd'><center>".$row[10]."</center></td>";
    echo"<td class='rd'><center>".$row[11]."</center></td>";
    echo"<td class='ed'><center>".$row[12]."</center></td>";
    echo"<td class='rd'><center>".$row[13]."</center></td>";
    echo"</tr>";
 }
 
 while($row=mysqli_fetch_array($w2)){
    echo"<tr>";
    
    echo"<td class='rd'>الاسلامية</td>";
    echo"<td class='ed'><center>".$row[3]."</center></td>";
    
    echo"<td class='ed'><center>".$row[5]."</center></td>";
    echo"<td class='ed'><center>".$row[6]."</center></td>";
    
    echo"<td class='ed'><center>".$row[8]."</center></td>";
    echo"<td class='ed'><center>".$row[9]."</center></td>";
    echo"<td class='rd'><center>".$row[10]."</center></td>";
    echo"<td class='rd'><center>".$row[11]."</center></td>";
    echo"<td class='ed'><center>".$row[12]."</center></td>";
    echo"<td class='rd'><center>".$row[13]."</center></td>";
    echo"</tr>";
 }

 while($row=mysqli_fetch_array($w3)){
    echo"<tr>";
    
    echo"<td class='rd'>اجتماعيات</td>";
    echo"<td class='ed'><center>".$row[3]."</center></td>";
    
    echo"<td class='ed'><center>".$row[5]."</center></td>";
    echo"<td class='ed'><center>".$row[6]."</center></td>";
    
    echo"<td class='ed'><center>".$row[8]."</center></td>";
    echo"<td class='ed'><center>".$row[9]."</center></td>";
    echo"<td class='rd'><center>".$row[10]."</center></td>";
    echo"<td class='rd'><center>".$row[11]."</center></td>";
    echo"<td class='ed'><center>".$row[12]."</center></td>";
    echo"<td class='rd'><center>".$row[13]."</center></td>";
    
    echo"</tr>";
 }
 
 while($row=mysqli_fetch_array($w4)){
   echo"<tr>";
  
   echo"<td class='rd'>احياء</td>";
   echo"<td class='ed'><center>".$row[3]."</center></td>";
    
    echo"<td class='ed'><center>".$row[5]."</center></td>";
    echo"<td class='ed'><center>".$row[6]."</center></td>";
    
    echo"<td class='ed'><center>".$row[8]."</center></td>";
    echo"<td class='ed'><center>".$row[9]."</center></td>";
    echo"<td class='rd'><center>".$row[10]."</center></td>";
    echo"<td class='rd'><center>".$row[11]."</center></td>";
    echo"<td class='ed'><center>".$row[12]."</center></td>";
    echo"<td class='rd'><center>".$row[13]."</center></td>";
   echo"</tr>";

}
 while($row=mysqli_fetch_array($w5)){
    echo"<tr>";
    
    echo"<td class='rd'>رياضيات</td>";
    echo"<td class='ed'><center>".$row[3]."</center></td>";
    
    echo"<td class='ed'><center>".$row[5]."</center></td>";
    echo"<td class='ed'><center>".$row[6]."</center></td>";
    
    echo"<td class='ed'><center>".$row[8]."</center></td>";
    echo"<td class='ed'><center>".$row[9]."</center></td>";
    echo"<td class='rd'><center>".$row[10]."</center></td>";
    echo"<td class='rd'><center>".$row[11]."</center></td>";
    echo"<td class='ed'><center>".$row[12]."</center></td>";
    echo"<td class='rd'><center>".$row[13]."</center></td>";
    echo"</tr>";
 
 }
 ?>
 </table>
 </form>


 </body>
 </html>






