@extends('layout')

@section('title', 'Zdjęcia')

@section('body')

    <div class="d-flex flex-row">

        <a class="btn btn-primary" href="{{route('photos.create')}}">Dodaj zdjęcie</a>

        <a class="btn btn-primary" href="{{route('cities.index')}}">Przejdź do Miasta</a>

        <a class="btn btn-primary" href="{{route('restaurants.index')}}">Przejdź do Restauracje</a>

        <a class="btn btn-primary" href="{{route('customers.index')}}">Przejdź do Klienci</a>

        <a class="btn btn-primary" href="{{route('orders.index')}}">Przejdź do Zamówień</a>

        <a class="btn btn-primary" href="{{route('menus.index')}}">Przejdź do Menu</a>

    </div>

    <table class="table table-hover">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Nazwa Zdjęcia</strong></td>
            <td><strong>Data stworzenia</strong></td>
            <td><strong>Data modyfikacji</strong></td>
        </tr>
        @foreach($photos as $photo)
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->name}}</td>
                <td>{{$photo->created_at}}</td>
                <td>{{$photo->updated_at}}</td>
                <td>{!! Html::image('images/'.$photo->name,'uuu',['style'=>'width:100px','height:100px']) !!}</td>
                <td><a class="btn btn-info" href="{{route('photos.edit', $photo)}}">Edycja</a></td>
                <td>
                    {!! Form::model($photos, ['route' => ['photos.delete', $photo], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usun</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$photos->links()}}


@endsection