<?php

class User {
    public int $id;
    public string $name;

    /**
     * User constructor.
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$user = new User(
    id: 1,
    name: "Mubashir Rasool Razvi"
);
