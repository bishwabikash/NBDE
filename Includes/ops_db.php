<?php

global $db;
$res_val = [null, null];
$passwd = $_POST["adam_pass"] or "no password";
$userName = $_POST["adam"] or "nada";
if ($_SERVER['REQUEST_METHOD'] == "POST" and parse_url($_SERVER['SCRIPT_URI'], PHP_URL_HOST) == parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST)) {
    if ($stmt = mysqli_prepare($db, "SELECT uName,password from test.ul_ where uName = ?")) {
        mysqli_stmt_bind_param($stmt, "s", $userName);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $res_val[0], $res_val[1]);
            if (password_verify($passwd, $res_val[1])) {
                $_SESSION['user'] = $res_val[0];
                header("refresh:5;url=dashboard.php");
            } else {
                print "Password Mismatch redirecting";
                header("refresh:5;url=login.php");
            }
        }
    }
}
