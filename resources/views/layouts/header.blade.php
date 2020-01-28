
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="padding-top:4px;padding-bottom:4px;">

    {{--<a class="navbar-brand" href="{{ route('home') }}">--}}
    {{--<img src="{{asset('images/gamai-logo.png')}}" alt="" style="height: 30px; margin-top: 10px;">--}}
    {{--</a>--}}
    {{--<div class="right-corner">--}}

    {{--<a href="{{ route('products.create') }}" class="sell_btn" >--}}
    {{--<img src="{{asset('assets/Asset 1@4x.png' )}}" style="height: 25px;" alt="">--}}
    {{--</a>--}}



    {{--<!-- Authentication Links -->--}}
    {{--@guest--}}

    {{--<a class="nav-login-btn" href="{{ route('login') }}">{{ __('Login') }}--}}
    {{--<i class="fa fa-user-alt"></i>--}}
    {{--</a>--}}

    {{--@else--}}
    {{--<a href="{{url('profile')}}">--}}
    {{--@if(Auth::user()->provider)--}}
    {{--<img src="{{Auth::user()->avatar}}" alt="" style="height: 30px;border-radius: 50px;width: 30px;">--}}
    {{--@else--}}
    {{--<img src="{{asset('avatars/'.Auth::user()->avatar)}}" alt="" style="height: 30px;border-radius: 50px;width: 30px;">--}}
    {{--@endif--}}
    {{--</a>--}}
    {{--<li class="nav-item">--}}
    {{--@include('home.nav.logged')--}}
    {{--</li>--}}
    {{--@if(Auth::user()->user_role == 1)--}}
    {{--<a href="{{route('admin' ,['admin'=>Auth::user()->user_role])}}">Go to Admin page</a>--}}
    {{--@endif--}}
    {{--@endguest--}}

    {{--</div>--}}
    <div class="header_row ">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{asset('images/gamai-logo.png')}}" alt="" style="height: 30px;">

        </a>
        <ul class="navbar-nav ml-auto" style="flex-direction: row;">
            <a href="{{ route('products.create') }}"  >
                <img src="{{asset('assets/Asset 1@4x.png' )}}" style="height: 30px; margin-top: 4px;" alt="">
            </a>
            @guest
                <li class="nav-item">
                    @include('home.nav.login')
                    {{--<a id=""  href="javascript:void(0);" onclick="showLogin()"><img src="{{asset('assets/Asset 5@4x.png')}}" alt="" height="40px"></a>--}}
                </li>
                <li class="nav-item">
                    @include('home.nav.nonuser')
                </li>
            @else
                <li>
                    @if(Auth::user()->user_role == 1)
                        <a href="{{route('admin' ,['admin'=>Auth::user()->user_role])}}" class="btn btn-success" style="height: 30px;margin-top: 4px;margin-left: 4px;padding: 3px;">Go to Admin page</a>
                    @endif
                </li>
                <li class="nav-item">
                    @include('home.nav.logged')
                </li>

            @endguest
        </ul>
    </div>

</nav>

