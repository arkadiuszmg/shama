@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($menu, ['route' => ['menus.update', $menu], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nazwa:') !!}
        {!! Form::text('name', $menu->name, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comments', 'Komentarz:') !!}
        {!! Form::textarea('comments', $menu->comments, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Cena:') !!}
        {!! Form::text('price', $menu->price, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Id zdjęcia:') !!}
        {!! Form::select('photo_id', $photos, $menu->photo_id, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('restaurant_id', 'Id restauracji:') !!}
        {!! Form::select('restaurant_id', $restaurants, $menu->restaurant_id, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection