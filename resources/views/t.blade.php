@extends('layouts.app')

@section('content')
            @guest
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else

                        {{ Auth::user()->id }}

            @endguest
@endsection
