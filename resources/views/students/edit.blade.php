@extends('layout/main')

@section('title', 'Edit Data Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Edit data Students</h1>
            <form method="POST" action="/students/{{$s->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama" value="{{ $s->nama }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">NIM</label>
                    <input type="text" class="form-control  @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Masukkan nim" value="{{ $s->nim }}">
                    @error('nim')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value="{{ $s->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jurusan</label>
                    <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" value="{{ $s->jurusan }}">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection