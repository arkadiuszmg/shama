@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'order_items.store']) !!}
    <div class="form-group">
        {!! Form::label('order_id', 'ID zamówienia:') !!}
        {!! Form::select('order_id', $orders, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('menu_id', 'Id menu:') !!}
        {!! Form::select('menu_id', $menus, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection