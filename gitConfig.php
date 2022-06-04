<?php
if (!session_id()) {
    session_start();
}

require_once 'OAuth/Github_OAuth_Client.php';

//Configuration and setup GitHub API
$clientID         = '0c1034633c610a30fbac';
$clientSecret     = '690986bb965c1a3a5de767de7cbffa1e122e35fat';
$redirectURL     = 'http://localhost/github/index.php';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if (isset($_SESSION['access_token'])) {
    $accessToken = $_SESSION['access_token'];
}
