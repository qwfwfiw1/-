<?php
    // 設定錯誤報告等級為 0（不顯示錯誤）
    error_reporting(0);
    // 啟動會話
    session_start();
    // 檢查是否有 $_SESSION["id"]，如果沒有，跳轉到登入頁面
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        // 輸出歡迎訊息，包括使用者名稱和相關連結
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        // 使用 mysqli_connect() 函數建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        // 使用 mysqli_query() 函數從資料庫查詢佈告資料
        $result=mysqli_query($conn, "select * from bulletin");
        // 輸出佈告資料表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            // 輸出每一行佈告資料，包括修改和刪除連結
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
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
        echo "</table>";
    }
?>
