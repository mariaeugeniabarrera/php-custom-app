<?php
if (isset($_POST['archivo'])) {
    $archivo = $_POST['archivo'];
    if (file_exists("pictures/$archivo")) {
        unlink("pictures/$archivo");
        echo 1;
    } else {
        echo 0;
    }
}
?>
