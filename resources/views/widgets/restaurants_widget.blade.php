<ul class="list-group">
    @foreach($restaurants as $restaurant)
        <li class="list-group-item"><a href="{{route('front.byrestaurant', [
        $restaurant->id,
        str_slug($restaurant->name)
        ])}}">{{$restaurant->name}}</a></li>
    @endforeach
</ul>