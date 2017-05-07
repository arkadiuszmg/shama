@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'restaurants.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nazwa restauracji:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Adres restauracji:') !!}
        {!! Form::text('address', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Telefon restauracji:') !!}
        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city_id', 'Id miasta w którym jest restauracja:') !!}
        {!! Form::select('city_id', $cities, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('open', 'Otwarte:') !!}
        {!! Form::radio('open', 'yes', ['class'=>'form-control']) !!} TAK
        {!! Form::radio('open', 'no', ['class'=>'form-control']) !!} NIE
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection