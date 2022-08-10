<?php
date_default_timezone_set("Asia/Bangkok");
 $servername ="localhost";
 $username ="root";
 $password ="";
 $dbname="hotel";

 //conection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 //check
//  if(!$conn) {
//      die("Connection failed : " . mysqli_connect_error());
// }
mysqli_set_charset($conn,'utf8');
if(mysqli_connect_error()){
    echo "เชื่อมต่อไม่สำเร็จ";
}else{
    
}

 
?>