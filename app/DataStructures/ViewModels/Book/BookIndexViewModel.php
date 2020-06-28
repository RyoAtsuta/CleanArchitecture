<?php namespace App\DataStructures\ViewModels\Book;

use App\DataStructures\OutputData\Book\BookIndexOutputData;

class BookIndexViewModel
{
    private $books = [];

    // 無理矢理IndexのViewModel作ってみたがイケテナイ感じが半端ない
    // BookIndexViewModelsの中にBookIndexViewModelとやった方が綺麗に出来ただろうか
    // そもそもconstructで整形するのは将来的にみて大丈夫なやり方なのかどうか
    public function __construct(BookIndexOutputData $outputData)
    {
        $books = $outputData->getBooks();
        foreach ($books as $book) {
            $newBook = [
                'id' => $book['id'],
                'title' => $book['title']
            ];
            $this->books[] = $newBook;
        }
    }

    public function getBooks(): int
    {
        return $this->books;
    }
}