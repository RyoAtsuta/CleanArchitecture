<?php namespace App\UseCases\Book;

use App\UseCases\Book\BookCreateInputPortInterface;
use App\Presenters\Book\BookCreateOutputPortInterface;
use App\DataStructures\InputData\Book\BookCreateInputData;
use App\DataStructures\OutputData\Book\BookCreateOutputData;
use App\Repositories\BookRepository;
use App\Entities\Book;

class BookCreateInteractor implements BookCreateInputPortInterface
{
    private $repository;
    private $outputPort;

    public function __construct(
        BookRepository $repository,
        BookCreateOutputPortInterface $outputPort
    ) {
        $this->repository = $repository;
        $this->outputPort = $outputPort;
    }

    public function handle(BookCreateInputData $inputData)
    {
        $book = new Book(['title' => $inputData->title]);

        $this->repository->save($book);

        $outputData = new BookCreateOutputData($book->id, $book->title);

        return $this->outputPort->handle($outputData);
    }
}