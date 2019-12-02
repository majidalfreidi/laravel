@extends('layout/main')

@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>Daftar Mahasiswa</h2>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif

                <ul class="list-group">
                    @foreach( $students as $stn )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$stn->nama}}
                    <a href="/students/{{$stn->id}}" class="badge badge-info">Show Detail</a>
                    </li>
                    @endforeach
                </ul>
        </div>
    </div>
</div>
@endsection
