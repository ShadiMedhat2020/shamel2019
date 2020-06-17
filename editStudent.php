<?php
  include "include/db/functions.php";
  $id = $_GET['id'];

  $sql = "select * from students where id = $id";
   $rs = dbQuery($sql); 
         if($rs){
         	
             echo "<meta http-equiv='refresh' content='0;URL=viewStudent.php?'>";
         }else{
             echo "Error";
         }