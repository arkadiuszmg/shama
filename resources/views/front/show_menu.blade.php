@extends('FrontLayout')

@section('title', 'Menu')

@section('body')

    @foreach($menus as $menu)

        <div class="col-sm-4 col-lg-4 col-md-4 ">
            <div class="thumbnail">

                {{ Html::image('images/'.$menu->photo->name,'alt', ['style'=>'width:320px','height:150px']) }}

                <div class="caption">
                    <h3><strong>{{$menu->name}}</strong></h3>
                    <h4 class="pull-right">{{number_format($menu->price,2)}} zł</h4>

                </div>
                <div>
                    <p>{{$menu->comments}}</p>
                    <a class="btn btn-primary" href="{{route('front.addToStore', $menu)}}">Zamów</a>
                </div>
            </div>
        </div>

    @endforeach



@endsection