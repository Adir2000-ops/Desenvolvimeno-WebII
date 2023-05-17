<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function filmes()
    {
        $filmes = [
            [
                'titulo' => 'Filme 1',
                'ano' => 2020,
                'genero' => 'Ação'
            ],
            [
                'titulo' => 'Filme 2',
                'ano' => 2018,
                'genero' => 'Comédia'
            ],
            [
                'titulo' => 'Filme 3',
                'ano' => 2019,
                'genero' => 'Drama'
            ]
        ];

        return view('filmes')->with('filmes', $filmes);
    }
}