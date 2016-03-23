<html>
<head>
    <title>BancTM</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/app.main.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/app.mobile.css">
</head>
<body>
<?php

require_once('vendor/autoload.php');
// Stub config function to simulate Laravel
function config($key) {
    if ($key == 'push.google') {
        return array(
            'apikey' => 'AIzaSyCYDXUnubt_XXoySG0wY9lbjcf0ZbGSNr0',
        );
    }
    return null;
}
function sendMessage($text){
$googlePush = \PharmIT\Push\PushServiceFactory::getPushService('google');
if ($googlePush === false) {
    fwrite(STDERR, "Something went wrong\n");
    exit;
}
$results = $googlePush
    ->setMessageText($text)
    ->addRecipient('e1wHe1I-UCA:APA91bEf5Ezmh9PuqeKzLD4cOhCrLHjpIzCt_lVuRI9mZC6sBfwcsEMI0MqxBFWGWskJhEHR-_hRpzxHqUHc67DAs79WueKqA1XKZdJQfz20sDQjOfHJFxxgeooMhvOFUFltUkoHv7cc')
    ->addRecipient('f9FUAhoKNdQ:APA91bHDp1yN1mEotFMwZMmeWFZEDiRmT3UqLmBWyP0S00OnMXdIzEHv0h9DspkH72LLEOWQw0nmJz_DnI45PZG2zpGdNjw2d9AdC7oCpjzWsOrDU6Y8tQKp0fUozeQaRuqb91KNzPg6')
    ->send();

    var_dump($results);
    var_dump($googlePush->getFailedRecipients());
}

if (isset($_GET['message'])){
    sendMessage($_GET['message']);
}


?>
<div id="header">
    <span id='hamburger'><i class="fa fa-bars"></i></span> ING<span id='subtitel'> Mobiel Bankieren</span>
</div>
<div id="main">
    <div id="menu">
        <div class="item selected">
            Overview
        </div>
        <div class="item">
            Plan
        </div>
        <div class="item">
            Transactions
        </div>
    </div>
    <div id="inner">
        <div class="block">
            <h1>Pay bills</h1>
            <p><a href="?message=Have you paid your rent yet?">Remind rent.</a></p>
        </div>
        <div class="block">
            <h1>Pay</h1>
            <p><a href="?message=You spent &euro;20 on groceries">Classified</a></p>
            <p><a href="?message=Your payment of &euro; 20 could not be classified.">Unclassified</a></p>
        </div>
        </div>
    </div>
</div>
<div id="puppet">
<img src='images/puppet.png' />
</div>
<script src='js/hamburger.js'></script>
</body>
</html>
