@extends('layout')

@section('title', 'Miasta')

@section('body')

    <div class="d-flex flex-row">

        <a class="btn btn-primary" href="{{route('cities.create')}}">Dodaj Miasto</a>

        <a class="btn btn-primary" href="{{route('restaurants.index')}}">Przejdź do Restauracje</a>

        <a class="btn btn-primary" href="{{route('menus.index')}}">Przejdź do Menu</a>

        <a class="btn btn-primary" href="{{route('customers.index')}}">Przejdź do Klienci</a>

        <a class="btn btn-primary" href="{{route('orders.index')}}">Przejdź do Zamówień</a>

        <a class="btn btn-primary" href="{{route('order_items.index')}}">Przejdź zamówienie i menu</a>

    </div>

    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Nazwa miejscowości</strong></td>
            <td><strong>Data stworzenia</strong></td>
            <td><strong>Data modyfikacji</strong></td>
        </tr>
        @foreach($cities as $city)
            <tr>
                <td>{{$city->id}}</td>
                <td>{{$city->name}}</td>
                <td>{{$city->created_at}}</td>
                <td>{{$city->updated_at}}</td>
                <td><a class="btn btn-info" href="{{route('cities.edit', $city)}}">Edycja</a></td>
                <td>
                    {!! Form::model($cities, ['route' => ['cities.delete', $city], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$cities->links()}}


@endsection