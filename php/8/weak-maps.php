<?php

/**
 * Weak Maps
 *
 * A simple array where keys are class objects
 */

class User {}

$user1 = new User();
$user2 = new User();

$users = new WeakMap();
$users[$user1] = "user1";
$users[$user2] = "user2";

var_dump($users);

unset($user1);

var_dump($users);