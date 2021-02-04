<?php

/**
 * Nullsafe Operator
 *
 * A simple way to handle null checking
 *
 * If on some place in chain methods null occur it will interrupt
 * that chain and return null instead of throwing exception there.
 *
 * @php 8.0.0
 * @author Mubashir Rasool Razvi
 */

class User {
    public function getMembership()
    {
        // return new Membership();
        return null;
    }
}

class Membership {
    public function plan(): string
    {
        return "monthly";
    }
}

$user = new User();
// $plan = $user->getMembership()->plan();
$plan = $user->getMembership()?->plan() ?? "Not have membership!";

var_dump($plan);
