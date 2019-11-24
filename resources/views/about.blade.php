@extends('layout/main')

@section('judul', 'About me')

@section('container')
<div class="container">
<div class="row">
<div class="col-10">
<h1>hello, {{$nama}}!</h1>
</div>
</div>
</div>
@endsection