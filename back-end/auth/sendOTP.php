<?php


require_once __DIR__ . '../../vendor/autoload.php'; // include the Nexmo PHP client library

use Nexmo\Client;

$client = new Client(new Nexmo\Client\Credentials\Basic("117b1c86", "MvscHGgpGHYd7ewj")); // create a Nexmo client object with your API key and secret

$ncco = [
    [
        'action' => 'talk',
        'text' => 'Please enter the verification code sent to your phone number.',
        'voiceName' => 'Amy',
        'bargeIn' => true
    ],
    [
        'action' => 'input',
        'eventUrl' => ['https://example.com/verification'],
        'submitOnHash' => true
    ]
];

$response = $client->calls()->create([
    'to' => [["01750157867"]],
    'from' => ["01760975618"],
    'ncco' => $ncco
]);

$uuid = $response->getUuid(); // retrieve the UUID of the call for later use


// use Vonage\Voice\NCCO\NCCO;

// require_once("../../db/db.php");
// require_once __DIR__ . '../../vendor/autoload.php';

// $keypair = new \Vonage\Client\Credentials\Keypair(
//     file_get_contents("117b1c86"),
//     "MvscHGgpGHYd7ewj"
// );
// $client = new \Vonage\Client($keypair);

// $outboundCall = new \Vonage\Voice\OutboundCall(
//     new \Vonage\Voice\Endpoint\Phone("8801760975618"),
//     new \Vonage\Voice\Endpoint\Phone("8801760975618")
// );
// $ncco = new NCCO();
// $ncco->addAction(new \Vonage\Voice\NCCO\Action\Talk('This is a text to speech call from Nexmo'));
// $outboundCall->setNCCO($ncco);

// $response = $client->voice()->createOutboundCall($outboundCall);

// var_dump($response);



// require_once __DIR__ . '../../vendor/autoload.php';
// use Nexmo\Client;
// use Nexmo\Client\Credentials\Basic;

// // Instantiate a Nexmo client with your API key and secret
// $client = new Client(new Basic("117b1c86", "MvscHGgpGHYd7ewj"));

// // Send an SMS message
// $response = $client->message()->send([
//     'to' => "01977975618",
//     'from' => "01760975618",
//     'text' => 'Hello from Nexmo!'
// ]);

// // Check if the message was sent successfully
// if ($response['messages'][0]['status'] == 0) {
//     echo "Message sent successfully.";
// } else {
//     echo "Message failed to send.";
// }


?>