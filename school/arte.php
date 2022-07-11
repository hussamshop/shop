<!DOCTYPE html>

<?php 
include_once "connect.php";
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location:loginteach.php");
      }
$tabl=$_SESSION['user'];
//echo $tabl;
$sch=mysqli_query($conn,"SELECT * FROM `teachers` WHERE email='$tabl'");  

while($row=mysqli_fetch_array($sch)){
   
   $idd=$row[0];
  
  $name=$row[1];
   ?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <meta  name="viewport" content="width=device-width,intial-scale=1.0"/> 

    </head>
    <body style="background-color:#00a0a0">
        <div  >
            
<center><h1>اللغه العربية</h1></center>
        </div>
        <div><center><?php
        if($row[5]=="a1"){
    echo '<form action=""method="post">
    <input type="text"name="class" style="width:0px;height: 0px;">
    <input type="submit"name="submit" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
</form>';

}  

if (isset($_POST["submit"])){
     $_SESSION['class']="a1";
            header("Location:ar.php?edit=1101");
        
        }
       
        if($row[5]=="a2"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit1" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        }

if (isset($_POST["submit1"])){
     $_SESSION['class']="a2";
            header("Location:ar.php?edit=1201");
        
        }
       
        if($row[5]=="a3"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }
if (isset($_POST["submit2"])){
     $_SESSION['class']="a3";
            header("Location:ar.php?edit=1301");
        
        }
        
  
        if($row[5]=="a4"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }

if (isset($_POST["submit3"])){
     $_SESSION['class']="a4";
            header("Location:ar.php?edit=1401");
        
        }
        
  
        if($row[5]=="a5"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }

if (isset($_POST["submit4"])){
     $_SESSION['class']="a5";
            header("Location:ar.php?edit=1501");
        
        }
        if($row[6]=="a1"){
            echo '<form action=""method="post">
            <input type="text"name="class" style="width:0px;height: 0px;">
            <input type="submit"name="submit0" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        </form>';
        
        }  
        
        if (isset($_POST["submit0"])){
             $_SESSION['class']="a1";
                    header("Location:ar.php?edit=1101");
                
                }
               
                if($row[6]=="a2"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit10" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                }
        
        if (isset($_POST["submit10"])){
             $_SESSION['class']="a2";
                    header("Location:ar.php?edit=1201");
                
                }
               
                if($row[6]=="a3"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit20" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        if (isset($_POST["submit20"])){
             $_SESSION['class']="a3";
                    header("Location:ar.php?edit=1301");
                
                }
                
          
                if($row[6]=="a4"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit30" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        
        if (isset($_POST["submit30"])){
             $_SESSION['class']="a4";
                    header("Location:ar.php?edit=1401");
                
                }
                
          
                if($row[6]=="a5"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit40" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        
        if (isset($_POST["submit40"])){
             $_SESSION['class']="a5";
                    header("Location:ar.php?edit=1501");
                
                }
               
                if($row[7]=="a1"){
                    echo '<form action=""method="post">
                    <input type="text"name="class" style="width:0px;height: 0px;">
                    <input type="submit"name="submi0t" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                </form>';
                
                }  
                
                if (isset($_POST["submi0t"])){
                     $_SESSION['class']="a1";
                            header("Location:ar.php?edit=1101");
                        
                        }
                       
                        if($row[7]=="a2"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t1" value="الصف الاول ب" style="width:300px;height:70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        }
                
                if (isset($_POST["submi0t1"])){
                     $_SESSION['class']="a2";
                            header("Location:ar.php?edit=1201");
                        
                        }
                       
                        if($row[7]=="a3"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                if (isset($_POST["submi0t2"])){
                     $_SESSION['class']="a3";
                            header("Location:ar.php?edit=1301");
                        
                        }
                        
                  
                        if($row[7]=="a4"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                
                if (isset($_POST["submi0t3"])){
                     $_SESSION['class']="a4";
                            header("Location:ar.php?edit=1401");
                        
                        }
                        
                  
                        if($row[7]=="a5"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                
                if (isset($_POST["submi0t4"])){
                     $_SESSION['class']="a5";
                            header("Location:ar.php?edit=1501");
                        
                        }
                        if($row[8]=="a1"){
                            echo '<form action=""method="post">
                            <input type="text"name="class" style="width:0px;height: 0px;">
                            <input type="submit"name="submi1t" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        </form>';
                        
                        }  
                        
                        if (isset($_POST["submi1t"])){
                             $_SESSION['class']="a1";
                                    header("Location:ar.php?edit=1101");
                                
                                }
                               
                                if($row[8]=="a2"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submi1t1" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                }
                        
                        if (isset($_POST["submi1t1"])){
                             $_SESSION['class']="a2";
                                    header("Location:ar.php?edit=1201");
                                
                                }
                               
                                if($row[8]=="a3"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submi1t2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        if (isset($_POST["submi1t2"])){
                             $_SESSION['class']="a3";
                                    header("Location:ar.php?edit=1301");
                                
                                }
                                
                          
                                if($row[8]=="a4"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submi1t3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        
                        if (isset($_POST["submi1t3"])){
                             $_SESSION['class']="a4";
                                    header("Location:ar.php?edit=1401");
                                
                                }
                                
                          
                                if($row[8]=="a5"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submi1t4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        
                        if (isset($_POST["submi1t4"])){
                             $_SESSION['class']="a5";
                                    header("Location:ar.php?edit=1501");
                                
                                }     
                                if($row[9]=="a1"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                    <input type="submit"name="submi2t" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                </form>';
                                
                                }  
                                
                                if (isset($_POST["submi2t"])){
                                     $_SESSION['class']="a1";
                                            header("Location:ar.php?edit=1101");
                                        
                                        }
                                       
                                        if($row[9]=="a2"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submi2t1" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        }
                                
                                if (isset($_POST["submi2t1"])){
                                     $_SESSION['class']="a2";
                                            header("Location:ar.php?edit=1201");
                                        
                                        }
                                       
                                        if($row[9]=="a3"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submi2t2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                if (isset($_POST["submi2t2"])){
                                     $_SESSION['class']="a3";
                                            header("Location:ar.php?edit=1301");
                                        
                                        }
                                        
                                  
                                        if($row[9]=="a4"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submi2t3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                
                                if (isset($_POST["submi2t3"])){
                                     $_SESSION['class']="a4";
                                            header("Location:ar.php?edit=1401");
                                        
                                        }
                                        
                                  
                                        if($row[9]=="a5"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submi2t4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                
                                if (isset($_POST["submi2t4"])){
                                     $_SESSION['class']="a5";
                                            header("Location:ar.php?edit=1501");
                                        
                                        }   
                                        
                                        if($row[5]=="b1"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                            <input type="submit"name="submi3t" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        </form>';
                                        
                                        }  
                                        
                                        if (isset($_POST["submi3t"])){
                                             $_SESSION['class']="b1";
                                                    header("Location:ar.php?edit=2101");
                                                
                                                }
                                               
                                                if($row[5]=="b2"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="submi3t1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                }
                                        
                                        if (isset($_POST["submi3t1"])){
                                             $_SESSION['class']="b2";
                                             header("Location:ar.php?edit=2201");
                                                }
                                               
                                                if($row[5]=="b3"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="submi3t2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                
                                                }
                                        if (isset($_POST["submi3t2"])){
                                             $_SESSION['class']="b3";
                                             header("Location:ar.php?edit=2301");
                                                }
                                                
                                          
                                                if($row[5]=="b4"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="submi3t3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                
                                                }
                                        
                                        if (isset($_POST["submi3t3"])){
                                             $_SESSION['class']="b4";
                                             header("Location:ar.php?edit=2401");
                                                }
                                                if($row[6]=="b1"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                                    <input type="submit"name="submi4t" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                </form>';
                                                
                                                }  
                                                
                                                if (isset($_POST["submi4t"])){
                                                     $_SESSION['class']="b1";
                                                     header("Location:ar.php?edit=2101");
                                                        }
                                                       
                                                        if($row[6]=="b2"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submi4t1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        }
                                                
                                                if (isset($_POST["submi4t1"])){
                                                     $_SESSION['class']="b2";
                                                     header("Location:ar.php?edit=2201");
                                                        }
                                                       
                                                        if($row[6]=="b3"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submi4t2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        
                                                        }
                                                if (isset($_POST["submi4t2"])){
                                                     $_SESSION['class']="b3";
                                                     header("Location:ar.php?edit=2301");
                                                        }
                                                        
                                                  
                                                        if($row[6]=="b4"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submi4t3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        
                                                        }
                                                
                                                if (isset($_POST["submi4t3"])){
                                                     $_SESSION['class']="b4";
                                                     header("Location:ar.php?edit=2401");
                                                        }
                                                        if($row[7]=="b1"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                                            <input type="submit"name="submi5t" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        </form>';
                                                        
                                                        }  
                                                        
                                                        if (isset($_POST["submi5t"])){
                                                             $_SESSION['class']="b1";
                                                             header("Location:ar.php?edit=2101");
                                                                }
                                                               
                                                                if($row[7]=="b2"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submi5t1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                }
                                                        
                                                        if (isset($_POST["submi5t1"])){
                                                             $_SESSION['class']="b2";
                                                             header("Location:ar.php?edit=2201");
                                                                }
                                                               
                                                                if($row[7]=="b3"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submi5t2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                
                                                                }
                                                        if (isset($_POST["submi5t2"])){
                                                             $_SESSION['class']="b3";
                                                             header("Location:ar.php?edit=2301");
                                                                }
                                                                
                                                          
                                                                if($row[7]=="b4"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submi5t3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                
                                                                }
                                                        
                                                        if (isset($_POST["submi5t3"])){
                                                             $_SESSION['class']="b4";
                                                             header("Location:ar.php?edit=2401");
                                                                }
                                                                if($row[8]=="b1"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                                                    <input type="submit"name="submi6t" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                </form>';
                                                                
                                                                }  
                                                                
                                                                if (isset($_POST["submi6t"])){
                                                                     $_SESSION['class']="b1";
                                                                     header("Location:ar.php?edit=2101");
                                                                        }
                                                                       
                                                                        if($row[8]=="b2"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="submi6t1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        }
                                                                
                                                                if (isset($_POST["submi6t1"])){
                                                                     $_SESSION['class']="b2";
                                                                     header("Location:ar.php?edit=2201");
                                                                        }
                                                                       
                                                                        if($row[8]=="b3"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="submi6t2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        
                                                                        }
                                                                if (isset($_POST["submi6t2"])){
                                                                     $_SESSION['class']="b3";
                                                                     header("Location:ar.php?edit=2301");
                                                                        }
                                                                        
                                                                  
                                                                        if($row[8]=="b4"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="submi6t3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        
                                                                        }
                                                                
                                                                if (isset($_POST["submi6t3"])){
                                                                     $_SESSION['class']="b4";
                                                                     header("Location:ar.php?edit=2401");
                                                                        }
                                                                        if($row[9]=="b1"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                                                            <input type="submit"name="submi7t" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        </form>';
                                                                        
                                                                        }  
                                                                        
                                                                        if (isset($_POST["submi7t"])){
                                                                             $_SESSION['class']="b1";
                                                                             header("Location:ar.php?edit=2101");
                                                                                }
                                                                               
                                                                                if($row[9]=="b2"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="submi7t1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                }
                                                                        
                                                                        if (isset($_POST["submi7t1"])){
                                                                             $_SESSION['class']="b2";
                                                                                    header("Location:ar.php?edit=2201");
                                                                                
                                                                                }
                                                                               
                                                                                if($row[9]=="b3"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="submi7t2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                
                                                                                }
                                                                        if (isset($_POST["submi7t2"])){
                                                                             $_SESSION['class']="b3";
                                                                             header("Location:ar.php?edit=2301");
                                                                                }
                                                                                
                                                                          
                                                                                if($row[9]=="b4"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="submi7t3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                
                                                                                }
                                                                        
                                                                        if (isset($_POST["submi7t3"])){
                                                                             $_SESSION['class']="b4";
                                                                             header("Location:ar.php?edit=2401");
                                                            
    }    
    }
  ?>
              <form action=""method="post">
  <input type="text"name="class"style="width:0px;height: 0px;"  >
  <input type="submit"name="submi7t5" value="  تسجيل الخروج" style="width:300px;height: 70px;font-size:40px ;background-color:#ff0000;">

</form><?php
if (isset($_POST["submi7t5"])){
    session_unset();
    session_destroy();
              
    }
  ?>   
            
        </div>
    </body>
</html>
