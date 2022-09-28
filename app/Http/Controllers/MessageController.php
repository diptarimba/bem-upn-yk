<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'nim' => 'required',
            'faculty' => 'required',
            'program' => 'required',
            'content' => 'required'
        ]);

        $message = Message::create($request->all());

        return redirect()->route('message.create')->with('status', 'Success mengisi kotak mafia');
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $message = Message::select();
            return datatables()->of($message)
            ->addIndexColumn()
            ->addColumn('action', function($query){
                return $this->getActionColumn($query);
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('message.index');
    }

    public function edit($id)
    {
        $message = Message::whereId($id)->first();
        return view('message.edit', compact('message'));
    }

    public function getActionColumn($query)
    {
        $viewBtn = route('message.edit', $query->id);
        return '<a href="'.$viewBtn.'" class="btn btn-outline-primary btn-pill">View</a>';
    }
}
