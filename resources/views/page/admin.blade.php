@include('includes/header')
<div class="admin">
    <div class="allUser">
        <h2>Всі користувачі</h2>
        @foreach($data as $v)
            <div class="userInfo-item" data-id="{{$v->id}}" data-name="{{$v->name}}">
                <div class="user-body">
                    <span class="avatar {{$v->color}}" alt=" " data-color={{$v->color}}>{{$v->name[0]}}</span>
                    <span class="name">{{$v->name}}</span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="fastSetting">
        <button class="btn allSallary ">Розрахувати зарплатню всіх користувачів</button>
        <div class="infoOfUser">
            @include('includes.userInfo',['data'=>'first'])
        </div>
    </div>
    <div class="settingButton">
        <a href="/changePrice"><button class=" btn changePrice">Оновити налаштування вартості</button></a>
        <button class=" btn resetSetting">Скинути налаштування</button>
    </div>

</div>
@include('includes/footer')
