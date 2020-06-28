<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BookCreateRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Http\Controllers\Controller;
use App\UseCases\Book\BookIndexInputPortInterface;
use App\UseCases\Book\BookCreateInputPortInterface;
use App\DataStructures\InputData\Book\BookCreateInputData;

/**
 * Class BooksController.
 *
 * @package namespace App\Http\Controllers;
 */
class BooksController extends Controller
{
    /**
     * @var BookIndexInputPortInterface
     */
    private $indexInputPort;

    /**
     * @var BookCreateInputPortInterface
     */
    private $createInputPort;

    /**
     * BooksController constructor.
     * @param BookIndexInputPortInterface $indexInputPort
     * @param BookCreateInputPortInterface $createInputPort
     */
    public function __construct(
        BookIndexInputPortInterface $indexInputPort,
        BookCreateInputPortInterface $createInputPort
    ) {
        $this->indexInputPort = $indexInputPort;
        $this->createInputPort = $createInputPort;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->indexInputPort->handle();

        return view('books.index', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * Note:
     * - ここだけCleanArchitectureに近づけてやってみたがやはりやりすぎ感
     * - PresenterからViewModelを無理矢理returnさせるという暴挙
     *
     * @param  BookCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BookCreateRequest $request)
    {
        $inputData = new BookCreateInputData($request->input('title'));

        $viewModel = $this->createInputPort->handle($inputData);

        return redirect()->route('book.create', ['id' => $viewModel->id]);
    }

    /**
     * Show the form for creating the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('books.show', compact('book'));
    }
}
