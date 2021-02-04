<?php

/**
 * Constructor Property Promotion
 *
 * Less code to define and initialize properties
 */

class User {
    public function __construct(
        public int $id,
        public string $name,
        public string $role = "user"
    ) {}
}