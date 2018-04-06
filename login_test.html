<?php
ob_start();
session_start();

$_SESSION['JM_MainSection']="";
$_SESSION['JM_CurrentSection']="LogIn";

//set page title and page path variables
$pages=Array("الرئيسية",  "تسجيل الدخول");
$URLs=Array("../index.php");
$PageTitle="تسجيل الدخول";

//general include files
include '../includes/functions/PathFunction.php';

// connect to DB
$db="ogcd";
include '../DBConnect.php';

$ErrorMessage="";
if (isset($_POST['send']))
{ 
  if( (isset($_POST['userName'])) && (isset($_POST['password'])) )
   {
    if( isset($_POST['LogInType']))
	{
	 if($_POST['LogInType']=="User")
	  {  
	  $checkUser="SELECT * FROM users WHERE username='$_POST[userName]' AND password='$_POST[password]' AND AccountStatus='Active'";
      $checkUser_res=mysql_query($checkUser);
      if(mysql_num_rows($checkUser_res)>0)
        {   $checkUser=mysql_fetch_array($checkUser_res);
            $_SESSION['UserName']=$_POST['userName'];
            $_SESSION['Password']=$_POST['password'];
			$_SESSION['Type']=$_POST['LogInType'];		
            header ("location:../index.php");
        }
       else
        {
		$ErrorMessage="
	    <br />
	     <p class='title' align='center'>لا يوجد مستخدم مسجل بهذا الاسم أو أن كلمة المرور غير صحيحة
	      <br />
         في حال أنك تقوم بتسجيل الدخول لأول مرة، فالرجاء
         <a href='../SignUp/index.php'><b>التسجيل كعضو جديد أولاً</b></a>
         ثم استخدام اسم المستخدم وكلمة المرور الخاصة بك لتسجيل الدخول
	     </p>";
	    }  
	  }
	else if($_POST['LogInType']=="Charity")
	{
	  $checkcharity="SELECT * FROM charity WHERE username='$_POST[userName]' AND password='$_POST[password]' AND AccountStatus='Active'";
      $checkcharity_res=mysql_query($checkcharity);
      if(mysql_num_rows($checkcharity_res)>0)
        {   $checkUser=mysql_fetch_array($checkcharity_res);
            $_SESSION['UserName']=$_POST['userName'];
            $_SESSION['Password']=$_POST['password'];
			$_SESSION['Type']=$_POST['LogInType'];
            header ("location:../CharityAccount/index.php");
        }
       else
        {
		$ErrorMessage.="
	    <br />
	     <p class='title' align='center'>لا يوجد جمعية معتمدة مسجل بهذا الاسم أو أن كلمة المرور غير صحيحة
	      <br />
         في حال أنك تقوم بتسجيل الدخول لأول مرة، فالرجاء
         <a href='../SignUp/index.php'><b>التسجيل كعضو جديد أولاً</b></a>
         ثم استخدام اسم المستخدم وكلمة المرور الخاصة بك لتسجيل الدخول
	     </p>";
		 //echo $ErrorMessage;
	    }  
	}

     }  // End check if its valid logIn information
  }   
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar" dir="rtl"> 
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
   <title>OGCD</title>
   <link rel="stylesheet" href="../css/Style.css" type="text/css" />
   <!-- Banner Ann                                                                                    -->
    <link rel="stylesheet" href="../HomeContent/BannerAnn/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../HomeContent/BannerAnn/nivo-slider.css" type="text/css" media="screen" />
   <!-- End Banner Ann                                                                                -->
   
 </head>

 <body>

  <?php include '../includes/Header.php'; ?>	
  <?php include '../includes/BodyBox/Header.php'; ?>
  
  <?php 
    if ($ErrorMessage!="")
	 echo $ErrorMessage;
  ?>
  
  <?php include '../includes/BodyBox/Footer.php'; ?>
  <?php include '../includes/Footer.php'; ?>
 </body>

</html>