@extends('layout.master')

@section('title', 'Contact Message Management')

@section('content')
    <div class="col-lg-5 col-12 mt-5 mx-auto">
        <a href="{{route('message.list')}}" class="btn btn-outline-primary">Back</a>
        <div class="card mt-2 mx-auto">
            <div class="card-body">
                <p class="h3 text-center">DETAIL PESAN</p>
                <div class="form-floating mb-3">
                    <input name="name" type="text" readonly disabled class="form-control" id="name"
                        placeholder="John Doe" value="{{$message->name}}"/>
                    <label for="name">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" readonly disabled class="form-control" id="email"
                        placeholder="name@domain.com" value="{{$message->email}}"/>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="phone" type="phone" readonly disabled class="form-control" value="{{$message->phone}}" id="telephone"
                        placeholder="08822314133" />
                    <label for="telephone">No. Telepon / HP</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="nim" type="text" readonly disabled class="form-control" id="npm" value="{{$message->nim}}"
                        placeholder="NPM" />
                    <label for="npm">NPM</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="faculty" type="text" readonly disabled class="form-control" id="faculty" value="{{$message->faculty}}"
                        placeholder="Ilmu Komputer" />
                    <label for="faculty">Fakultas</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="program" readonly disabled  class="form-control" id="prodi" value="{{$message->program}}"
                        placeholder="Teknik Informatika" />
                    <label for="prodi">Program Studi</label>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" readonly disabled name="content" placeholder="Saran dan masukan" id="message" style="height: 100px">{{$message->content}}</textarea>
                    <label for="message">Saran dan masukan</label>
                </div>
            </div>
        </div>
    </div>

@endsection
