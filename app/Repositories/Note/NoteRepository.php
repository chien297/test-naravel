<?php
namespace App\Repositories\Note;

use App\Models\Note;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class NoteRepository extends BaseRepository implements NoteRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Note::class;
    }

    public function getNote()
    {
        return $this->model->select('name','text')->take(5)->get();
    }
    
    public function insertNote($array)
    {
        # code...
        // $test =  DB::table('users')->insert([$array]);
        return "tets";
    }
}