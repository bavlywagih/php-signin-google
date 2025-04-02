<?php
// Google OAuth
$client_id = 'your client id from google cloud';
$redirect_uri = 'http://localhost:8080/signin-google/callback.php';  // رابط الـ callback
$scope = 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email';  // نطاقات المعلومات المطلوبة

$auth_url = "https://accounts.google.com/o/oauth2/v2/auth?response_type=code&client_id=$client_id&redirect_uri=$redirect_uri&scope=$scope&access_type=offline";

header('Location: ' . $auth_url);
exit;
