<?php
   // 使用 mysqli_connect() 函數建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 使用 mysqli_query() 函數從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   // 使用 mysqli_fetch_array() 函數從查詢出來的資料一筆一筆抓出來，並逐行輸出 id 和 pwd 欄位值
   while ($row=mysqli_fetch_array($result)) {
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
