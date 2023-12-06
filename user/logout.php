<?php
include 'sessionStart.php';

session_destroy();

header("Location: http://localhost/gitClone/Devdossier/");
?>