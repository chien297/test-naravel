<?php

namespace App\Http\Controllers;

use App\Http\Resources\NoteCollection;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function index()
    {
        return new NoteCollection(Note::paginate(5));

    }
    public function show($id)
    {
        
    }
}
