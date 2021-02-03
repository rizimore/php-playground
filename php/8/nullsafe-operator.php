<?php

class User {
    public function getMembership() {
        return new Membership();
    }
}

class Membership {
    public function plan(): string
    {
        return "monthly";
    }
}

$user = new User();
$plan = $user->getMembership()->plan();
$plan = $user->getMembership()?->plan();

var_dump($plan);
