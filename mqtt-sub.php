<?php
require "vendor/autoload.php";

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\Exceptions\ConnectingToBrokerFailedException;

// MQTT broker configuration
$server = 'localhost';      // MQTT broker server
$port = 1883;               // MQTT broker port
$clientId = 'subscriber';   // Unique client ID

// Database configuration
$dsn = 'mysql:host=localhost;dbname=college;charset=utf8mb4';
$username = 'root';
$password = '';

// Create an instance of the MQTT client
$mqtt = new MqttClient($server, $port, $clientId);

try {
    // Connect to the MQTT broker
    $mqtt->connect();

    // Specify the topic to subscribe to
    $topic = 'your/topic';      // Replace with the desired MQTT topic

    // Subscribe to the topic with QoS level 0 (at most once)
    $mqtt->subscribe($topic, function ($topic, $message) use ($dsn, $username, $password) {
        // Process the received message
        echo "Received message on topic [$topic]: $message" . PHP_EOL;

        // Decode the JSON message
        $data = json_decode($message, true);

        // Insert the data into the database
        insertDataIntoDatabase($dsn, $username, $password, $data);
    }, 0);

    // Keep the script running to receive messages
    $mqtt->loop(true);

    // Disconnect from the MQTT broker
    $mqtt->disconnect();
} catch (ConnectingToBrokerFailedException $e) {
    echo 'Error: Failed to connect to the MQTT broker.' . PHP_EOL;
}

/**
 * Inserts the data into the database.
 *
 * @param string $dsn
 * @param string $username
 * @param string $password
 * @param array $data
 */
function insertDataIntoDatabase($dsn, $username, $password, $data)
{
    try {
        // Create a new PDO instance
        $pdo = new PDO($dsn, $username, $password);

        // Prepare the SQL statement
        $sql = 'INSERT INTO student (id, name, score, avatar) VALUES (?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);

        // Bind the values and execute the statement
        $stmt->execute([$data['id'], $data['name'], $data['score'], $data['avatar']]);

        // Close the database connection
        $pdo = null;

        echo 'Data inserted into the database.' . PHP_EOL;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage() . PHP_EOL;
    }
}
?>
