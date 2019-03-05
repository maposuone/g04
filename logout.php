<?php
session_start();
session_destroy();
header("loacation:index.php");
