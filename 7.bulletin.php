<?php
    // 設定錯誤報告等級為 0（不顯示錯誤）
    error_reporting(0);
    // 使用 mysqli_connect() 函數建立資料庫連結
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    // 使用 mysqli_query() 函數從資料庫查詢資料
    $result=mysqli_query($conn, "select * from bulletin");
    // 輸出一個表格開始標籤，包含表格標題列
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    // 使用 mysqli_fetch_array() 函數從查詢出來的資料一筆一筆抓出來，並逐行輸出表格資料
    while ($row=mysqli_fetch_array($result)){
        // 輸出表格的一行，包含資料庫中的相應欄位值
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    // 輸出表格結束標籤
    echo "</table>"
?>
