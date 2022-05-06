<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function index()
    {
        $note = Note::all();
        return response()->json($note);
    }
}
