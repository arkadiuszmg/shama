@extends('layout')

@section('title', 'Restauracje')

@section('body')

    <div class="d-flex flex-row">

        <a class="btn btn-primary" href="{{route('restaurants.create')}}">Dodaj Restaurację</a>

        <a class="btn btn-primary" href="{{route('cities.index')}}">Przejdź do Miasta</a>

        <a class="btn btn-primary" href="{{route('menus.index')}}">Przejdź do Menu</a>

        <a class="btn btn-primary" href="{{route('customers.index')}}">Przejdź do Klienci</a>

        <a class="btn btn-primary" href="{{route('orders.index')}}">Przejdź do Zamówień</a>

        <a class="btn btn-primary" href="{{route('order_items.index')}}">Przejdź zamówienie i menu</a>

    </div>

    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Nazwa Restauracji</strong></td>
            <td><strong>Nazwa Adres</strong></td>
            <td><strong>Telefon</strong></td>
            <td><strong>ID Miasta</strong></td>
            <td><strong>Otwarte</strong></td>
            <td><strong>Data stworzenia</strong></td>
            <td><strong>Data modyfikacji</strong></td>
        </tr>
        @foreach($restaurants as $restaurant)
            <tr>
                <td>{{$restaurant->id}}</td>
                <td>{{$restaurant->name}}</td>
                <td>{{$restaurant->address}}</td>
                <td>{{$restaurant->phone}}</td>
                <td>{{$restaurant->city_id}}</td>
                <td>{{$restaurant->open}}</td>
                <td>{{$restaurant->created_at}}</td>
                <td>{{$restaurant->updated_at}}</td>
                <td><a class="btn btn-info" href="{{route('restaurants.edit', $restaurant)}}">Edycja</a></td>
                <td>
                    {!! Form::model($restaurants, ['route' => ['restaurants.delete', $restaurant], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$restaurants->links()}}


@endsection