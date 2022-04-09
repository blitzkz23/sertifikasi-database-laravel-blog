@extends('admin.app')
@section('content')
    <h3>Info</h3>
    <hr>
    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif
    <a href="{{ url('admin/info/create') }}" class="btn btn-md btn-primary mb-3"><i class="fas fa-plus"></i> Tambah
        Data</a>

    <table class="table table-bordered">
        <thead class="bg-primary text-light">
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $info)
            <tr>
                <td>{{ $info->info_title }}</td>
                <td>{{ $info->info_content }}</td>
                <td>{{ $info->status }}</td>
                <td>
                    <a href="{{ url('admin/info/edit/' . $info->id) }}" class="btn btn-primary btn-md"><i
                            class="far fa-edit"></i> Edit</a>
                    <a href="{{ url('admin/info/delete/' . $info->id) }}" class="btn btn-danger btn-md"><i
                            class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
