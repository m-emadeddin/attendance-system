<?php
require "vendor/autoload.php";

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\Exceptions\ConnectingToBrokerFailedException;

// MQTT broker configuration
$server = 'localhost';      // MQTT broker server
$port = 1883;               // MQTT broker port
$clientId = 'publisher';    // Unique client ID

// Create an instance of the MQTT client
$mqtt = new MqttClient($server, $port, $clientId);

try {
    // Connect to the MQTT broker
    $mqtt->connect();

    // Specify the topic to publish the message to
    $topic = 'your/topic';      // Replace with the desired MQTT topic

    // Create the data to be published
    $data = [
        'id' => generateRandomNumber(10),
        'name' => generateRandomString(10),
        'score' => rand(5, 500),
        'avatar' => generateRandomString(10) . '.jpg',
    ];

    // Convert the data to JSON
    $message = json_encode($data);

    // Publish the message to the topic with QoS level 0 (at most once)
    $mqtt->publish($topic, $message, 0);

    // Disconnect from the MQTT broker
    $mqtt->disconnect();
} catch (ConnectingToBrokerFailedException $e) {
    echo 'Error: Failed to connect to the MQTT broker.' . PHP_EOL;
}

/**
 * Generates a random number with the specified number of digits.
 *
 * @param int $digits
 * @return string
 */
function generateRandomNumber($digits)
{
    $min = pow(10, $digits - 1);
    $max = pow(10, $digits) - 1;
    return strval(rand($min, $max));
}

/**
 * Generates a random string with the specified length.
 *
 * @param int $length
 * @return string
 */
function generateRandomString($length)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}
?>
