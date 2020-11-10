@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
    <div class="t-container c f fc fst">
        <header class="t-header f js ac">
        <img width="35px" src="{{asset('assets/icon.png')}}" alt="" srcset="">
            <div class="t-brand">Tweety</div>


        </header>
        <main class="t-main f as ">
            <nav class="t-nav f fc ast ">

                <div class="nav-links f fc js mb1">
                    <a href="#">Home</a>
                    <a href="#">Explore</a>
                    <a href="#">Notification</a>
                    <a href="#">Messages</a>
                    <a href="#">Bookmarks</a>
                    <a href="#">Lists</a>
                    <a href="#">Profile</a>
                    <a href="#">More</a>
                </div>

                <button class="btn btn-tweet">Tweet a post</button>

                @auth

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="btn btn-logout" type="submit">
                        {{ __('Logout') }}
                    </button>
                </form>

                @endauth
            </nav>

            <section class="t-feed f fc ac ">
                    <form class="" action="#">
                        <div class="group-body">
                            <textarea name="tweet" id="" placeholder="What's on your mind ?"></textarea>
                        </div>
                        <div class="group-footer f ac jb">
                            <img src="https://i.pravatar.cc/40" alt="">
                            <button class="btn btn-tweet" type="submit">Tweet it !</button>
                        </div>
                    </form>
                    <div class="feed ">
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="tweet f as js">
                            <img class="t-avatar" src="https://i.pravatar.cc/40" alt="">
                            <div class="t-content">
                                <div class="name">
                                    some guy
                                </div>
                                <div class="body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora fugiat autem asperiores veritatis ea impedit perferendis natus ab temporibus odit, ipsum ullam, esse consequatur!
                                </div>
                                <div class="t-img f ac js">
                                    <img src="https://i.pravatar.cc/250"  width="100%" alt="">

                                </div>
                                <div class="react">
                                    <img class="like" src="{{asset('assets/like.svg')}}" width="20px" alt="" srcset="">
                                    <img class="dislike" src="{{asset('assets/dislike.svg')}}" width="20px" alt="" srcset="">
                                </div>
                            </div>
                        </div>

                    </div>
            </section>
            <aside class="t-friends f fc ast js">
                <h3>Friends</h3>
                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>

                    <div class="friend">
                        <img src="https://i.pravatar.cc/30" alt="" srcset="">
                        <a href="#">some name</a>
                    </div>


            </aside>
        </main>

    </div>



@endsection
