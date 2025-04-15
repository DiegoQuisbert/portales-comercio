<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', [
            'movies' => $movies
        ]);
    }

    public function view(int $id)
    {
        return view('movies.view', [
            'movie' => Movie::findOrFail($id)
        ]);

    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Movie::create($input);

        return redirect()
            ->route('movies.index')
            ->with('feedback.message', 'La película <b>'. e($input['title']) .'</b> se publicó exitosamente');
    }

}
