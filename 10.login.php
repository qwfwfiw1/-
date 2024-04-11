<?php
   // 使用 mysqli_connect() 函數建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   // 使用 mysqli_query() 函數從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   
   // 使用 mysqli_fetch_array() 函數從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     // 檢查使用者提供的帳號和密碼是否與資料庫中的記錄匹配
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   
   // 如果登入成功，啟動會話並重定向到 bulletin.php 頁面
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功";
    // 在3秒後重定向到 bulletin.php 頁面
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    // 如果登入失敗，顯示帳號/密碼錯誤訊息並重定向到 login.html 頁面
    echo "帳號/密碼 錯誤";
    // 在3秒後重定向到 login.html 頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
