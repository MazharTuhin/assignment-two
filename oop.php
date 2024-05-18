<?php

class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // getTitle method
    public function getTitle() {
        return $this->title;
    }

    // getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;

    // Initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // getName method
    public function getName() {
        return $this->name;
    }

    // borrowBook method
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo "{$this->name} borrowed '{$book->getTitle()}'.\n";
        } else {
            echo "{$book->getTitle()} is not available for borrowing.\n";
        }
    }

    // returnBook method
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }
}

// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply borrowBook method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

