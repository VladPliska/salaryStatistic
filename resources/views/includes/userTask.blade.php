<div class="allTask">
    @foreach($task as $k =>$v)
        <div class="task">
            <div class="price">{{$priceList->getOriginal($v->labels[0]->color)}} грн.</div>
            <div class="text">
               {{$v->name}}
            </div>
{{--            @dump($v->labels)--}}
            <div class="color {{$v->labels[0]->color}}"></div>
        </div>
    @endforeach

</div>
