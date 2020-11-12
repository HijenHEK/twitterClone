<form class="t-form" class="" method="POST" action="/tweets">
    @csrf
    <div class="group-body">
        <textarea id="tweetInput" name="tweet" id="" placeholder="What's on your mind ?"></textarea>
    </div>
    <div class="group-footer f ac jb">
        <img src={{Auth::user()->avatar}} alt="">
        <button class="btn btn-tweet" type="submit">Tweet it !</button>
    </div>
    @error('tweet')
        <div class="errors">
           <div class="error">
            {{$message}}
            </div>
        </div>
    @enderror
</form>
