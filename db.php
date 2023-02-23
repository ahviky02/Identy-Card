<?php
$con = mysqli_connect("127.0.0.1", "root", "") or die("Connection 1 error");
$q = mysqli_select_db($con, "form") or die("Connection error");
