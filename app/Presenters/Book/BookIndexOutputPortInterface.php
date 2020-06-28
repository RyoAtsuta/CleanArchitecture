<?php namespace App\Presenters\Book;

use App\DataStructures\OutputData\Book\BookIndexOutputData;

interface BookIndexOutputPortInterface
{
    public function handle(BookIndexOutputData $outputData);
}