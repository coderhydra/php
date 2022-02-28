<?php
// unset() 함수를 사용하여 세션을 삭제
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
echo $_SESSION["userid"];      //<error>
echo $_SESSION["username"];    //<error>
?>
정리 </br>
쿠키(Cookie) : 클라이언트 메모리에 저장 </br>
세션(Session) : 서버 메모리에 저장
