@if($data != 'first')
<div class="bodySelectUser">
    <span class="avatar userMainAvatar  {{$data['color']}}" alt="img">{{$data['name'][0]}}</span>
    <h2>{{$data['name']}}</h2>
    <h3>Зарплатня: {{$data['salary']}} грн</h3>
    <button class="btn tasksOfUser" data-id="{{$data['id']}}">Таски користувача</button>
</div>
@else
<div class="bodySelectUser">
   <h2>Виберіть користувача із списку для розрахунку зарплатні</h2>
</div>
@endif
