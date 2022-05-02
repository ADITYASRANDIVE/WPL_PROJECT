<?php

session_start();


session_unset();
session_destory();

header("location:'Admin login.html");
exit;

?>