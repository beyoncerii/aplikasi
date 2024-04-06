<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{

    //
    public function index(){
        $books = Book::select(['id','title', 'price', 'author_id'])
        ->with('author')
        ->paginate(10);

        return view('books.listing', ['books' => $books]);



        // foreach($books as $book){
        // echo "<strong>Title : </strong>" . $book->title . "<br>";

        // echo "<strong>Price : </strong>" . "RM" . $book->price . "<br>";

        // echo "<strong>Synopsis : </strong>" . $book->synopsis . "<br>";

        // echo "<hr>";
        // }
    }

    public function edit($id)
    {
        $book = Book::findorFail($id);

        return view('books.edit',
        ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book = Book::findorFail($id);

        $validated_data = $request->validate([
            'title' => 'required|min:5|max:255',
            'price' => 'required|numeric',
            'synopsis' => 'required|min:20|max:1000'
        ]);

        $book->title = request('title');
        $book->price = request('price');
        $book->synopsis = request('synopsis');

        $book->save();

        return back()->with('success', 'Book updated successfully!');
    }

    public function authors(){
        $authors = Author::with('books')->get();
        return view('books.authors', ['authors' => $authors]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title' => 'required|min:5|max:255',
            'price' => 'required|numeric',
            'synopsis' => 'required|min:20|max:1000'
        ]);

        $book = Book::create($validated_data);

        return redirect()->route('book-listing')->with('success', 'Book created successfully!');
    }

    public function destroy($id)
    {
        $book = Book::findorFail($id);

        $book->delete();

        return redirect()->route('book-listing')->with('success', 'Book deleted successfully!');
    }

    public function show($id)
    {
        $book = Book::find($id);

        return view ('books.single', ['book' => $book]);

        //dd($book);

        // echo "<strong>Title : </strong>" . $book->title . "<br>";

        // echo "<strong>Price : </strong>" . "RM" . $book->price . "<br>";

        // echo "<strong>Synopsis : </strong>" . $book->synopsis . "<br>";
    }
}
