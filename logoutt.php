<?php
    session_start();
    session_destroy();
    header(header: "Location: testaux.php");
?>
