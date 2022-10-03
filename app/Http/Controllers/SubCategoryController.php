<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\BookSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $category = BookSubCategory::with('category')->select();
            return datatables()->of($category)
            ->addIndexColumn()
            ->addColumn('action', function($query){
                return $this->getActionColumn($query);
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('subcategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = BookCategory::count() > 0 ? BookCategory::get() : false;
        if(!$category){
            return redirect()->route('admin.sub.index')->with('error', 'Create Book Category First');
        }
        return view('subcategory.create-edit', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required|exists:book_categories,id'
        ]);

        BookSubCategory::create($request->all());

        return redirect()->route('admin.sub.index')->with('status', 'Success Create Subcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookSubCategory  $bookSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BookSubCategory $bookSubCategory)
    {
        return view('subcategory.create-edit', compact('bookSubCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookSubCategory  $bookSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BookSubCategory $bookSubCategory)
    {
        $category = BookCategory::count() > 0 ? BookCategory::get() : false;
        if(!$category){
            return redirect()->route('admin.sub.index')->with('error', 'Create Book Category First');
        }
        $bookSubCategory->with('category');
        return view('subcategory.create-edit', compact('bookSubCategory', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookSubCategory  $bookSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookSubCategory $bookSubCategory)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required|exists:book_categories,id'
        ]);

        $bookSubCategory->update($request->all());

        return redirect()->route('admin.sub.index')->with('status', 'Success Update Subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookSubCategory  $bookSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookSubCategory $bookSubCategory)
    {
        try {
            $bookSubCategory->delete();
            return redirect()->route('admin.sub.index')->with('status', 'Success Add Subcategory');
        } catch (\Throwable $e)
        {
            return redirect()->route('admin.sub.index')->with('error', 'Failed Delete Subcategory');
        }
    }

    public function getActionColumn($data)
    {
        $editBtn = route('admin.sub.edit', $data->id);
        $deleteBtn = route('admin.sub.destroy', $data->id);
        $ident = Str::random(10);
        return
        '<a href="'.$editBtn.'" class="btn mx-1 my-1 btn-sm btn-outline-success">Edit</a>'
        . '<input form="form'.$ident .'" type="submit" value="Delete" class="mx-1 my-1 btn btn-sm btn-outline-danger">
        <form id="form'.$ident .'" action="'.$deleteBtn.'" method="post">
        <input type="hidden" name="_token" value="'.csrf_token().'" />
        <input type="hidden" name="_method" value="DELETE">
        </form>';
    }
}
