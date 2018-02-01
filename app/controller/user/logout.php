<?php
session_start();
session_unset();
session_destroy();
header("Location:index.php?c=user&a=login");
exit;
