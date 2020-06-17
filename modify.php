<?php 
include "include/db/functions.php";
CheckUser();

$id = $_GET['id'];
$sql = "select * from students where id = $id";
$rs = dbQuery($sql); 
      if($rs){
          
          echo "<meta http-equiv='refresh' content='0;URL=modify.php?'>";
      }else{
          echo "Error";
      }

 $errstd_id = "";
 $errstd_name = "";
 $errmajor = "";
 $errdate = "";
 $erremail = "";
 $std_id = "";
 $std_name = "";
 $major = "";
 $birthdate = "";
 $telephone = "";
 $email = "";

 $id = $_GET['id'];
 if(isset($_POST['btnEdit']))
 {  
     $std_id = $_POST['std_id'];
     $std_name = $_POST['std_name'];
     $major = $_POST['major'];
     $birthdate = $_POST['birthdate'];
     $telephone = $_POST['telephone'];
     $email = $_POST['email'];
    
     if(empty($std_id))
     {
        $errstd_id = "الرجاء ادخال الرقم الجامعي"; 
     }
     if(empty($std_name))
     {
        $errstd_name = "الرجاء ادخال اسم الطالب"; 
     }
      if (empty($major)) {
        $errmajor = "الرجاء ادخال اسم التخصص"; 
     } 
      if (empty($date)) {
        $errdate = "الرجاء ادخال تاريخ الميلاد"; 
     }
     if (empty($email)) {
        $erremail = "الرجاء ادخال البريد الالكتروني"; 
     }
     else{
         
         $sql = "update Students set std_id='$std_id' , std_name = '$std_name' , major = '$major' , birthdate = '$birthdate',
                 telephone = '$telephone' , email = '$email' where id=$id";
         $rs = dbQuery($sql);
         if($rs){
             echo "<meta http-equiv='refresh' content='0;URL=viewStudent.php'>";
         }else{
             echo "Error";
         }
     }
 }
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="include/assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="include/assets/plugin/waves/waves.min.css">

	<!-- RTL -->
	<link rel="stylesheet" href="include/assets/styles/style-rtl.min.css">
 <style>
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
#welcome-msg{
    font-size:19px;
}
#name-msg{
    color:blue; font-weight:bold;
    font-size:24px;
}

body{
    font-family: 'Aljazeera';
    padding:2%;
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
form {
    margin-right:100px;
    margin-top:70px;
}
.bt {
    margin-top:20px
}
</style>
</head>

<body>
<div class="col-md-6">
 <form action="" method="post">
            <div class="form-group">
                <label>الرقم الجامعي</label>
                <input type="text" name="std_id" class="form-control" value="<?php echo $std_id;  ?>">
            <span class="text-danger text-uppercase"><?= $errstd_id ?></span>
            </div>
            <div class="form-group">
                <label>اسم الطالب</label>
                <input type="text" name="std_name" class="form-control" value="<?php echo $std_name ; ?>">
            <span class="text-danger text-uppercase"><?= $errstd_name ?></span>
            </div>
            <div class="form-group">
                <label>التخصص</label>
                <input type="text" name="major" class="form-control" value="<?php echo $major;  ?>">
            <span class="text-danger text-uppercase"><?= $errmajor ?></span>
            </div>
            <div class="form-group">
                <label>تاريخ الميلاد</label>
                <input type="date" name="birthdate" class="form-control" value="<?php echo $birthdate;  ?>">
            <span class="text-danger text-uppercase"><?= $errdate ?></span>
            </div>
            <div class="form-group">
                <label>رقم الهاتف</label>
                <input type="number" name="telephone" class="form-control" value="<?php echo $telephone;  ?>">
            
            </div>
            <div class="form-group">
                <label>البريد الالكتروني</label>
                <input type="email" name="email" class="form-control" requierd value="<?php echo $email ; ?>">
            <span class="text-danger text-uppercase"><?= $erremail ?></span>
            </div>
          
            <button type="submit" name="btnEdit" class="btn btn-primary">تعديل</button>
            <button type="button" onclick="window.location.href='index.php?view=list';" class="btn btn-danger">إلغاء</button>
            <div class="bt"><a href="index.php">العودة إلى الصفحة الرئيسية</a></div>
        </form> 
                
            </div>
</body>
</html>            