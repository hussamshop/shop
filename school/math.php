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
    <body style="background-color:#00a0a0;">
        <div >
<CENter><h1>الرياضيات</h1></CENter>
        </div>
        <div><center><?php
        if($row[5]=="a1"){
    echo '<form action=""method="post">
    <input type="text"name="class" style="width:0px;height: 0px;">
    <input type="submit"name="submit0" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
</form>';

}  

if (isset($_POST["submit0"])){
     $_SESSION['class']="a1";
            header("Location:mathte.php?edit=1101");
        
        }
       
        if($row[5]=="a2"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit10" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        }

if (isset($_POST["submit10"])){
     $_SESSION['class']="a2";
            header("Location:mathte.php?edit=1201");
        
        }
       
        if($row[5]=="a3"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit20" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }
if (isset($_POST["submit20"])){
     $_SESSION['class']="a3";
            header("Location:mathte.php?edit=1301");
        
        }
        
  
        if($row[5]=="a4"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit30" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }

if (isset($_POST["submit30"])){
     $_SESSION['class']="a4";
            header("Location:mathte.php?edit=1401");
        
        }
        
  
        if($row[5]=="a5"){
            echo '<form action=""method="post">
            <input type="text"name="class"style="width:0px;height: 0px;"  >
            <input type="submit"name="submit40" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        
        </form>';
        
        }

if (isset($_POST["submit40"])){
     $_SESSION['class']="a5";
            header("Location:mathte.php?edit=1501");
        
        }
        if($row[6]=="a1"){
            echo '<form action=""method="post">
            <input type="text"name="class" style="width:0px;height: 0px;">
            <input type="submit"name="submit00" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
        </form>';
        
        }  
        
        if (isset($_POST["submit00"])){
             $_SESSION['class']="a1";
                    header("Location:mathte.php?edit=1101");
                
                }
               
                if($row[6]=="a2"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit01" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                }
        
        if (isset($_POST["submit01"])){
             $_SESSION['class']="a2";
                    header("Location:mathte.php?edit=1201");
                
                }
               
                if($row[6]=="a3"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit02" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        if (isset($_POST["submit02"])){
             $_SESSION['class']="a3";
                    header("Location:mathte.php?edit=1301");
                
                }
                
          
                if($row[6]=="a4"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit03" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        
        if (isset($_POST["submit03"])){
             $_SESSION['class']="a4";
                    header("Location:mathte.php?edit=1401");
                
                }
                
          
                if($row[6]=="a5"){
                    echo '<form action=""method="post">
                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                    <input type="submit"name="submit04" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                
                </form>';
                
                }
        
        if (isset($_POST["submit04"])){
             $_SESSION['class']="a5";
                    header("Location:mathte.php?edit=1501");
                
                }
               
                if($row[7]=="a1"){
                    echo '<form action=""method="post">
                    <input type="text"name="class" style="width:0px;height: 0px;">
                    <input type="submit"name="submi0t" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                </form><br>';
                
                }  
                
                if (isset($_POST["submi0t"])){
                     $_SESSION['class']="a1";
                            header("Location:mathte.php?edit=1101");
                        
                        }
                       
                        if($row[7]=="a2"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t1" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        }
                
                if (isset($_POST["submi0t1"])){
                     $_SESSION['class']="a2";
                            header("Location:mathte.php?edit=1201");
                        
                        }
                       
                        if($row[7]=="a3"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                if (isset($_POST["submi0t2"])){
                     $_SESSION['class']="a3";
                            header("Location:mathte.php?edit=1301");
                        
                        }
                        
                  
                        if($row[7]=="a4"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                
                if (isset($_POST["submi0t3"])){
                     $_SESSION['class']="a4";
                            header("Location:mathte.php?edit=1401");
                        
                        }
                        
                  
                        if($row[7]=="a5"){
                            echo '<form action=""method="post">
                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                            <input type="submit"name="submi0t4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        
                        </form>';
                        
                        }
                
                if (isset($_POST["submi0t4"])){
                     $_SESSION['class']="a5";
                            header("Location:mathte.php?edit=1501");
                        
                        }
                        if($row[8]=="a1"){
                            echo '<form action=""method="post">
                            <input type="text"name="class" style="width:0px;height: 0px;">
                            <input type="submit"name="subm0it" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                        </form>';
                        
                        }  
                        
                        if (isset($_POST["subm0it"])){
                             $_SESSION['class']="a1";
                                    header("Location:mathte.php?edit=1101");
                                
                                }
                               
                                if($row[8]=="a2"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="subm0it1" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                }
                        
                        if (isset($_POST["subm0it1"])){
                             $_SESSION['class']="a2";
                                    header("Location:mathte.php?edit=1201");
                                
                                }
                               
                                if($row[8]=="a3"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="subm0it2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        if (isset($_POST["subm0it2"])){
                             $_SESSION['class']="a3";
                                    header("Location:mathte.php?edit=1301");
                                
                                }
                                
                          
                                if($row[8]=="a4"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="subm0it3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        
                        if (isset($_POST["subm0it3"])){
                             $_SESSION['class']="a4";
                                    header("Location:mathte.php?edit=1401");
                                
                                }
                                
                          
                                if($row[8]=="a5"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                    <input type="submit"name="subm0it4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                
                                </form>';
                                
                                }
                        
                        if (isset($_POST["subm0it4"])){
                             $_SESSION['class']="a5";
                                    header("Location:mathte.php?edit=1501");
                                
                                }     
                                if($row[9]=="a1"){
                                    echo '<form action=""method="post">
                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                    <input type="submit"name="subm1it" value="الصف الاول أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                </form>';
                                
                                }  
                                
                                if (isset($_POST["subm1it"])){
                                     $_SESSION['class']="a1";
                                            header("Location:mathte.php?edit=1101");
                                        
                                        }
                                       
                                        if($row[9]=="a2"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="subm1it1" value="الصف الاول ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        }
                                
                                if (isset($_POST["subm1it1"])){
                                     $_SESSION['class']="a2";
                                            header("Location:mathte.php?edit=1201");
                                        
                                        }
                                       
                                        if($row[9]=="a3"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="subm1it2" value="الصف الاول ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                if (isset($_POST["subm1it2"])){
                                     $_SESSION['class']="a3";
                                            header("Location:mathte.php?edit=1301");
                                        
                                        }
                                        
                                  
                                        if($row[9]=="a4"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="subm1it3" value="الصف الاول د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                
                                if (isset($_POST["subm1it3"])){
                                     $_SESSION['class']="a4";
                                            header("Location:mathte.php?edit=1401");
                                        
                                        }
                                        
                                  
                                        if($row[9]=="a5"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                            <input type="submit"name="subm1it4" value="الصف الاول ه" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        
                                        </form>';
                                        
                                        }
                                
                                if (isset($_POST["subm1it4"])){
                                     $_SESSION['class']="a5";
                                            header("Location:mathte.php?edit=1501");
                                        
                                        }     
                                        if($row[5]=="b1"){
                                            echo '<form action=""method="post">
                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                            <input type="submit"name="subm2it" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                        </form>';
                                        
                                        }  
                                        
                                        if (isset($_POST["subm2it"])){
                                             $_SESSION['class']="b1";
                                                    header("Location:mathte.php?edit=2101");
                                                
                                                }
                                               
                                                if($row[5]=="b2"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="subm2it1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                }
                                        
                                        if (isset($_POST["subm2it1"])){
                                             $_SESSION['class']="b2";
                                             header("Location:mathte.php?edit=2201");
                                                }
                                               
                                                if($row[5]=="b3"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="subm2it2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                
                                                }
                                        if (isset($_POST["subm2it2"])){
                                             $_SESSION['class']="b3";
                                             header("Location:mathte.php?edit=2301");
                                                }
                                                
                                          
                                                if($row[5]=="b4"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                    <input type="submit"name="subm2it3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                
                                                </form>';
                                                
                                                }
                                        
                                        if (isset($_POST["subm2it3"])){
                                             $_SESSION['class']="b4";
                                             header("Location:mathte.php?edit=2401");
                                                }
                                                if($row[6]=="b1"){
                                                    echo '<form action=""method="post">
                                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                                    <input type="submit"name="submi2t" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                </form>';
                                                
                                                }  
                                                
                                                if (isset($_POST["submi2t"])){
                                                     $_SESSION['class']="b1";
                                                     header("Location:mathte.php?edit=2101");
                                                        }
                                                       
                                                        if($row[6]=="b2"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submi2t1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        }
                                                
                                                if (isset($_POST["submi2t1"])){
                                                     $_SESSION['class']="b2";
                                                     header("Location:mathte.php?edit=2201");
                                                        }
                                                       
                                                        if($row[6]=="b3"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submi2t2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        
                                                        }
                                                if (isset($_POST["submi2t2"])){
                                                     $_SESSION['class']="b3";
                                                     header("Location:mathte.php?edit=2301");
                                                        }
                                                        
                                                  
                                                        if($row[6]=="b4"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                            <input type="submit"name="submi2t3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        
                                                        </form>';
                                                        
                                                        }
                                                
                                                if (isset($_POST["submi2t3"])){
                                                     $_SESSION['class']="b4";
                                                     header("Location:mathte.php?edit=2401");
                                                        }
                                                        if($row[7]=="b1"){
                                                            echo '<form action=""method="post">
                                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                                            <input type="submit"name="submi4t" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                        </form>';
                                                        
                                                        }  
                                                        
                                                        if (isset($_POST["submi4t"])){
                                                             $_SESSION['class']="b1";
                                                             header("Location:mathte.php?edit=2101");
                                                                }
                                                               
                                                                if($row[7]=="b2"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submi4t1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                }
                                                        
                                                        if (isset($_POST["submi4t1"])){
                                                             $_SESSION['class']="b2";
                                                             header("Location:mathte.php?edit=2201");
                                                                }
                                                               
                                                                if($row[7]=="b3"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submi4t2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                
                                                                }
                                                        if (isset($_POST["submi4t2"])){
                                                             $_SESSION['class']="b3";
                                                             header("Location:mathte.php?edit=2301");
                                                                }
                                                                
                                                          
                                                                if($row[7]=="b4"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                    <input type="submit"name="submi4t3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                
                                                                </form>';
                                                                
                                                                }
                                                        
                                                        if (isset($_POST["submi4t3"])){
                                                             $_SESSION['class']="b4";
                                                             header("Location:mathte.php?edit=2401");
                                                                }
                                                                if($row[8]=="b1"){
                                                                    echo '<form action=""method="post">
                                                                    <input type="text"name="class" style="width:0px;height: 0px;">
                                                                    <input type="submit"name="subm4it" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                </form>';
                                                                
                                                                }  
                                                                
                                                                if (isset($_POST["subm4it"])){
                                                                     $_SESSION['class']="b1";
                                                                     header("Location:mathte.php?edit=2101");
                                                                        }
                                                                       
                                                                        if($row[8]=="b2"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="subm4it1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        }
                                                                
                                                                if (isset($_POST["submit1"])){
                                                                     $_SESSION['class']="b2";
                                                                     header("Location:mathte.php?edit=2201");
                                                                        }
                                                                       
                                                                        if($row[8]=="b3"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="subm4it2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        
                                                                        }
                                                                if (isset($_POST["subm4it2"])){
                                                                     $_SESSION['class']="b3";
                                                                     header("Location:mathte.php?edit=2301");
                                                                        }
                                                                        
                                                                  
                                                                        if($row[8]=="b4"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                            <input type="submit"name="subm4it3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        
                                                                        </form>';
                                                                        
                                                                        }
                                                                
                                                                if (isset($_POST["subm4it3"])){
                                                                     $_SESSION['class']="b4";
                                                                     header("Location:mathte.php?edit=2401");
                                                                        }
                                                                        if($row[9]=="b1"){
                                                                            echo '<form action=""method="post">
                                                                            <input type="text"name="class" style="width:0px;height: 0px;">
                                                                            <input type="submit"name="sub4mit" value="الصف الثاني أ" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                        </form>';
                                                                        
                                                                        }  
                                                                        
                                                                        if (isset($_POST["sub4mit"])){
                                                                             $_SESSION['class']="b1";
                                                                             header("Location:mathte.php?edit=2101");
                                                                                }
                                                                               
                                                                                if($row[9]=="b2"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="sub4mit1" value="الصف الثاني ب" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                }
                                                                        
                                                                        if (isset($_POST["sub4mit1"])){
                                                                             $_SESSION['class']="b2";
                                                                                    header("Location:mathte.php?edit=2201");
                                                                                
                                                                                }
                                                                               
                                                                                if($row[9]=="b3"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="sub4mit2" value="الصف الثاني ج" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                
                                                                                }
                                                                        if (isset($_POST["sub4mit2"])){
                                                                             $_SESSION['class']="b3";
                                                                             header("Location:mathte.php?edit=2301");
                                                                                }
                                                                                
                                                                          
                                                                                if($row[9]=="b4"){
                                                                                    echo '<form action=""method="post">
                                                                                    <input type="text"name="class"style="width:0px;height: 0px;"  >
                                                                                    <input type="submit"name="sub4mit3" value="الصف الثاني د" style="width:300px;height: 70px;font-size:40px ;background-color:#55f377;">
                                                                                
                                                                                </form>';
                                                                                
                                                                                }
                                                                        
                                                                        if (isset($_POST["sub4mit3"])){
                                                                             $_SESSION['class']="b4";
                                                                             header("Location:mathte.php?edit=2401");
                                                            
    }       
    }
  ?>
                <form action=""method="post">
  <input type="text"name="class"style="width:0px;height: 0px;"  >
  <input type="submit"name="submit54" value="  تسجيل الخروج" style="width:300px;height: 70px;font-size:40px ;background-color:#ff0000;">

</form><?php
if (isset($_POST["submit54"])){
    session_unset();
    session_destroy();
              
    }
  ?>
                
            
        </div>
    </body>
</html>
