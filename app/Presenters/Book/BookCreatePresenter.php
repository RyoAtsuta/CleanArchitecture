<?php namespace App\Presenters\Book;

use App\Presenters\Book\BookCreateOutputPortInterface;
use App\DataStructures\OutputData\Book\BookCreateOutputData;
use App\DataStructures\ViewModels\Book\BookCreateViewModel;

class BookCreatePresenter implements BookCreateOutputPortInterface
{
    public function handle(BookCreateOutputData $outputData)
    {
        $viewModel = new BookCreateViewModel($outputData);
        return $viewModel;
    }
}