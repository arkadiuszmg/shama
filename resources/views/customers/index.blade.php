@extends('layout')

@section('title', 'Klienci')

@section('body')
    <div class="d-flex flex-row">

        <a class="btn btn-primary" href="{{route('customers.create')}}">Dodaj Klienta</a>

        <a class="btn btn-primary" href="{{route('cities.index')}}">Przejdź do Miasta</a>

        <a class="btn btn-primary" href="{{route('restaurants.index')}}">Przejdź do Restauracje</a>

        <a class="btn btn-primary" href="{{route('menus.index')}}">Przejdź do Menu</a>

        <a class="btn btn-primary" href="{{route('orders.index')}}">Przejdź do Zamówień</a>

        <a class="btn btn-primary" href="{{route('order_items.index')}}">Przejdź zamówienie i menu</a>

    </div>

    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Nazwa Klienta</strong></td>
            <td><strong>Nazwa Adres</strong></td>
            <td><strong>Telefon</strong></td>
            <td><strong>Data stworzenia</strong></td>
            <td><strong>Data modyfikacji</strong></td>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->created_at}}</td>
                <td>{{$customer->updated_at}}</td>
                <td><a class="btn btn-info" href="{{route('customers.edit', $customer)}}">Edycja</a></td>
                <td>
                    {!! Form::model($customers, ['route' => ['customers.delete', $customer], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$customers->links()}}


@endsection