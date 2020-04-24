<?php
 include 'php/common/config.php';
 session_start();
  if(isset($_POST['admin']))
  {
   $email=$_POST['email'];
    $password=$_POST['password'];
      $sql="SELECT email,password FROM user Where email= '" . $email. "' and password= '" . $password. "'";
     $result=mysqli_query($link,$sql);
            if($rows=mysqli_fetch_assoc($result))
             { 
               $_SESSION['email']=$email;
           $_SESSION['password']=$password;  
            $_SESSION['last_name']=$name;   
              $password == 'wellness';
               if($_SESSION['email']=='wellness@nixwhistle.com')
               {
                 // echo "Sucessfully";
                header("location:/wellness/case/dashboard.php");
               // break;
               }
         

               if($_SESSION['email']=='clinic')
               {
               
                 // echo "Sucessfully";
                header("location:/wellness/case/clinicview.php");
               // break;
               }
               if($_SESSION['email']=='testing')
               {
               
                 // echo "Sucessfully";
                header("location:/wellness/case/testingview.php");
               // break;
               }
                 if($_SESSION['email']=='hospital')
               {
               
                 // echo "Sucessfully";
                header("location:/wellness/case/hospitalview.php");
               // break;
               }
           else if($rows['email']=='idea_analyst@nixwhistle.co'&& $rows['password']=='analyst')
               {
                 // echo "Sucessfully";
                header("location:/wellness/idea/view.php");
               }
            else if($rows['email']=='investigator@nixwhistle.co'&& $rows['password']=='investigator')
               {
                 // echo "Sucessfully";
                header("location:/wellness/investigator/view.php");
               }
               else if($rows['email']=='reviewer@nixwhistle.co'&& $rows['password']=='reviewer')
               {
                 // echo "Sucessfully";
                header("location:/wellness/reviewer/reviewerview.php");
               }
             }
             else
               {
                // echo "Error: " . $sql . "<br>" . $link->error;
                // alert("incorrect username and password");
               }
  }
?>