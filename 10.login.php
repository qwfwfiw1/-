<?php
   // 使用 mysqli_connect() 函數建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 使用 mysqli_query() 函數從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   // 使用 mysqli_fetch_array() 函數從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     // 檢查使用者提交的帳號和密碼是否與資料庫中的記錄匹配
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       // 如果匹配成功，設置 $login 為 TRUE
       $login=TRUE;
     }
   } 
   // 如果 $login 為 TRUE，表示登入成功
   if ($login==TRUE) {
    // 啟動會話
    session_start();
    // 將使用者的帳號存入 $_SESSION["id"]
    $_SESSION["id"]=$_POST["id"];
    // 輸出登入成功訊息
    echo "登入成功";
    // 在3秒後重定向到 11.bulletin.php 頁面
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    // 如果 $login 為 FALSE，表示帳號/密碼錯誤
    echo "帳號/密碼 錯誤";
    // 在3秒後重定向到 2.login.html 頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
