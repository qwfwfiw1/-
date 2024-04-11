<?php
    // 啟動會話
    session_start();
    // 刪除 $_SESSION["counter"] 變數，即重置 counter
    unset($_SESSION["counter"]);
    // 輸出重置成功訊息
    echo "counter重置成功....";
    // 在2秒後重定向到 8.counter.php 頁面
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
