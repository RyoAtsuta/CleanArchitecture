<?php namespace App\UseCases\Book;

use App\UseCases\Book\BookIndexInputPortInterface;
use App\Presenters\Book\BookIndexOutputPortInterface;
use App\DataStructures\OutputData\Book\BookIndexOutputData;
use App\Repositories\BookRepository;

class BookIndexInteractor implements BookIndexInputPortInterface
{
    private $repository;
    private $outputPort;

    public function __construct(
        BookRepository $repository,
        BookIndexOutputPortInterface $outputPort
    ) {
        $this->repository = $repository;
        $this->outputPort = $outputPort;
    }

    public function handle()
    {
        $books = $this->repository->all();

        $outputData = new BookIndexOutputData($books);

        return $this->outputPort->handle($outputData);
    }
}