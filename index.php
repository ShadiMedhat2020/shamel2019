<?php 
include "include/db/functions.php";
CheckUser();
  echo "<div id='welcome-msg'> مرحباً <span id='name-msg'>&nbsp;" . $_SESSION['name'] . "&nbsp;	</span> بك في الصفحة الرئيسية </div>";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="include/assets/styles/style.min.css">

<!-- Waves Effect -->
<link rel="stylesheet" href="include/assets/plugin/waves/waves.min.css">

<!-- RTL -->
<link rel="stylesheet" href="include/assets/styles/style-rtl.min.css">
<style>

#welcome-msg{
    font-size:19px;
}
#name-msg{
    color:blue; font-weight:bold;
    font-size:24px;
}
@font-face {
font-family: 'Aljazeera';
font-style: normal;

src: 
   url('include/assets/fonts/Aljazeera.ttf') format('truetype');
}
@font-face {
font-family: 'Aljazeera';
font-style: normal;
font-weight: 600;

src: 
   url('include/assets/fonts/Aljazeera.ttf') format('truetype');
}

body{
font-family: 'Aljazeera';

}
th{
 font-family: 'Aljazeera';
font-style: normal;
font-weight: 550;
text-align:center;
}
h3{
font-family: 'Aljazeera';
font-style: normal;
font-weight: 350;
text-align:center;
}
</style>


    <title>برنامج شئون الطلاب _ الصفحة الرئيسية </title>
    <style>
       body{
           direction:rtl;
           padding:3%
       }
       div.container {
           padding:3%;
           margin-right:100px;
           margin-top:120px;
           background-color:#ddd;
           border:2px solid #000;
           border-radius:15px
       }
       div.container .col-4 {
           display:inline-block;
          padding-left:150px
       }
       div.container .col-12 {
           text-align:center;
       }
       .button {
           text-align:center;
           margin-top:30px
       }
       a {
           font-weight:bold;
           font-size:22px
       }
    </style>
</head>    
<body>
 <h2 align="center">برنامج شئون الطلاب</h2>
 <div class="container">
     <div class="row">
        <div class="col-12">
            <div class="col-4">
                <a href="addStudent.php">إدخال بيانات طالب جديد</a>
            </div>
            <div class="col-4">
                <a href="#">تعديل بيانات طالب </a>
            </div>
            <div class="col-4">
                <a href="viewStudent.php">عرض بيانات طالب</a>
            </div>
        </div>
     </div>
 </div>
 <div class="button">
     <a href="logout.php">تسجيل خروج</a>
 </div>
</body>
</html> 