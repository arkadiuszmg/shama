@extends('layout')

@section('body')

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($photo, ['route' => ['photos.update', $photo], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nazwa zdjęcia: ') !!}
        {!! Form::text('name', $photo->name, ['class'=>'form-control']) !!}
        {!! Html::image('images/'.$photo->name,'uuu',['style'=>'width:200px','height:200px']) !!}
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection