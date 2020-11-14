<form class="t-form" class="" method="POST" action="/tweets" enctype="multipart/form-data">
    @csrf
    <div class="group-body">
        <textarea id="tweetInput" name="tweet" id="" placeholder="What's on your mind ?"></textarea>
    </div>
    <div class="group-footer f ac jb">
        <img class="avatar" src={{Auth::user()->avatar}} alt="">
        
        <div class="f ac ">
            <div class="files">
                <span class=" hidden fa fa-trash fa-xs "></span>
                <span class=" hidden files-count"></span>
                <input accept="image/*,.pdf" type="file" name="images" class="fa fa-images fa-files fa-lg" multiple>
            </div>
            <button class="btn btn-tweet" type="submit">Tweet it !</button>
    </div>

    </div>
    @error('tweet')
        <div class="errors">
           <div class="error">
            {{$message}}
            </div>
        </div>
    @enderror
</form>
