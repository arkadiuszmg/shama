@extends('layout')

@section('title', 'Zamówienie')

@section('body')

    <div class="d-flex flex-row">

        <a class="btn btn-primary" href="{{route('orders.create')}}">Dodaj zamówienie</a>

        <a class="btn btn-primary" href="{{route('cities.index')}}">Przejdź do Miasta</a>

        <a class="btn btn-primary" href="{{route('restaurants.index')}}">Przejdź do Restauracje</a>

        <a class="btn btn-primary" href="{{route('menus.index')}}">Przejdź do Menu</a>

        <a class="btn btn-primary" href="{{route('customers.index')}}">Przejdź do Klienci</a>

        <a class="btn btn-primary" href="{{route('order_items.index')}}">Przejdź zamówienie i menu</a>

    </div>

    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>ID Restauracji</strong></td>
            <td><strong>Suma zamówienia</strong></td>
            <td><strong>Status</strong></td>
            <td><strong>ID Klienta</strong></td>
            <td><strong>Komentarz do zamówienia</strong></td>
            <td><strong>Data zamówienia</strong></td>
            <td><strong>Korekta zamówienia</strong></td>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->restaurant_id}}</td>
                <td>{{$order->total_order_price}}</td>
                <td>{{$order->status_order}}</td>
                <td>{{$order->costumer_id}}</td>
                <td>{{$order->customer_comments}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->updated_at}}</td>
                <td><a class="btn btn-info" href="{{route('orders.edit', $order)}}">Edycja</a></td>
                <td>
                    {!! Form::model($orders, ['route' => ['orders.delete', $order], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$orders->links()}}


@endsection