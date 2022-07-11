<!DOCTYPE html>

<?php 
include_once "connect.php";
    session_start();
$tabl=$_SESSION['user'];
if(!isset($_SESSION['user'])){
    header("Location:loginteach.php");
  }
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
    <body style="background-color: #00a0a0;">
        <div >
<center><h1>اللغه الانكليزية</h1></center>
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
            header("Location:tech.php?edit=1101");
        
        }
       
        if($row[5]=="a2"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit1" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        }

if (isset($_POST["submit1"])){
     $_SESSION['class']="a2";
            header("Location:tech.php?edit=1201");
        
        }
       
        if($row[5]=="a3"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }
if (isset($_POST["submit2"])){
     $_SESSION['class']="a3";
            header("Location:tech.php?edit=1301");
        
        }
        
  
        if($row[5]=="a4"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }

if (isset($_POST["submit3"])){
     $_SESSION['class']="a4";
            header("Location:tech.php?edit=1401");
        
        }
        
  
        if($row[5]=="a5"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }

if (isset($_POST["submit4"])){
     $_SESSION['class']="a5";
            header("Location:tech.php?edit=1501");
        
        }
        if($row[6]=="a1"){
            echo '<form action=""method="post">
            <input type="text"name="class" style="width:0px;height: 0px;">
            <input type="submit"name="submit0" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        </form>';
        
        }  
        
        if (isset($_POST["submit0"])){
             $_SESSION['class']="a1";
                    header("Location:tech.php?edit=1101");
                
                }
               
                if($row[6]=="a2"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit10" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                }
        
        if (isset($_POST["submit10"])){
             $_SESSION['class']="a2";
                    header("Location:tech.php?edit=1201");
                
                }
               
                if($row[6]=="a3"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit20" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        if (isset($_POST["submit20"])){
             $_SESSION['class']="a3";
                    header("Location:tech.php?edit=1301");
                
                }
                
          
                if($row[6]=="a4"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit30" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        
        if (isset($_POST["submit30"])){
             $_SESSION['class']="a4";
                    header("Location:tech.php?edit=1401");
                
                }
                
          
                if($row[6]=="a5"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit40" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        
        if (isset($_POST["submit40"])){
             $_SESSION['class']="a5";
                    header("Location:tech.php?edit=1501");
                
                }
               
                if($row[7]=="a1"){
                    echo '<form action=""method="post">
                    <input type="text"name="class" style="width:0px;height: 0px;">
                    <input type="submit"name="submit11" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                </form>';
                
                }  
                
                if (isset($_POST["submit11"])){
                     $_SESSION['class']="a1";
                            header("Location:tech.php?edit=1101");
                        
                        }
                       
                        if($row[7]=="a2"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submit12" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        }
                
                if (isset($_POST["submit12"])){
                     $_SESSION['class']="a2";
                            header("Location:tech.php?edit=1201");
                        
                        }
                       
                        if($row[7]=="a3"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submit22" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                if (isset($_POST["submit22"])){
                     $_SESSION['class']="a3";
                            header("Location:tech.php?edit=1301");
                        
                        }
                        
                  
                        if($row[7]=="a4"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submit32" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                
                if (isset($_POST["submit32"])){
                     $_SESSION['class']="a4";
                            header("Location:tech.php?edit=1401");
                        
                        }
                        
                  
                        if($row[7]=="a5"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submit42" value="الصف الاول ه" style="width:300px;height:70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                
                if (isset($_POST["submit42"])){
                     $_SESSION['class']="a5";
                            header("Location:tech.php?edit=1501");
                        
                        }
                        if($row[8]=="a1"){
                            echo '<form action=""method="post">
                            <input type="text"name="class" style="width:0px;height: 0px;">
                            <input type="submit"name="submit21" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        </form>';
                        
                        }  
                        
                        if (isset($_POST["submit21"])){
                             $_SESSION['class']="a1";
                                    header("Location:tech.php?edit=1101");
                                
                                }
                               
                                if($row[8]=="a2"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submit13" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                }
                        
                        if (isset($_POST["submit13"])){
                             $_SESSION['class']="a2";
                                    header("Location:tech.php?edit=1201");
                                
                                }
                               
                                if($row[8]=="a3"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submit23" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        if (isset($_POST["submit23"])){
                             $_SESSION['class']="a3";
                                    header("Location:tech.php?edit=1301");
                                
                                }
                                
                          
                                if($row[8]=="a4"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submit33" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        
                        if (isset($_POST["submit33"])){
                             $_SESSION['class']="a4";
                                    header("Location:tech.php?edit=1401");
                                
                                }
                                
                          
                                if($row[8]=="a5"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="submit43" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        
                        if (isset($_POST["submit43"])){
                             $_SESSION['class']="a5";
                                    header("Location:tech.php?edit=1501");
                                
                                }     
                                if($row[9]=="a1"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                    <input type="submit"name="submit44" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                </form>';
                                
                                }  
                                
                                if (isset($_POST["submit44"])){
                                     $_SESSION['class']="a1";
                                            header("Location:tech.php?edit=1101");
                                        
                                        }
                                       
                                        if($row[9]=="a2"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submit14" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        }
                                
                                if (isset($_POST["submit14"])){
                                     $_SESSION['class']="a2";
                                            header("Location:tech.php?edit=1201");
                                        
                                        }
                                       
                                        if($row[9]=="a3"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submit24" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                if (isset($_POST["submit24"])){
                                     $_SESSION['class']="a3";
                                            header("Location:tech.php?edit=1301");
                                        
                                        }
                                        
                                  
                                        if($row[9]=="a4"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submit34" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                
                                if (isset($_POST["submit34"])){
                                     $_SESSION['class']="a4";
                                            header("Location:tech.php?edit=1401");
                                        
                                        }
                                        
                                  
                                        if($row[9]=="a5"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="submit45" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                
                                if (isset($_POST["submit45"])){
                                     $_SESSION['class']="a5";
                                            header("Location:tech.php?edit=1501");
                                        
                                        }        
                                        if($row[5]=="b1"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                            <input type="submit"name="submita" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        </form>';
                                        
                                        }  
                                        
                                        if (isset($_POST["submita"])){
                                             $_SESSION['class']="b1";
                                                    header("Location:tech.php?edit=2101");
                                                
                                                }
                                               
                                                if($row[5]=="b2"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="submit15" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                }
                                        
                                        if (isset($_POST["submit15"])){
                                             $_SESSION['class']="b2";
                                             header("Location:tech.php?edit=2201");
                                                }
                                               
                                                if($row[5]=="b3"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="submit25" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                
                                                }
                                        if (isset($_POST["submit25"])){
                                             $_SESSION['class']="b3";
                                             header("Location:tech.php?edit=2301");
                                                }
                                                
                                          
                                                if($row[5]=="b4"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="submit35" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                
                                                }
                                        
                                        if (isset($_POST["submit35"])){
                                             $_SESSION['class']="b4";
                                             header("Location:tech.php?edit=2401");
                                                }
                                                if($row[6]=="b1"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                                    <input type="submit"name="submit6" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                </form>';
                                                
                                                }  
                                                
                                                if (isset($_POST["submit6"])){
                                                     $_SESSION['class']="b1";
                                                     header("Location:tech.php?edit=2101");
                                                        }
                                                       
                                                        if($row[6]=="b2"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submit16" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        }
                                                
                                                if (isset($_POST["submit16"])){
                                                     $_SESSION['class']="b2";
                                                     header("Location:tech.php?edit=2201");
                                                        }
                                                       
                                                        if($row[6]=="b3"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submit26" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        
                                                        }
                                                if (isset($_POST["submit2"])){
                                                     $_SESSION['class']="b3";
                                                     header("Location:tech.php?edit=2301");
                                                        }
                                                        
                                                  
                                                        if($row[6]=="b4"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submit36" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        
                                                        }
                                                
                                                if (isset($_POST["submit36"])){
                                                     $_SESSION['class']="b4";
                                                     header("Location:tech.php?edit=2401");
                                                        }
                                                        if($row[7]=="b1"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                                            <input type="submit"name="submit7" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        </form>';
                                                        
                                                        }  
                                                        
                                                        if (isset($_POST["submit7"])){
                                                             $_SESSION['class']="b1";
                                                             header("Location:tech.php?edit=2101");
                                                                }
                                                               
                                                                if($row[7]=="b2"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submit17" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                }
                                                        
                                                        if (isset($_POST["submit17"])){
                                                             $_SESSION['class']="b2";
                                                             header("Location:tech.php?edit=2201");
                                                                }
                                                               
                                                                if($row[7]=="b3"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submit2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                
                                                                }
                                                        if (isset($_POST["submit27"])){
                                                             $_SESSION['class']="b3";
                                                             header("Location:tech.php?edit=2301");
                                                                }
                                                                
                                                          
                                                                if($row[7]=="b4"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submit37" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                
                                                                }
                                                        
                                                        if (isset($_POST["submit37"])){
                                                             $_SESSION['class']="b4";
                                                             header("Location:tech.php?edit=2401");
                                                                }
                                                                if($row[8]=="b1"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                                                    <input type="submit"name="submit8" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                </form>';
                                                                
                                                                }  
                                                                
                                                                if (isset($_POST["submit8"])){
                                                                     $_SESSION['class']="b1";
                                                                     header("Location:tech.php?edit=2101");
                                                                        }
                                                                       
                                                                        if($row[8]=="b2"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="submit18" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        }
                                                                
                                                                if (isset($_POST["submit18"])){
                                                                     $_SESSION['class']="b2";
                                                                     header("Location:tech.php?edit=2201");
                                                                        }
                                                                       
                                                                        if($row[8]=="b3"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="submit28" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        
                                                                        }
                                                                if (isset($_POST["submit28"])){
                                                                     $_SESSION['class']="b3";
                                                                     header("Location:tech.php?edit=2301");
                                                                        }
                                                                        
                                                                  
                                                                        if($row[8]=="b4"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="submit38" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        
                                                                        }
                                                                
                                                                if (isset($_POST["submit38"])){
                                                                     $_SESSION['class']="b4";
                                                                     header("Location:tech.php?edit=2401");
                                                                        }
                                                                        if($row[9]=="b1"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                                                            <input type="submit"name="submit9" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        </form>';
                                                                        
                                                                        }  
                                                                        
                                                                        if (isset($_POST["submit9"])){
                                                                             $_SESSION['class']="b1";
                                                                             header("Location:tech.php?edit=2101");
                                                                                }
                                                                               
                                                                                if($row[9]=="b2"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="submit19" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                }
                                                                        
                                                                        if (isset($_POST["submit19"])){
                                                                             $_SESSION['class']="b2";
                                                                                    header("Location:tech.php?edit=2201");
                                                                                
                                                                                }
                                                                               
                                                                                if($row[9]=="b3"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="submit29" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                
                                                                                }
                                                                        if (isset($_POST["submit29"])){
                                                                             $_SESSION['class']="b3";
                                                                             header("Location:tech.php?edit=2301");
                                                                                }
                                                                                
                                                                          
                                                                                if($row[9]=="b4"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="submit39" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                
                                                                                }
                                                                        
                                                                        if (isset($_POST["submit39"])){
                                                                             $_SESSION['class']="b4";
                                                                             header("Location:tech.php?edit=2401");
                                                            
    }    
    }
  ?>
                 <form action=""method="post">
  <input type="text"name="class"style="width:0px;height: 0px;"  >
  <input type="submit"name="submit51" value="  تسجيل الخروج" style="width:300px;height: 70px;font-size:40px ;background-color:#ff0000;">

</form><?php
if (isset($_POST["submit51"])){
    session_unset();
    session_destroy();
              
    }
  ?>
            
        </div>
    </body>
</html>
