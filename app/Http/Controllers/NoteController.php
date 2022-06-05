<?php

namespace App\Http\Controllers;

use App\Http\Resources\NoteCollection;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use App\Repositories\Note\NoteRepositoryInterface;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    protected $noteRepo;

    public function __construct(NoteRepositoryInterface $noteRepo)
    {
      $this->noteRepo = $noteRepo;   
    }

    public function index()
    {
        // return Note::all();
        $note = $this->noteRepo->getAll();
        return response()->json($note);

    }
    public function store(Request $request)
    {
        # code...
        $note = $this->noteRepo->insertNote($request);
        return response()->json($note);
    }
    // public function show(Note $note)
    // {
    //     // return new NoteCollection(Note::find($note));
    //     $Note = Note::findorFail($note->id);
    //     return response() ->json($Note);
    // }
    // public function show()
    // {
    //     $note = $this->noteRepo->getNote();
    //     return response()->json($note);
    // }
    
}
