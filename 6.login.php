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
       // 如果匹配成功，設置 $login 為 TRUE
       $login=TRUE;
     }
   } 
   // 如果 $login 為 TRUE，則輸出 "登入成功"
   if ($login==TRUE)
     echo "登入成功";
   // 否則，輸出 "帳號/密碼 錯誤"
  else
     echo "帳號/密碼 錯誤";
?>
