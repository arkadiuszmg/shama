@extends('layout')

@section('title', 'Zamówienie i menu')

@section('body')

    <div class="d-flex flex-row">

        <a class="btn btn-primary" href="{{route('order_items.create')}}">Dodaj zamówienie i menu</a>

        <a class="btn btn-primary" href="{{route('cities.index')}}">Przejdź do Miasta</a>

        <a class="btn btn-primary" href="{{route('restaurants.index')}}">Przejdź do Restauracje</a>

        <a class="btn btn-primary" href="{{route('menus.index')}}">Przejdź do Menu</a>

        <a class="btn btn-primary" href="{{route('customers.index')}}">Przejdź do Klienci</a>

    </div>

    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>ID zamówienia</strong></td>
            <td><strong>ID Menu</strong></td>
            <td><strong>Data Zamówienia</strong></td>
            <td><strong>Korekta zamówienia</strong></td>
        </tr>
        @foreach($order_items as $order_item)
            <tr>
                <td>{{$order_item->id}}</td>
                <td>{{$order_item->order_id}}</td>
                <td>{{$order_item->menu_id}}</td>
                <td>{{$order_item->created_at}}</td>
                <td>{{$order_item->updated_at}}</td>
                <td><a class="btn btn-info" href="{{route('order_items.edit', $order_item)}}">Edycja</a></td>
                <td>
                    {!! Form::model($order_items, ['route' => ['order_items.delete', $order_item], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$order_items->links()}}


@endsection