@include('includes.header')

    

        <header>
            <div class="container">
                <p> 
                    <a href="{{ url('/') }}">Laracom</a>
                </p>
            </div>
        </header>

        <section class="main-body">
             <div class="container">
             <div class="posts">
                 @if ($posts)
                    @foreach($posts as $post) 
                        <p>{{ $post->postBody }}</p>
                    @endforeach
                 @endif
             </div>

                <div class="columns">

                        
                    <div class="column is-3">
                        <div class="card"">
                        @guest
                        @else
                            <div class="account-column-img"></div>
                            <p class="account-column-title">{{ Auth::user()->name }}</p>
                            <p class="account-column-title">Posts</p>
                            <p class="account-column-title">1234</p>
                        @endguest
                        </div>
                    </div>

                    <div class="column is-5">
                        <div class="columns is-multiline">
                            <div class="column is-12">
                                <div class="card">
                                    <form action="/" method="POST">
                                        <input type="text" name="postBody">
                                        {{ csrf_field() }}
                                        <input type="submit">
                                    </form>
                                </div>
                            </div>
                            <div class="column is-12">
                                <div class="card">timeline</div>
                            </div>                        
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="card">Advertising space</div>
                    </div>

                    <div class="column is-2">
                        <div class="card card-alt">
                            <p class="text-bold user-column-title">Connections</p>
                           {{--  @foreach($users as $user)
                                <span class="online-status"></span><p class="user-column-name"><a href="/profile/{{ $user->name }}">{{ $user->name }}</a></p>
                            @endforeach --}}
                        </div>
                    </div>

                </div>
        </section>

@include('includes.footer')
