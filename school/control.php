<!DOCTYPE html>

<?php


session_start();
if(!isset($_SESSION['user'])){
    header("Location:logincontrol.php");
  }
include_once "connect.php";


$conn = new mysqli($servername, $username, $password, $dbname); 

$ed=$_GET['edit'];
   $r=mysqli_query($conn,"SELECT * FROM `control`"); 
   $r2=mysqli_query($conn,"SELECT * FROM `control` WHERE id= '$ed'"); 
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
    height: 290px;
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
     
     <h1 style="color:#ffffff" >الادارة</h1>
    <form meth action=""  method="post" enctype="multipart/form-data">
      <table>
	  <tr><th><label class="abd" >id</label></th><th><label  class="abd">الاسم</label></th></tr>
      
 
 
    <td><center><input type="number" name="id" class="abd2" ></center></td>
    <td><input type="text" name="name" class="abd2"></td>

    <td><input type="text" name="email"  class="abd2"></td>
     
     
    <td><center><input type="text" name="password" class="abd2"  > </center>  </td>  
    
   
     <td><input type="submit" name="submit"  style="font-size:20px;width:60px;background-color:#0fff00;"value="اضافة"></td></tr>
     <?php
             while($row = mysqli_fetch_array($r2)){
             ?>
     </form>
     <form action="" method="post" enctype="multipart/form-data">
       <td> <center><input type="number" name="name" id="te" class="abd2" value="<?php echo $_GET['edit']; ?>"></center></td>
       <td> <input type="text" name="a" id="te" class="abd2"value="<?php echo $row[1]; ?>"></td>
       <td> <input type="text" name="b" id="te" class="abd2"value="<?php echo $row[2]; ?>"></td>
       <td> <center><input type="text" name="c"id="te"  class="abd2"value="<?php echo $row[3]; ?>"></center></td>
    
       <td> <input type="submit" name="submit1" style="font-size:20px;width:60px;background-color:#00ff00;" value="تعديل"></td><?php }?></td>
       <td><input type="submit" name="submit2"style="font-size:20px;width:60px;background-color:#ff0000;color:#ffffff" value="حذف"></td>
             </form>
    </table><center>
    
   
             </div></center>
            
    <?php
if(isset($_GET['edit'])){
}
$id=$_GET['edit'];
if (isset($_POST["submit1"])){
 $aa=$_POST['a'];
$bb=$_POST['b'];
$cc=$_POST['c'];




$sql = "UPDATE control SET name='$aa',email='$bb',password='$cc'   WHERE id=$id ";
if ($conn->query($sql) === TRUE) {
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

$sql = "DELETE FROM control WHERE id=$id ";
if ($conn->query($sql) === TRUE) {

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
        
   
 
  
  $sql = "INSERT INTO control (id ,name, email,password) VALUES ('$ll','$a', '$b', '$c')";
  
  if ($conn->query($sql) === TRUE) {  
     
    } 
   else{     echo "Error: " . $sql . "<br>" . $conn->error; 
     $conn->close();}
  
     

    }

?>



   <center>
 <form method ="post">
 
 <table>
             <trclass="te">
                 <th class="te">id</th> <th class="te">الاسم</th class="te"> <th class="te">البريد الاكتروني</th> <th class="te">كلمة السر</th> <th class="te">action</th>
</tr>
 <div class="c">

 <?php
 
 while($row=mysqli_fetch_array($r)){
  ?>
  
    <td class="te"><?php echo $row[0];?></td>  
    <td class="te"><?php echo $row[1];?></td>
      <td class="te"><?php echo $row[2];?></td> 
       <td class="te"><?php echo $row[3];?></td>
       
       <td class="te"style="background-color:#00ff00;font-size:20px"><center><a href="control.php?edit=<?php echo $row['id'];?> " >اختيار</a></center></td>
    <?php echo "</tr>";};
 ?>
  
    </table></div>
  </center>
    </body>
</html>