<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $subCategory = BookSubCategory::count() > 0 ? BookSubCategory::with('category')->get() : false;
        if(!$subCategory){
            return redirect()->route('admin.sub.index')->with('error', 'Create Sub Category First!');
        }
        return view('book.upload', compact('subCategory'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:pdf|max:1024',
            'preview' => 'nullable|mimes:jpg,png,jpeg|max:1024',
            'name' => 'required',
            'sub_category_id' => 'required|exists:book_sub_categories,id',
            'date' => 'required'
        ]);

        $book = Book::create(array_merge($request->all(), [
            'file' => '/storage/'.$request->file('file')->storePublicly('bookPdf'),
            'preview' => $request->hasFile('preview') ? '/storage/'.$request->file('preview')->storePublicly('bookPreview') : null
        ]));

        return redirect()->route('admin.library.index')->with('status', 'Success Add Book');
    }

    public function edit(Book $book)
    {
        $subCategory = BookSubCategory::count() > 0 ? BookSubCategory::with('category')->get() : false;
        if(!$subCategory){
            return redirect()->route('admin.sub.index')->with('error', 'Create Sub Category First!');
        }
        return view('book.upload', compact('book', 'subCategory'));
    }

    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'file' => 'nullable|mimes:pdf|max:1024',
            'preview' => 'nullable|mimes:jpg,png,jpeg|max:1024',
            'sub_category_id' => 'required|exists:book_sub_categories,id',
            'name' => 'required',
            'date' => 'required'
        ]);

        $book->update(array_merge($request->all(), [
            'file' => $request->hasFile('file') ? '/storage/'.$request->file('file')->storePublicly('bookPdf') : $book->file,
            'preview' => $request->hasFile('preview') ? '/storage/'.$request->file('preview')->storePublicly('bookPreview') : $book->preview
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
        $deleteBtn = route('admin.library.destroy', $query->id);
        $ident = Str::random(10);
        $addButton = '<a href="'.$viewBtn.'" class="btn btn-sm mx-1 my-1 btn-outline-primary">Download</a>';
        $addButton .= '<a href="'.$editBtn.'" class="btn btn-sm mx-1 my-1 btn-outline-secondary">Edit</a>';
        $addButton .= '<input form="form'.$ident .'" type="submit" value="Delete" class="mx-1 my-1 btn btn-sm btn-outline-danger">
        <form id="form'.$ident .'" action="'.$deleteBtn.'" method="post">
        <input type="hidden" name="_token" value="'.csrf_token().'" />
        <input type="hidden" name="_method" value="DELETE">
        </form>';
        return $addButton;
    }
}
