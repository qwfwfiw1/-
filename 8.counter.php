<?php
    // 啟動會話
    session_start();
    // 檢查 $_SESSION["counter"] 是否存在，如果不存在，設置為 1；如果存在，則增加 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    // 輸出 counter 的值
    echo "counter=".$_SESSION["counter"];
    // 輸出重置 counter 的連結
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
