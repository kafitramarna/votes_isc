@extends('_templates.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/candidate/{{ $candidate->id }}/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $candidate->name }}">
                </div>
                <div>
                    <label for="" class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photo" accept="image/*">
                </div>
                <div>
                    <label for="" class="form-label">Visi</label>
                    <input type="text" class="form-control" name="vision" value="{{ $candidate->vision }}">
                </div>
                <div>
                    <label for="" class="form-label">Misi</label>
                    <input type="text" class="form-control" name="mision" value="{{ $candidate->mision }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
