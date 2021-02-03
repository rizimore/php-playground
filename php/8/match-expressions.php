<?php

/**
 * Match Expression
 *
 * Alternate to switch statement but with ease
 *
 * @php 8.0.0
 * @author Mubashir Rasool Razvi
 */

$value = 1;
$result = match ($value) {
    1 => "One",
    2 => "Two",
    3 => "Three"
};

var_dump($result);
