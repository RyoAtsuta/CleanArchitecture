<?php

namespace App\Repositories;

use App\Entities\Book;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface BookRepository.
 *
 * @package namespace App\Repositories;
 */
interface BookRepository extends RepositoryInterface
{
    public function save(Book $book);
}
