<?php
$con=mysqli_connect("localhost","root","<password>","<db 이름>");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else{
mysqli_query($con,"UPDATE user SET birth=19990515
WHERE uid='neo' AND pwd='1'");
echo "업데이트 성공";
}
mysqli_close($con);
?>