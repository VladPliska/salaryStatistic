@include('includes/header')
<div class="content">
    <div class="main">
        <h2>Вкажіть url на дошку Trello</h2>
        <form action="/getBoard" method="POST">
            @csrf
            <input type="text" placeholder="URL" name='url' class="inputURl" require><br>
            <button class="btn-search" type="submit"> Знайти</button>
        </form>
    </div>
</div>
@include('includes/footer')
