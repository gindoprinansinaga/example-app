@extends('layout.main')

@section('title', 'Daftar Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>

            <a href="/students/create"></a>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                    <p class="card-text"> {{ $student->email }}</p>
                    <p class="card-text"> {{ $student->jurusan }}</p>

                    <a href=" {{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="/students" class="card-link">kembali</a>
                </div>
            </div>
        </div>
    </div>
    @endsection