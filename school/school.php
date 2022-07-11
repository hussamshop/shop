<!DOCTYPE html>
<?php


session_start();
if(!isset($_SESSION['user'])){
  header("Location:logincontrol.php");
}include_once "connect.php";

$conn = new mysqli($servername, $username, $password, $dbname); 

$ed=$_GET['edit'];
   $r=mysqli_query($conn,"SELECT * FROM `school`"); 
   $r2=mysqli_query($conn,"SELECT * FROM `school` WHERE id= '$ed'"); 
//$w=mysqli_query($conn,"SELECT * FROM `users` WHERE username='$user'");  
     
     
  

?><html>
  <head><meta  name="viewport" content="width=device-width,intial-scale=1.0"/> 
</head>
    <body>
    <style>
   
   .te{
       width: 100px;
       height: 30px;
       border: 2px solid black;
   }div{width: 100%;
    height: 320px;
    background: -webkit-gradient(linear, left top, left bottom, from(#02040f), to(#ffffff));

    position: 5px;

       }
       .abd{
         color:#ffffff;
         font-size:20px;
       }
       .abd2{
         width:100%;
         font-size:15px;
       }
  
   
     
     </style><center>
     <div style="position: fixed;
     top: 0px;">
     <a href="hom.php"><button style="width:30%;height:40px;color:#ffff00;background-color:#0f0f00;font-size:15px;"> الصفحة الرئيسية</button></a>
     <h1 style="color:#ffffff" >الطلاب</h1>
    <form meth action=""  method="post" enctype="multipart/form-data">
      <table>
	  <tr><th><label class="abd" >id</label></th><th><label  class="abd">الاسم</label></th><th><label for="email" class="abd">البريد الاكتروني</label></th><th><label for="password" class="abd">كلمة السر</label></th><th><label for="class" class="abd">الصف</label></th></tr>
      
 
 
    <td><center><input type="number" name="id" class="abd2" style="width:45px;" ></center></td>
    <td><input type="text" name="name" class="abd2"></td>

    <td><input type="text" name="email"  class="abd2"></td>
     
     
    <td><center><input type="text" name="password" class="abd2"  > </center>  </td>  
    
    <td> <center><input type="text" name="class"  style="width:30px;" class="abd2"></center></td>
     <td><input type="submit" name="submit"  style="font-size:20px;width:60px;background-color:#0fff00;"value="اضافة"></td></tr>
     <?php
             while($row = mysqli_fetch_array($r2)){
             ?>
     </form>
     <form action="" method="post" enctype="multipart/form-data">
       <td> <center><input type="number"  style="width:45px;"name="name" id="te" class="abd2" value="<?php echo $_GET['edit']; ?>"></center></td>
       <td> <input type="text" name="a" id="te" class="abd2"value="<?php echo $row[1]; ?>"></td>
       <td> <input type="text" name="b" id="te" class="abd2"value="<?php echo $row[2]; ?>"></td>
       <td> <center><input type="text" name="c"id="te"  class="abd2"value="<?php echo $row[3]; ?>"></center></td>
       <td><center><input type="text" name="d"id="te" style="width:30px;" class="abd2"value="<?php echo $row[4]; ?>"></center></td>
       <td> <input type="submit" name="submit1" style="font-size:20px;width:60px;background-color:#00ff00;" value="تعديل"><br><?php }?>
   <input type="submit" name="submit2"style="font-size:20px;width:60px;background-color:#ff0000;color:#ffffff" value="حذف"></td>
             </form>
    </table><center>
    <form action="" method="post">
      <label for=""style="width:60px;font-size:20px;color:#ffffff;">اعلان</label>
    <input type="text" name="adrs"style="width:100%;font-size:15px;color:red" >
    <br>
        <input type="submit" name="subad"value="نشر"style="width:60px;font-size:20px;color:#ffffff;background-color:#000000;"></center>

<?php if (isset($_POST["subad"])){
 $adr=$_POST['adrs'];


$sql = "UPDATE address SET adress='$adr'  WHERE id=1 ";
if ($conn->query($sql) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
}?>
    </form>
             </div></center>
            
    <?php
if(isset($_GET['edit'])){
}
$id=$_GET['edit'];
if (isset($_POST["submit1"])){
 $aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
$dd=$_POST['d'];




$sql = "UPDATE school SET name='$aa',email='$bb',password='$cc' , class='$dd'  WHERE id=$id ";
if ($conn->query($sql) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}
$sql1 = "UPDATE math SET name='$aa',chass='$dd'  WHERE id=$id ";
if ($conn->query($sql1) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}
$sql2 = "UPDATE een SET name='$aa',chass='$dd'  WHERE id=$id ";
if ($conn->query($sql2) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}
$sql3 = "UPDATE ah SET name='$aa',chass='$dd'  WHERE id=$id ";
if ($conn->query($sql3) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}
$sql4 = "UPDATE ab SET name='$aa',chass='$dd'  WHERE id=$id ";
if ($conn->query($sql4) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}
$sql5 = "UPDATE ass SET name='$aa',chass='$dd'  WHERE id=$id ";
if ($conn->query($sql5) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}
$sql6 = "UPDATE hte SET name='$aa',chass='$dd'  WHERE id=$id ";
if ($conn->query($sql6) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}



}
if(isset($_GET['edit'])){
}
$id=$_GET['edit'];
if (isset($_POST["submit2"])){
 $aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];
$dd=$_POST['d'];


echo $id;

$sql = "DELETE FROM school WHERE id=$id ";
if ($conn->query($sql) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
$sql1 = "DELETE FROM een WHERE id=$id ";
if ($conn->query($sql1) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
$sql2 = "DELETE FROM ab WHERE id=$id ";
if ($conn->query($sql2) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
$sql3 = "DELETE FROM ah WHERE id=$id ";
if ($conn->query($sql3) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
$sql4 = "DELETE FROM ass WHERE id=$id ";
if ($conn->query($sql4) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
$sql5 = "DELETE FROM hte WHERE id=$id ";
if ($conn->query($sql5) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
$sql6 = "DELETE FROM math WHERE id=$id ";
if ($conn->query($sql6) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;
}
}
?>
     <?php
if (isset($_POST["submit"])){
   $ll=$_POST['id'];
        $a=$_POST['name'];
    $b=$_POST['email'];
        $c=$_POST['password'];
        $d=$_POST['class'];
     
   
 
  
  $sql = "INSERT INTO school (id ,name, email,password,class) VALUES ('$ll','$a', '$b', '$c','$d')";
  
  if ($conn->query($sql) === TRUE) {  
     
    } 
   else{     echo "Error: " . $sql . "<br>" . $conn->error; 
     $conn->close();}
  
     $sql1 = "INSERT INTO ab (id ,name,chass) VALUES ('$ll','$a', '$d')";
  
  if ($conn->query($sql1) === TRUE) {  
     
    } 
   else{     echo "Error: " . $sql1 . "<br>" . $conn->error; 
     $conn->close();}
   
     $sql2 = "INSERT INTO een (id ,name,chass) VALUES ('$ll','$a', '$d')";
  
     if ($conn->query($sql2) === TRUE) {  
        
       } 
      else{     echo "Error: " . $sql2 . "<br>" . $conn->error; 
        $conn->close();}
        $sql3 = "INSERT INTO ah (id ,name,chass) VALUES ('$ll','$a', '$d')";
  
        if ($conn->query($sql3) === TRUE) {  
           
          } 
         else{     echo "Error: " . $sql3 . "<br>" . $conn->error; 
           $conn->close();}
           $sql4 = "INSERT INTO ass (id ,name,chass) VALUES ('$ll','$a', '$d')";
  
  if ($conn->query($sql4) === TRUE) {  
     
    } 
   else{     echo "Error: " . $sql4 . "<br>" . $conn->error; 
     $conn->close();}
     $sql4 = "INSERT INTO hte (id ,name,chass) VALUES ('$ll','$a', '$d')";
  
  if ($conn->query($sql4) === TRUE) {  
     
   } 
   else{     echo "Error: " . $sql4 . "<br>" . $conn->error; 
     $conn->close();}
     $sql5 = "INSERT INTO math (id ,name,chass) VALUES ('$ll','$a', '$d')";
  
  if ($conn->query($sql5) === TRUE) {  
     
   } 
   else{     echo "Error: " . $sql5 . "<br>" . $conn->error; 
     $conn->close();}


    }

?>



   <center>
 <form method ="post">
 
 <table>
             <trclass="te">
                 <th class="te">id</th> <th class="te">الاسم</th class="te"> <th class="te">البريد الاكتروني</th> <th class="te">كلمة السر</th> <th class="te">الصف</th><th class="te">action</th>
</tr>
 <div class="c">

 <?php
 
 while($row=mysqli_fetch_array($r)){
  ?>
  
    <td class="te"><?php echo $row[0];?></td>  
    <td class="te"><?php echo $row[1];?></td>
      <td class="te"><?php echo $row[2];?></td> 
       <td class="te"><?php echo $row[3];?></td>
       <td class="te"><?php echo $row[4];?></td>
       <td class="te"style="background-color:#00ff00;font-size:20px"><center><a href="school.php?edit=<?php echo $row['id'];?> " >اختيار</a></center></td>
    <?php echo "</tr>";};
 ?>
  
    </table></div>
  </center>
    </body>
</html>