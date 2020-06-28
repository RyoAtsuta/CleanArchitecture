<?php namespace App\UseCases\Book;

use App\DataStructures\InputData\Book\BookCreateInputData;

interface BookCreateInputPortInterface
{
    public function handle(BookCreateInputData $inputData);
}