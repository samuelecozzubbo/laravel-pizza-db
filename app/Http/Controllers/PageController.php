<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    //Il metodo index è il metodo che si una per la home
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function books()
    {
        $title = 'Tutti i miei libri';
        //SELECT * FROM 'books'
        //all() restituisce tutti i record della tabella in ordine di ID
        //$books = Book::all();

        //OTTENGO I LIBRI IN ORDINE ALFABETICO IN BASE AL TITOLO
        //Le condizioni si mettono prima e la query termina con get()
        $books = Book::orderBy('title', 'desc')->limit(10)->get();



        //dd($books);
        return view('books', compact('books', 'title'));
    }

    //VOGLIO PRENDERE I LIBRI CON MENO DI 5 voti
    public function badBooks()
    {
        $title = 'I libri peggiori';
        $books = Book::where('vote', 4)->orderBy('title')->get();
        return view('books', compact('books', 'title'));
    }

    public function bestBooks()
    {
        $title = 'I libri migliori';
        $books = Book::where('vote', '>', 4)->orderBy('title')->get();
        return view('books', compact('books', 'title'));
    }

    public function bookDetail($id)
    {
        //$id = 22;
        //estraggo solo il libro con id 22
        //con first ottengo il singolo oggetto e non un array di oggetti
        //$book = Book::where('id', $id)->first();
        //se la mia condizione è cercare l'id lo stesso risultato lo ottengo con
        $book = Book::find($id);
        return view('bookdetail', compact('book'));
    }
}
