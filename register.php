<?php

define('CLIENT_ID', 'wGvbHTplAVbaLlIYGaseW8');
define('LINE_API_URI', 'https://notify-bot.line.me/oauth/authorize?');
define('CALLBACK_URI', 'https://linenotify.github.io/callback.php');

$queryStrings = [
    'response_type' => 'code',
    'client_id' => CLIENT_ID,
    'redirect_uri' => CALLBACK_URI,
    'scope' => 'notify',
    'state' => 'abcdef123456'
];

$queryString = LINE_API_URI . http_build_query($queryStrings);

?>

<a href="<?php echo $queryString; ?>">Register</a>
