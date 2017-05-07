@extends('FrontLayout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{--<div>--}}
        {{--<h3>Zamawiasz: {{$menu->name}}</h3>--}}
        {{--<h2>Cena: {{number_format($menu->price,2)}} zł</h2>--}}

    {{--</div>--}}

    {!! Form::open(['route' => ['front.store', $menu]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Imię i nazwisko:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Adres:') !!}
        {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Telefon:') !!}
        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('customer_comments', 'Komentarz:') !!}
        {!! Form::textarea('customer_comments', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Zamawiam</button>
    </div>
    {!! Form::close() !!}



@endsection