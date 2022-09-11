@extends('layout.master')
@section('title', 'Kotak Mafia')
@section('content')
    <div id="aspiration" class="col-lg-5 mx-auto">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="form">
                <div class="text-center">
                    <h1 class="title">E-Perpus</h1>
                </div>
                <form action="{{ route('library.store') }}" class="mt-5" method="POST" enctype="multipart/form-data">
                    @component('flash')
                    @endcomponent
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="file" type="file" class="form-control" id="name" />
                        <label for="name">File PDF</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="name" type="text" required class="form-control" id="name"
                            placeholder="Hujan - Tereliye" />
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="date" type="number" required class="form-control" id="date"
                            placeholder="2019" />
                        <label for="date">Date</label>
                    </div>
                    <div class="text-end">
                        <button class="btn-sent border-0 text-white">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
