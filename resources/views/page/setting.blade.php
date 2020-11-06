@include('includes/header')
<div class="setting-block">
    <div class="title-setPrice">
        <h2>Введіть вартість(грн) за 1 виконану таску в якої позначка буде співпадати з вказаним коліром</h2>
    </div>
    <form action="/setColorCount" method="POST">
        @csrf
        @if($price == null)
            <div class="labels">
                <input type="number" min="1" class="setSallary green" name="green" placeholder="Green" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary orange" name="orange" placeholder="Orange" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary yellow" name="yellow" placeholder="Yellow" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary red" name="red" placeholder="Red" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary blue" name="blue" placeholder="Blue" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary purple" name="purple" placeholder="purple" required>
            </div>
        @else
            <div class="labels">
                <input type="number" min="1" class="setSallary green" name="green" value="{{$price->green}}" placeholder="Green" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary orange" name="orange" value="{{$price->orange}}" placeholder="Orange" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary yellow" name="yellow" value="{{$price->yellow}}" placeholder="Yellow" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary red" name="red" value="{{$price->red}}" placeholder="Red" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary blue" name="blue" value="{{$price->blue}}" placeholder="Blue" required>
            </div>
            <div class="labels">
                <input type="number" min="1" class="setSallary purple" name="purple"  value="{{$price->purple}}" placeholder="purple" required>
            </div>
        @endif
        <button class="btn btnNextSetColor" type="submit">Далі</button>
    </form>
</div>

@include('includes/footer')
