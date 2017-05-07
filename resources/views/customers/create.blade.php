@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'customers.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Imię i nazwisko klienta:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Adres klienta:') !!}
        {!! Form::text('address', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Telefon klienta:') !!}
        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection