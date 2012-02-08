<?php

require 'Services/Eventful.php';

// Enter your application key here. (See http://api.eventful.com/keys/)
$app_key = 'PhSPfXsNh4bxtscN';

$ev = new Services_Eventful($app_key);

// Authentication is required for some API methods.
$user = $_REQUEST['user'];
$password = $_REQUEST['password'];

if ($user and $password) {
    $l = $ev->login($user, $password);

    if (PEAR::isError($l)) {
        print("Can't log in: " . $l->getMessage() . "\n");
    }
}

// All method calls other than login() go through call().
$args = array(
    'location' => 'Lisbon',
    'page_size' => '100',
    'sort_order' => 'popularity'
);
$event = $ev->call('events/search', $args);

if (PEAR::isError($event)) {
    print("An error occurred: " . $event->getMessage() . "\n");
    print_r($ev);
}

// The return value from a call is a SimpleXMLElement object.
print_r($event);
?>