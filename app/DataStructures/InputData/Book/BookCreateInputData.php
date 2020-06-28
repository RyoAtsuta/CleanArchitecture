<?php namespace App\DataStructures\InputData\Book;

class BookCreateInputData
{
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}