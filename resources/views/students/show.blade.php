@extends('layout/main')

@section('title', 'Data Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Students</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$s->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$s->nim}}</h6>
                    <p class="card-text">{{$s->email}}</p>
                    <p class="card-text">{{$s->jurusan}}</p>
                    <a href="/students/{{$s->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/students/{{$s->id}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection