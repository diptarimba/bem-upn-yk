@extends('layout.master')
@section('title', 'Kotak Mafia')
@section('content')
    <div id="aspiration" class="col-lg-5 mx-auto">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="form">
                <div class="text-center mt-2">
                    <h1 class="title">E-PERPUSTAKAAN</h1>
                </div>
                <form action="{{ request()->routeIs('*.edit') ? route('admin.library.update', $book->id) :route('admin.library.store') }}" class="mt-3" method="POST" enctype="multipart/form-data">
                    @component('flash')
                    @endcomponent
                    @csrf
                    @if (request()->routeIs('*.edit'))
                        @method('PUT')
                        @if ($book->preview !== null)
                        <div class="mb-3 card">
                            <div class="card-header">Book Thumbnail</div>
                            <div class="card-body d-flex justify-content-center">
                                <img id="file-ip-1-preview" class="img-fluid" style="max-width: 50%" src="{{$book->preview}}">
                            </div>
                        </div>
                        @endif
                        <a href="{{$book->is_url ? $book->file : url('/') . $book->file}}" class="btn btn-sm rounded mb-2 btn-primary" target="_blank">Check or Download File</a>
                    @endif
                    <div class="form-floating mb-3">
                        <input name="file" type="file" class="form-control" id="file" />
                        <label for="file">File PDF</label>
                    </div>
                    <div class="card m-0 p-0 mb-3 rounded">
                        <div class="card-body">
                            <div class="form-check">
                                <input name="is_url" type="checkbox" class="form-check-input" id="is_url" {{ @$book->is_url ? 'checked' : '' }} />
                                <label class="form-check-label" for="is_url">IS URL?</label>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-floating mb-3">
                    </div> --}}
                    <div class="form-floating mb-3">
                        <input name="file" type="text" class="form-control" id="url" {{ !request()->routeIs('*.edit') ? 'disabled' : ($book->is_url ? '' : 'disabled') }} value="{{ @$book->is_url ? $book->file : ''}}"/>
                        <label for="url">URL FILE</label>
                    </div>
                    <div class="mb-1 d-flex justify-content-center">
                        <img id="file-ip-1-preview" class="img-fluid" style="max-width: 50%">
                    </div>
                    <div class="form-floating mb-3">
                        <input name="preview" type="file" class="form-control" id="preview" accept="image/*" onchange="showPreview(event);"/>
                        <label for="preview">File Preview</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="name" type="text" required class="form-control" id="name"
                            placeholder="Hujan - Tereliye" value="{{@$book->name}}"/>
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="date" type="number" required class="form-control" id="date"
                            placeholder="2019" value="{{@$book->date}}"/>
                        <label for="date">Year</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="sub_category_id" aria-label="Default select example">
                            @foreach ($subCategory as $each)
                            <option value="{{$each->id}}"
                                @if(isset($book))
                                {{ $each->id == $book->sub_category_id ? 'selected' : ''}}
                                @endif
                            >{{$each->name . ' - ' . $each->category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-end">
                        <button class="btn-sent border-0 text-white">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<script>
    function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
        }
    }
    var checkbox = document.getElementById('is_url');
    checkbox.addEventListener("change", checkboxDisabled, false);
    function checkboxDisabled(){
        var isChecked = checkbox.checked;
        inputFile = document.getElementById('file');
        inputUrl = document.getElementById('url');
        if(isChecked){ //checked
            inputUrl.removeAttribute('disabled')
            inputFile.setAttribute('disabled', '');
        }else{ //unchecked
            inputUrl.setAttribute('disabled', '');
            inputFile.removeAttribute('disabled')
        }
    }
</script>
@endsection
