@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($order_item, ['route' => ['order_items.update', $order_item], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('order_id', 'ID zamówienia:') !!}
        {!! Form::select('order_id', $orders, $order_item->order_id, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('menu_id', 'Id menu:') !!}
        {!! Form::select('menu_id', $menus, $order_item->menu_id, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection