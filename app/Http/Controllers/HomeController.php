<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
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

        return redirect()->route('message.index')->with('status', 'Success mengisi kotak mafia');
    }

    public function messageList(Request $request)
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

    public function messageView($id)
    {
        $message = Message::whereId($id)->first();
        return view('message.view', compact('message'));
    }

    public function getActionColumn($query)
    {
        $viewBtn = route('message.view', $query->id);
        return '<a href="'.$viewBtn.'" class="btn btn-outline-primary btn-pill">View</a>';
    }
}
