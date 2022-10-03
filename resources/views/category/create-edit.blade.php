@extends('layout.master')
@section('title', 'Category')
@section('content')
    <div id="aspiration" class="col-lg-5 mx-auto">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="form">
                <div class="text-center mt-2">
                    <h1 class="title">Category Create / Edit</h1>
                </div>
                <form action="{{ request()->routeIs('*.edit') ? route('admin.category.update', $bookCategory->id) :route('admin.category.store') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                    @component('flash')
                    @endcomponent
                    @csrf
                    @if (request()->routeIs('*.edit'))
                        @method('PUT')
                    @endif
                    <div class="form-floating mb-3">
                        <input name="name" type="text" required class="form-control" id="name"
                            placeholder="Hujan - Tereliye" value="{{@$bookCategory->name}}"/>
                        <label for="name">Nama</label>
                    </div>
                    <div class="text-end">
                        <button class="btn-sent border-0 text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
