<?php 
include "include/db/functions.php";
CheckUser() ;

echo "<div id='welcome-msg'> مرحباً <span id='name-msg'>&nbsp;" . $_SESSION['name'] . "&nbsp;	</span> بك في  صفحة عرض البيانات </div>";

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
    table {
        margin-top:-370px;
        text-align:center;
    }
    td {
        padding:10px
    }
    .but {
        margin-right:600px;
        margin-top:30px;
    }
    button a {
        color:#fff;
    }
    button a:hover {
        color:#fff;
    }
    th {
        text-align:center !important;
        background-color:#ddd;
    }
    </style>
</head>

<body>
<h2 align="center">برنامج شئون الطلاب</h2>
    <?php 

    $sql = "SELECT * FROM Students" ;
    $rs = dbQuery($sql);
    ?>

<table class="table table-hover table-striped table-bordered">
    <tr class="tre">
        <th> الرقم الجامعي </th>
        <th> إسم الطالب</th>
        <th>إسم التخصص </th>
        <th> تاريخ الميلاد</th>
        <th>رقم الهاتف </th>
        <th>البريد الالكتروني </th>
        <th>الإجراء </th>
    </tr>

 <?php
    
  while($row =  dbFetchArray($rs)): ?> 
       <tr>
       <td><?php echo $row['std_id'] ?></td><br>
       <td><?php echo $row['std_name']?></td><br>
       <td><?php echo $row['major']?></td><br>
       <td><?php echo $row['birthdate']?></td><br>
       <td><?php echo $row['telephone']?></td><br>
       <td><?php echo $row['email']?></td>
       <td>
       <a href="modify.php?&id=<?= $row['id'] ?>"><i class="fa fa-edit"></i>
 </a> | 
      <a href="deleteStudent.php?id=<?= $row[0] ?>" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم ؟')"><i class="fa fa-trash"></i> </a>
    </td>

       </tr>
  <?php endwhile ?>
        
 


  </table>       
         <div class="but">
            <button type="submit" class="btn btn-primary"><a href="addStudent.php"> إضافة طالب</a></button>
            <button type="button" onclick="window.location.href='index.php?view=list';" class="btn btn-danger">رجوع</button>
         </div>

    <script src="include/assets/scripts/jquery.min.js"></script>
	<script src="include/assets/scripts/modernizr.min.js"></script>
	<script src="include/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="include/assets/plugin/nprogress/nprogress.js"></script>
	<script src="include/assets/plugin/waves/waves.min.js"></script>
	<script src="include/assets/scripts/main.min.js"></script>
</body>
</html>