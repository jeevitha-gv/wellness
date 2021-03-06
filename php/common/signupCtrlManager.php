<?php
require_once __DIR__.'/signupManager.php';
require_once __DIR__.'/sendMailtoRegisteredUserandCompany.php';
function manage(){
    $signupData=new stdClass();
    $manager = new SignupManager();
    $managers = new SendMailtoRegisteredUserandCompany();
    $signupData = getDataFromRequest();            
    $lastId = $manager->saveCompany($signupData);
    $managers->sendMailtoCompany($signupData);
    $managers->sendMailtoUser($signupData);
    $signupData->company = $lastId;
    $userId = $manager->saveUser($signupData); 
    $signupData->user = $userId;
    $manager->saveasSuperAdmin($signupData);

}
function getDataFromRequest(){
    $signupData = new stdClass();
    $signupData->name = $_POST['name'];
    $signupData->email = $_POST['email'];
    $password =$_POST['password'];
  $link = mysqli_connect("host name", "Enter your db username", "Enter your db password", "Enter you database name");


   /* $options = [
    'salt' => $email."12345678910111213",
        ];*/
         
 $email = mysqli_real_escape_string($link, $signupData->email);
 $password = mysqli_real_escape_string($link, $password);
 $options = [
    'salt' => $email."12345678910111213141516",
        ];
  $pass = password_hash("$password", PASSWORD_BCRYPT, $options);
        

    $signupData->password = $pass;
    $signupData->number = $_POST['number']; 
    $signupData->company = $_POST['company']; 
    $signupData->plan=$_POST['plan'];
    error_log("paramArray".print_r($signupData,true)); 
    return $signupData;  
}
manage();
?>
