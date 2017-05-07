@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($city, ['route' => ['cities.update', $city], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nazwa miejscowości: ') !!}
        {!! Form::text('name', $city->name, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection