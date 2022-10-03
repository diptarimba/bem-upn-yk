@extends('layout.master')
@section('title', 'Sub Category')
@section('content')
    <div id="aspiration" class="col-lg-5 mx-auto">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="form">
                <div class="text-center mt-2">
                    <h1 class="title">Category Create / Edit</h1>
                </div>
                <form action="{{ request()->routeIs('*.edit') ? route('admin.sub.update', $bookSubCategory->id) :route('admin.sub.store') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                    @component('flash')
                    @endcomponent
                    @csrf
                    @if (request()->routeIs('*.edit'))
                        @method('PUT')
                    @endif
                    <div class="form-floating mb-3">
                        <input name="name" type="text" required class="form-control" id="name"
                            placeholder="Hujan - Tereliye" value="{{@$bookSubCategory->name}}"/>
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="category_id" aria-label="Default select example">
                            @foreach ($category as $each)
                            <option value="{{$each->id}}"
                                @if (isset($bookSubCategory))
                                {{ $each->id == $bookSubCategory->category_id ? 'selected' : ''}}
                                @endif
                                >{{$each->name}}</option>
                            @endforeach
                        </select>
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
