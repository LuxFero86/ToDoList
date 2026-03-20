<?php

namespace App\Entity;

class Category {

    // Attributes
    private ?int $id;
    private string $name;

    // Constructor
    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }

    // Getters & Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    // Methods
    public function __toString(): string {
        return $this->id . " : " . $this->name;
    }
}
