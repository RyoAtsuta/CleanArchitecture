<?php namespace App\DataStructures\ViewModels\Book;

use App\DataStructures\OutputData\Book\BookCreateOutputData;

class BookCreateViewModel
{
    private $id;

    public function __construct(BookCreateOutputData $outputData)
    {
        $this->id = $outputData->getId();
    }

    public function getId(): int
    {
        return $this->id;
    }
}