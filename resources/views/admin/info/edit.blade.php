@extends('admin.app')
@section('content')
    <h3>Edit Info</h3>
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
        <form action="{{ url('admin/info/edit/' . $info->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="info_title">Title</label>
            <input type="text" name="info_title" class="form-control" value="{{ $info->info_title }}" readonly>
            <label for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option value="1" {{ 1 == $info->status ? 'selected' : '' }}>Publish</option>
                <option value="0" {{ 0 == $info->status ? 'selected' : '' }}>Tidak Publish</option>
            </select><br>
            <textarea id="info_content" class="form-control" name="info_content" rows="10" cols="50"
                readonly>{{ $info->info_content }}</textarea><br>
            <input type="submit" name="submit" class="btn btn-md btn-primary" value="Ubah Data">
            <a href="{{ url('admin/info') }}" class="btn btn-md btn-warning"><i class="fas fa-chevron-circle-left"></i>
                Kembali</a>
        </form>
    </div>
@endsection
