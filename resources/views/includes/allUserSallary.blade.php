<div class="allUserCheckSallary">
    @foreach($user as $v)
        <div class="bodySelectUser">
            <span class="avatar userMainAvatar  {{$v['color']}}" alt="img">{{$v['name'][0]}}</span>
            <h2>{{$v['name']}}</h2>
            <h3>Зарплатня: {{$v['sallary']}} грн</h3>
            <button class="btn tasksOfUser" data-id="{{$v['id']}}">Таски користувача</button>
        </div>
    @endforeach
</div>
