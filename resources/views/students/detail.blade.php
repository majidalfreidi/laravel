@extends('layout/main')

@section('title', 'Detail Students')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Detail Students</h2>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$student->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                <p class="card-text">{{$student->nrp}}</p>
                <p class="card-text">{{$student->jurusan}}</p>
                <a href="{{$student->id}}/edit" class="btn btn-success">Edit</a>
                <form action="{{$student->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                    <a href="/students" class="card-link btn btn-info">Back</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
