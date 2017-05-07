@extends('FrontLayout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @php
        $TotalPrice = 0;
    @endphp

    @foreach($items as $item)
        <div>
            <h2>Zamawiasz: {{$item->name}}</h2>
            <h3>Cena: {{number_format($item->price,2)}} zł</h3>
            <a class="btn btn-danger" href="{{route('front.RemoveFromBasket', $item)}}">Usun z zamówienia</a>

        </div>
        @php
            $TotalPrice += $item->price;
        @endphp
    @endforeach
        <h2>Suma zamówienia: {{number_format($TotalPrice,2)}} zł</h2>

    <div class="form-group, pull-right">
        <a class="btn btn-info" href="#">Zamawiam</a>
    </div>



@endsection