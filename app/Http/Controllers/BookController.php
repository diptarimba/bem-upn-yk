<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BookController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $book = Book::select();
            return datatables()->of($book)
            ->addIndexColumn()
            ->addColumn('action', function($query){
                return $this->getActionColumn($query);
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('book.index');
    }

    public function create()
    {
        return view('book.upload');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:1024',
            'name' => 'required',
            'date' => 'required'
        ]);

        $book = Book::create(array_merge($request->all(), [
            'file' => '/storage/'.$request->file('file')->storePublicly('bookPdf')
        ]));

        return redirect()->route('admin.library.index')->with('status', 'Success Add Book');
    }

    public function edit(Book $book)
    {
        return view('book.upload', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'file' => 'nullable|mimes:pdf|max:1024',
            'name' => 'required',
            'date' => 'required'
        ]);

        $book->update(array_merge($request->all(), [
            'file' => $request->hasFile('file') ? '/storage/'.$request->file('file')->storePublicly('bookPdf') : $book->file
        ]));

        return redirect()->route('admin.library.index')->with('status', 'Success Update Book');
    }

    public function destroy(Book $book)
    {
        try{
            $book->delete();
            return redirect()->route('admin.library.index')->with('status', 'Success Delete Book');
        } catch ( \Exception $e)
        {
            return redirect()->route('admin.library.index')->with('error', 'Failed Delete Book');
        }
    }

    public function getActionColumn($query)
    {
        $viewBtn = $query->file;
        $editBtn = route('admin.library.edit', $query->id);
        $addButton = '<a href="'.$viewBtn.'" class="btn btn-sm mx-1 my-1 btn-outline-primary">Download</a>';
        $addButton .= '<a href="'.$editBtn.'" class="btn btn-sm mx-1 my-1 btn-outline-secondary">Edit</a>';
        return $addButton;
    }
}
