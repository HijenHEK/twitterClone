<form class="" method="POST" action="/tweet">
    @csrf
    <div class="group-body">
        <textarea name="body" id="" placeholder="What's on your mind ?"></textarea>
    </div>
    <div class="group-footer f ac jb">
        <img src={{Auth::user()->avatar}} alt="">
        <button class="btn btn-tweet" type="submit">Tweet it !</button>
    </div>
</form>
