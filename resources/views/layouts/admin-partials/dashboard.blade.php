
        <div class="left ">
            <ul>
                <li>
                    <a href="{{route('home')}}"><i class="fas fa-home"></i>DashBoard</a>
                </li>
                <li>
                    <a href=""><i class="fas fa-users"></i>Account</a>
                </li>
                <li>
                    {{-- <a href="{{route('post.index')}}"><i class="far fa-sticky-note"></i>Post</a> --}}
                </li>
                <li>
                    <a href=""><i class="fas fa-tag"></i>Tags</a>
                </li>
            
            </ul>
        </div>

        <div class="right">
            @yield('content')
        </div>
    