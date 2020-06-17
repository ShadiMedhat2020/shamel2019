<?php 
include "include/db/functions.php";
$errMessage = "";

if(isset($_POST['txtUsername']))
{
    $result = doLogin();
    if($result != "")
    {
        $errMessage = $result;
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
</head>

<body>

<div id="single-wrapper">
	<form action="" method="post" class="frm-single">
		<div class="inside">
			<div class="title"><strong>برنامج شئون الطلاب</div>
			<!-- /.title -->
			<div class="frm-title">منطقة تسجيل الدخول</div>
                         <div class="form-group" style="text-align: center">
          <span class="text-danger">   <?= $errMessage ?></span>
      </div>
			<!-- /.frm-title -->
			<div class="frm-input"><input name="txtUsername" type="text" placeholder="اسم المستخدم" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input name="txtPassword" type="password" placeholder="كلمة المرور" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<button type="submit" class="frm-submit">تسجيل دخول<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
					<!-- /.txt-login-with -->
				</div>
				<!-- /.col-sm-12 -->
	
				<!-- /.col-sm-6 -->
			</div>
			<!-- /.row -->
			
			<div class="frm-footer">شئون الطلاب © <?= Date("Y") ?>.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="include/assets/scripts/jquery.min.js"></script>
	<script src="include/assets/scripts/modernizr.min.js"></script>
	<script src="include/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="include/assets/plugin/nprogress/nprogress.js"></script>
	<script src="include/assets/plugin/waves/waves.min.js"></script>

	<script src="include/assets/scripts/main.min.js"></script>
</body>
</html>