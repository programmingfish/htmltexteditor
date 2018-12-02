<?php
    $savefile = fopen("savefile.txt", "a+");
    $txt = "Content: ".$_POST['content'].;
    fwrite($savefile, $txt);
    fclose($myfile);
?>