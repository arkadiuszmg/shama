@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'menus.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nazwa:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comments', 'Komentarz:') !!}
        {!! Form::textarea('comments', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Cena:') !!}
        {!! Form::text('price', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Id zdjęcia:') !!}
        {!! Form::number('photo_id', $photos, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('restaurant_id', 'Id restauracji:') !!}
        {!! Form::number('restaurant_id', $restaurants, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection