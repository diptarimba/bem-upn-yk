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
            'file' => 'required|mimes:pdf',
            'name' => 'required',
            'date' => 'required'
        ]);

        $book = Book::create(array_merge($request->all(), [
            'file' => 'storage/'.$request->file('file')->storePublicly('bookPdf')
        ]));

        return redirect()->route('library.index')->with('status', 'Success Add Book');
    }

    public function getActionColumn($query)
    {
        $viewBtn = $query->file;
        return '<a href="'.$viewBtn.'" class="btn btn-primary">Download</a>';
    }
}
