<?php

class User {}

$user = new User();
var_dump(User::class); // php 7
var_dump($user::class); // php 8
