<?php session_start();

  // اتصال مع قواعد البيانات
 function Connect(){
  $conn = mysqli_connect("localhost", "root", "", "college");
  return $conn;
 } 
 mysqli_set_charset(Connect(),"utf-8");

 // 1 connect   0 disconnect
 // تنفيذ الاستعلام
 function dbQuery($sql){
     $result = mysqli_query(Connect(), $sql);
     return $result;
 }
 // استرجاع عدد الصفوف الناتجة من تنفيذ الاستعلام
 function dbNumRows($result){
     return mysqli_num_rows($result);
 }
 // استرجاع البيانات الناتجة من الاستعلام وتخزينها في مصفوفة للطباعة البيانات المسترجعة
 function dbFetchArray($result, $resultType=MYSQLI_NUM){
     return mysqli_fetch_array($result);
 }
function doLogin(){
    $errorMessage = "";
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    if($username== "" || $password == "")
    {
        $errorMessage = "الرجاء ادخال اسم المستخدم أو كلمة المرور";
    }else{
        $sql = "Select user_id from users 
                where username = '$username'
                and password = '$password'
                and Is_active = 1";
       $rs = dbQuery($sql);
       if(dbNumRows($rs) > 0){
          $row = dbFetchArray($rs);
          $_SESSION['user_id'] = $row[0];
          $_SESSION['name'] = $username;
          dbQuery($sql1);
          header('location:index.php');
          exit();
       }else{
           $errorMessage = "اسم المستخدم أو كلمة المرور خطأ و حسابك معطل";
       }
    }
    return $errorMessage;
}
function CheckUser(){
    if(!isset($_SESSION['user_id'])){
        header("location:login.php");
        exit();
    }
}