@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($restaurant, ['route' => ['restaurants.update', $restaurant], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nazwa restauracji:') !!}
        {!! Form::text('name', $restaurant->name, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Adres restauracji:') !!}
        {!! Form::text('address', $restaurant->address, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Telefon restauracji:') !!}
        {!! Form::text('phone', $restaurant->phone, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city_id', 'Id miasta w którym jest restauracja:') !!}
        {!! Form::select('city_id', $cities, $restaurant->city_id, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('open', 'Otwarte:') !!}
        {!! Form::radio('open', 'yes', true,['class'=>'form-control']) !!} TAK
        {!! Form::radio('open', 'no', true, ['class'=>'form-control']) !!} NIE
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection