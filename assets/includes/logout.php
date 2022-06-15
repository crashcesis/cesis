<?php
include_once 'functions.php';


session_destroy(); 
header("Location: " . get_url(''));
change_dir('');
die;