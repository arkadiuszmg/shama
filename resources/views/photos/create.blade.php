@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'photos.store', 'enctype' => 'multipart/form-data' ]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Dodaj zdjęcie:') !!}
        {!! Form::file('name', null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection