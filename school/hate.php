<!DOCTYPE html>
<?php 
session_start();

$cl=$_SESSION['class'];
include_once "connect.php"; 
$ed=$_GET['edit'];

 $conn = new mysqli($servername, $username, $password, $dbname); 
 if ($conn->connect_error) {     die("Connection failed: " . $conn->connect_error); }  
$r=mysqli_query($conn,"SELECT * FROM `ah` WHERE chass='$cl'" ); 
$r2=mysqli_query($conn,"SELECT * FROM `ah` WHERE id= '$ed'"); 




?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<meta  name="viewport" content="width=device-width,intial-scale=1.0"/> 

</head>
    <body >
      <div ><center>
      <a href="ha.php"><button style="width:30%;height:40px;color:#ffff00;background-color:#0f0f00;font-size:15px;"> الصفحة الرئيسية</button></a>
     
        <h1>احياء </h1>
      <table>
      <tr><form action=""method="post">
  <th><label style="font-size:30px">تحضير يومي</label></th>
<th><input type="text"name ="hom"  style="font-size:30px"></th>

<th><input type="submit" name="subm0" value="ارسال " style="width:100%; font-size:20px;background-color:#0ffff0;color:#ff0000; "></th>
</tr>
<?php
if(isset($_POST['subm0'])){
  while($row = mysqli_fetch_array($r)){
      
$ho=$_POST['hom'];



$sql12 = "UPDATE ah SET i='$ho'  WHERE id='$row[0]' ";
if ($conn->query($sql12) === TRUE) {
echo "Record updated successfully";
header("Location:ha.php?edit=33");
} else {
echo "Error updating record: " . $conn->error;
}
}
}?> 
    </form>
    <form action=""method="post">
  <td><label style="font-size:30px">امتحان شهري</label></td>
<td><input type="text"name ="exa"  style="font-size:30px"></td>

<td><input type="submit" name="subm2"  value="ارسال " style="width:100%; font-size:20px;background-color:#0ffff0;color:#ff0000; "></td>
</table>
<?php
if(isset($_POST['subm2'])){
  while($row = mysqli_fetch_array($r)){
      
$ex=$_POST['exa'];



$sql = "UPDATE ah SET j='$ex'  WHERE id='$row[0]' ";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
header("Location:ha.php?edit=33");
} else {
echo "Error updating record: " . $conn->error;
}
}
}?></center> 
    </form>
    </div>
   <?php
             while($row = mysqli_fetch_array($r2)){
             ?>
             <table>
            <tr>
   

        
                <th>id</th> <th>الاسم</th> <th>اليومي</th> <th>الشهر الاول</th><th>اليومي</th> <th>الشهر الثاني</th> <th>سعي</th><th>تحضير</th><th>امتحان</th><th>سلوك</th> <th>الملاحضات</th>  <th>aciton</th>
</tr> 
<form action="" method="post" enctype="multipart/form-data">
       <td> <input type="text" name="name" id="te" value="<?php echo $_GET['edit']; ?>"></td>
       <td> <input type="text" name="aq" style="width:179px; font-size:20px;"id="te"value="<?php echo $row[1]; ?>"></td>
       <td> <input type="text" name="a" id="te"value="<?php echo $row[3]; ?>"></td>
       
       <td><input type="text" name="c"id="te"value="<?php echo $row[5]; ?>"></td>
       <td><input type="text" name="d"id="te"value="<?php echo $row[6]; ?>"></td>
       
       <td><input type="text" name="f"id="te"value="<?php echo $row[8]; ?>"></td>
       <td><input type="text" name="dd"id="te"value="<?php echo $row[9]; ?>"></td>
       <td> <input type="text" name="h"id="te"value="<?php echo $row[10]; ?>"></td>
       <td><input type="text" name="i"id="te"value="<?php echo $row[11]; ?>"></td>
       <td><input type="text" name="g"id="te"value="<?php echo $row[12]; ?>"></td>
       <td><input type="text" name="k" id="te"value="<?php echo $row[13]; ?>"></td>
             </div>
       <td> <input type="submit" name="submit" value="حفظ" style="width:100%; font-size:20px;background-color:#0ffff0;color:#ff0000; "></td><?php }?>
            <?php
             while($row = mysqli_fetch_array($r)){
             ?>
             <?php echo "<tr>"?>
             <td style="width:3%; font-size:20px;"><?php echo $row[0];?></td> 
              <td style="width:12%; font-size:20px;"><?php echo $row[1];?></td> 
               <td style="width:4%; font-size:20px;"><?php echo $row[3];?></td> 
                
                <td style="width:4%; font-size:20px;"><?php echo $row[5];?></td> 
              <td style="width:4%; font-size:20px;"><?php echo $row[6];?></td> 
                
                <td style="width:4%; font-size:20px;"><?php echo $row[8];?></td>
                <td style="width:4%; font-size:20px;"><?php echo $row[9];?></td> 
              <td><?php echo $row[10];?></td> 
               <td><?php echo $row[11];?></td> 
                <td style="width:4%; font-size:20px;"><?php echo $row[12];?></td>
                <td><?php echo $row[13];?></td>
                <td style="background-color:#00ff00;color:#ffffff;"><a href="hate.php?edit=<?php echo $row['id'];?>">اختيار</a></td>
             <?php echo "</tr>";}?>
<?php
if(isset($_GET['edit'])){
}
$id=$_GET['edit'];
if (isset($_POST["submit"])){
 $aa=$_POST['a'];

$cc=$_POST['c'];
$dd=$_POST['d'];

$ff=$_POST['f'];
$gg=$_POST['dd'];
$hh=$_POST['h'];
$ii=$_POST['i'];
$jj=$_POST['g'];
$kk=$_POST['k'];

//echo $id;

$sql = "UPDATE ah SET a='$aa',c='$cc' , e='$dd' ,  g='$ff',h='$gg' , i='$hh',j='$ii' , k='$jj',m='$kk'  WHERE id=$id ";
if ($conn->query($sql) === TRUE) {
//echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}
}

?>


        </table>
</body>
</html>