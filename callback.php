<?php
$client_id = 'your client id from google cloud';
$client_secret = 'your client secret from google cloud';
$redirect_uri = 'http://localhost:8080/signin-google/callback.php';  // link callback

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $token_url = 'https://oauth2.googleapis.com/token';
    $post_fields = [
        'code' => $code,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $token_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $response_data = json_decode($response, true);

    if (isset($response_data['access_token'])) {
        $access_token = $response_data['access_token'];

        $user_info_url = 'https://www.googleapis.com/oauth2/v2/userinfo';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $user_info_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $access_token
        ]);
        $user_info_response = curl_exec($ch);
        curl_close($ch);

        $user_info = json_decode($user_info_response, true);

        echo 'Welcome, ' . $user_info['name'] . '<br>';
        echo 'Your email: ' . $user_info['email'] . '<br>';
    } else {
        echo 'Error: Unable to retrieve access token';
    }
} else {
    echo 'Error: No authorization code provided';
}
