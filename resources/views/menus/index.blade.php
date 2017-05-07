@extends('layout')

@section('title', 'Restauracje')

@section('body')

    <div class="d-flex flex-row">

        <a class="btn btn-primary" href="{{route('menus.create')}}">Dodaj Menu</a>

        <a class="btn btn-primary" href="{{route('cities.index')}}">Przejdź do Miasta</a>

        <a class="btn btn-primary" href="{{route('restaurants.index')}}">Przejdź do Restauracje</a>

        <a class="btn btn-primary" href="{{route('customers.index')}}">Przejdź do Klienci</a>

        <a class="btn btn-primary" href="{{route('orders.index')}}">Przejdź do Zamówień</a>

        <a class="btn btn-primary" href="{{route('photos.index')}}">Zobacz zdjęcia</a>

        <a class="btn btn-primary" href="{{route('order_items.index')}}">Przejdź zamówienie i menu</a>

    </div>

    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Nazwa</strong></td>
            <td><strong>Komentarz</strong></td>
            <td><strong>Cena</strong></td>
            <td><strong>ID zdjęcia</strong></td>
            <td><strong>ID Restauracji</strong></td>
            <td><strong>Data stworzenia</strong></td>
            <td><strong>Data modyfikacji</strong></td>
        </tr>
        @foreach($menus as $menu)
            <tr>
                <td>{{$menu->id}}</td>
                <td>{{$menu->name}}</td>
                <td>{{$menu->comments}}</td>
                <td>{{number_format($menu->price,2)}}</td>
                <td>{{$menu->photo_id}}</td>
                <td>{{$menu->restaurant_id}}</td>
                <td>{{$menu->created_at}}</td>
                <td>{{$menu->updated_at}}</td>
                <td><a class="btn btn-info" href="{{route('menus.edit', $menu)}}">Edycja</a></td>
                <td>
                    {!! Form::model($menus, ['route' => ['menus.delete', $menu], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$menus->links()}}


@endsection