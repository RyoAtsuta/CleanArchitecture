<?php namespace App\Presenters\Book;

use App\Presenters\Book\BookIndexOutputPortInterface;
use App\DataStructures\OutputData\Book\BookIndexOutputData;
use App\DataStructures\ViewModels\Book\BookIndexViewModel;

class BookIndexPresenter implements BookIndexOutputPortInterface
{
    public function handle(BookIndexOutputData $outputData)
    {
        $viewModel = new BookIndexViewModel($outputData);
        return $viewModel;
    }
}