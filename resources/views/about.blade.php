@extends('layout/main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Ini halaman about</h1>
            <h3>Hallo, {{$nama}} !</h3>
        </div>
    </div>
</div>
@endsection