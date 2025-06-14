@extends('_templates.app')

@section('content')
    <div class="card">
        <div class="card-title p-6">
            <h1 class="text-center">Daftar Kandidat</h1>
            <a href="/candidate/create" class="btn btn-primary">Tambah Kandidat</a>
        </div>

        <div class="card-body">
            @foreach ($candidate as $item)
                <h1>Kandidate ke-{{ $loop->iteration }}</h1>
                <div class="mb-4">
                    <h1>Nama: {{ $item->name }}</h1>
                    <img src="{{ asset($item->photo_url) }}" class="img-fluid" alt="">
                    <p>Visi: {{ $item->vision }}</p>
                    <p>Misi: {{ $item->mision }}</p>
                    <a href="{{ route('candidate.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
