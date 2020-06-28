<?php namespace App\Presenters\Book;

use App\DataStructures\OutputData\Book\BookCreateOutputData;

interface BookCreateOutputPortInterface
{
    public function handle(BookCreateOutputData $outputData);
}