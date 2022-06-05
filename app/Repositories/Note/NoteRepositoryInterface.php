<?php
namespace App\Repositories\Note;

use App\Repositories\RepositoryInterface;

interface NoteRepositoryInterface extends RepositoryInterface
{
    public function getNote();
    public function insertNote($request);
}