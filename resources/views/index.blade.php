@extends('layout.master')
@section('title', 'Kotak Mafia')
@section('content')
<div id="aspiration" class="col-lg-5 mx-auto">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="form">
            <div class="text-center">
                <h1 class="title">KONTAK MAFIA</h1>
            </div>
            <form action="{{ route('message.store') }}" class="mt-5" method="POST">
                @component('flash')
                @endcomponent
                @csrf
                <div class="form-floating mb-3">
                    <input name="name" type="text" class="form-control" id="name"
                        placeholder="John Doe" />
                    <label for="name">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="email"
                        placeholder="name@domain.com" />
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="phone" type="phone" class="form-control" id="telephone"
                        placeholder="08822314133" />
                    <label for="telephone">No. Telepon / HP</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="nim" type="text" class="form-control" id="npm"
                        placeholder="NPM" />
                    <label for="npm">NPM</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="faculty" type="text" class="form-control" id="faculty"
                        placeholder="Ilmu Komputer" />
                    <label for="faculty">Fakultas</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="program" class="form-control" id="prodi"
                        placeholder="Teknik Informatika" />
                    <label for="prodi">Program Studi</label>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" name="content" placeholder="Saran dan masukan" id="message" style="height: 100px"></textarea>
                    <label for="message">Saran dan masukan</label>
                </div>
                <div class="text-end">
                    <button class="btn-sent border-0 text-white">KIRIM</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
