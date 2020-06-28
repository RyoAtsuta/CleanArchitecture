<?php namespace App\DataStructures\OutputData\Book;

use Illuminate\Support\Collection;

class BookIndexOutputData
{
    private $books;

    public function __construct(Collection $books)
    {
        $this->books = $books->map(function ($book) {
                return [
                    'id' => $book->id,
                    'title' => $book->title
                ];
            })->toArray();
    }

    public function getBooks(): array
    {
        return $this->books;
    }
}