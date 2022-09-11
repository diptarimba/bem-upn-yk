@extends('layout.master')

@section('title', 'Contact Message Management')

@section('content')
    <div class="col-lg-5 col-12 mt-5 mx-auto">
        <a href="{{route('library.index')}}" class="btn btn-outline-primary">Back</a>
        <div class="card mt-2 mx-auto">
            <div class="card-body">
                <p class="h3 text-center">E-Perpus</p>
                <div class="form-floating mb-3">
                    <input name="name" type="text" readonly disabled class="form-control" id="name"
                        placeholder="Hujan" value="{{$book->name}}"/>
                    <label for="name">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="date" type="text" readonly disabled class="form-control" id="email"
                        placeholder="2019" value="{{$book->date}}"/>
                    <label for="email">Email</label>
                </div>
                <a href="{{$book->file}}" class="btn btn-secondary">Download</a>
            </div>
        </div>
    </div>

@endsection
