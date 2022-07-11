<!DOCTYPE html>

<?php


session_start();
if(!isset($_SESSION['user'])){
  header("Location:logincontrol.php");
} include_once "connect.php";

$conn = new mysqli($servername, $username, $password, $dbname); 

$ed=$_GET['edit'];
   $r=mysqli_query($conn,"SELECT * FROM `teachers`"); 
   $r2=mysqli_query($conn,"SELECT * FROM `teachers` WHERE id= '$ed'"); 
//$w=mysqli_query($conn,"SELECT * FROM `users` WHERE username='$user'");  
     
     
  

?><html>
  <head>

  <meta  name="viewport" content="width=device-width,intial-scale=1.0"/> 

  </head>
    <body>
    <style>
   
   .te{
       width: 100px;
       height: 30px;
       border: 2px solid black;
   }div{width: 100%;
    height:300px;
    background: -webkit-gradient(linear, left top, left bottom, from(#040f01), to(#ffffff));

   

       }
       label{
         color:#ffffff;
         
       }
       .abd{
         width:100%;
         color:#ffffff;
         font-size:30px;
       }
       .abd2{
         width: 100%;
         font-size:15px;
       }
  
   
     
     </style><center>
     <div style="position: fixed;
     top: 0px;">
     <a href="hom.php"><button style="width:30%;height:40px;color:#ffff00;background-color:#0f0f00;font-size:15px;"> الصفحة الرئيسية</button></a>
     
     <h1 style="color:#ffffff" >المدرسين</h1>
    <form meth action=""  method="post" enctype="multipart/form-data">
      <table>
	  <tr><th><label  >id</label></th>
      <th><label  >الاسم</label></th>
      <th><label >البريد الاكتروني</label></th>
      <th><label >كلمة السر</label></th>
      <th><label >المادة</label></th>
      <th><label>الصف</label></th>
      <th><label >الصف</label></th>
      <th><label >الصف</label></th>
      <th><label >الصف</label></th>
      <th><label >الصف</label></th>
 
      </tr>
<td><center><input type="number" name="id" class="abd2" "></center></td>
    <td><input type="text" name="name" class="abd2" ></td>
    <td><input type="text" name="email"  class="abd2" ></td> 
    <td><center><input type="text" name="password" class="abd2"  > </center>  </td> 
 
      <td> <center><input type="text" name="class1"  class="abd2"></center></td>
    <td> <center><input type="text" name="class2"  class="abd2"></center></td>
    <td> <center><input type="text" name="class3"   class="abd2"></center></td>
    <td> <center><input type="text" name="class4"  class="abd2"></center></td>
    <td> <center><input type="text" name="class5"   class="abd2"></center></td>
    
      
      
    
   
    <td> <center><input type="text" name="class6"   class="abd2"></center></td>
    
     <td><input type="submit" name="submitt"  style="font-size:20px;width:60px;background-color:#0fff00;"value="اضافة"></td>
     <?php
             while($row = mysqli_fetch_array($r2)){
             ?>
     </form>
     <form action="" method="post" enctype="multipart/form-data">
      <tr> <td> <center><input type="number" name="name" id="te"  class="abd2" value="<?php echo $_GET['edit']; ?>"></center></td>
       <td> <input type="text" name="a" id="te"  class="abd2"value="<?php echo $row[1]; ?>"></td>
       <td> <input type="text" name="b" id="te" class="abd2"value="<?php echo $row[2]; ?>"></td>
       <td> <center><input type="text" name="c"id="te" class="abd2"value="<?php echo $row[3]; ?>"></center></td>
       <td><center><input type="text" name="class1"id="te"  class="abd2"value=" <?php echo $row[4]; ?>"></center></td>
    <td> <input type="text" name="class2"  class="abd2"  value=" <?php echo $row[5]; ?>"></td>
    <td> <input type="text" name="class3"  class="abd2" value=" <?php echo $row[6]; ?>"></td>
    <td> <input type="text" name="class4"   class="abd2" value=" <?php echo $row[7]; ?>"></td>
    <td> <input type="text" name="class5"   class="abd2" value=" <?php echo $row[8]; ?>"></td>
    <td> <center><input type="text" name="class6"  class="abd2"value=" <?php echo $row[9]; ?>"></center></td>
    
       <td> <input type="submit" name="submit1" style="font-size:20px;width:60px;background-color:#00ff00;" value="تعديل"><?php }?>
       <input type="submit" name="submit2"style="font-size:20px;width:60px;background-color:#ff0000;color:#ffffff" value="حذف"></td></tr>
             </form>
    </table><center>
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
       $cl1=$_POST['class1'];
        $cl2=$_POST['class2'];
        $cl3=$_POST['class3'];
        $cl4=$_POST['class4'];
        $cl5=$_POST['class5'];
        $cl6=$_POST['class6'];
        




$sql2 = "UPDATE teachers SET name='$aa',email='$bb',password='$cc' , class1='$cl1',class2='$cl2',class3='$cl3',class4='$cl4',class5='$cl5',class6='$cl6'  WHERE id=$id ";
if ($conn->query($sql2) === TRUE) {
} else {
echo "Error updating record: " . $conn->error;
}




}
if(isset($_GET['edit'])){
}
$id=$_GET['edit'];
if (isset($_POST["submit2"])){
 

$sql = "DELETE FROM teachers WHERE id=$id ";
if ($conn->query($sql) === TRUE) {

} else {
echo "Error updating record: " . $conn->error;

}
}
?>
     <?php
if (isset($_POST["submitt"])){
         $ll=$_POST['id'];
        $a=$_POST['name'];
        $b=$_POST['email'];
        $c=$_POST['password'];
        $cl1=$_POST['class1'];
        $cl2=$_POST['class2'];
        $cl3=$_POST['class3'];
        $cl4=$_POST['class4'];
        $cl5=$_POST['class5'];
        $cl6=$_POST['class6'];
        
        

     
   
 
  
  $sql = "INSERT INTO teachers (id ,name, email,password,class1,class2,class3,class4,class5,class6) VALUES ('$ll','$a', '$b', '$c','$cl1','$cl2','$cl3','$cl4','$cl5','$cl6')";
  
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
                 <th class="te">id</th> 
                 <th class="te">الاسم</th >
                  <th class="te">البريد الاكتروني</th>
                   <th class="te">كلمة السر</th>
                    <th class="te">المادة</th>
                    <th class="te">الصف</th>
                    <th class="te">الصف</th>
                    <th class="te">الصف</th>
                    <th class="te">الصف</th>
                    <th class="te">الصف</th>
                    <th class="te">action</th>
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
       <td class="te"><?php echo $row[5];?></td>  
    <td class="te"><?php echo $row[6];?></td>
      <td class="te"><?php echo $row[7];?></td> 
       <td class="te"><?php echo $row[8];?></td>
       <td class="te"><?php echo $row[9];?></td>
       <td class="te"style="background-color:#00ff00"><a href="teachers.php?edit=<?php echo $row['id'];?> " >اختيار</a></td>
    <?php echo "</tr>";};
 ?>
  
    </table></div>
  </center>
    </body>
</html>