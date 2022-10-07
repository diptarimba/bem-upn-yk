@extends('layout.master')

@section('title', 'Book Management')

@section('content')
    <div class="mt-3">
        @component('flash')
        @endcomponent
    </div>
    <div class="card mt-2">
        <div class="card-header">
            @if (Auth::check())
            <div class="d-flex justify-content-between">
                <span>Book Management</span>
                <a href="{{ route('admin.library.create') }}" class="btn btn-primary">Create Book</a>
            </div>
            @else
            <span>Book Management</span>
            @endif
        </div>
        <div class="card-body">
            <table class="table datatables-target-exec table-striped">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $(document).ready(() => {
            var table = $('.datatables-target-exec').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('library.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        sortable: false,
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        })
    </script>
@endsection
