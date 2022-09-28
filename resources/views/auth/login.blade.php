@extends('layout.master')
@section('title', 'Login Page')
@section('content')
<div id="aspiration" class="col-lg-5 mx-auto">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="form">
            <div class="text-center">
                <h1 class="title">Login Page</h1>
            </div>
            <form action="{{ route('login.post') }}" class="mt-5" method="POST">
                @component('flash')
                @endcomponent
                @csrf
                <div class="form-floating mb-3">
                    <input name="username" type="text" class="form-control" id="username"
                        placeholder="John Doe" />
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="password"
                        placeholder="name@domain.com" />
                    <label for="password">Password</label>
                </div>
                <div class="text-end">
                    <button class="btn-sent border-0 text-white">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
