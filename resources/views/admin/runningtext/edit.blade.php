@extends('admin.app')
@section('content')
    <h3>Edit Running Text</h3>
    <hr>
    <div class="col-lg-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('admin/runningtext/edit/' . $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $data->title }}">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control" value="{{ $data->link }}">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option value="1" {{ 1 == $data->status ? 'selected' : '' }}>Publish</option>
                <option value="0" {{ 0 == $data->status ? 'selected' : '' }}>Tidak Publish</option>
            </select><br>
            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Ubah Data">
            <a href="{{ url('admin/category') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left"></i>
                Kembali</a>
        </form>
    </div>
@endsection
