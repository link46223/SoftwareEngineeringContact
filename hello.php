<?php
if (isset($_POST['txt1']) && isset($_POST['txt2'])) {
    echo $_POST['txt1']." My ".$_POST['txt2'];
    //echo $_POST['txt1'];
} else {
    echo 'Hello world!!';
} 
?>
