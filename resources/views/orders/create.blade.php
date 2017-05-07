@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'orders.store']) !!}
    <div class="form-group">
        {!! Form::label('restaurant_id', 'ID restauracji:') !!}
        {!! Form::select('restaurant_id', $restaurants, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('total_order_price', 'Suma zamówienia:') !!}
        {!! Form::text('total_order_price', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status_order', 'Status zamówienia:') !!}
        {!! Form::text('status_order', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('costumer_id', 'Id Klienta:') !!}
        {!! Form::select('costumer_id', $customers, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('customer_comments', 'Komentarz:') !!}
        {!! Form::text('customer_comments', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

    @endsection