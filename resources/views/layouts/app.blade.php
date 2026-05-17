@extends('layouts.master')

@section('body')
    <div id="app">
        @include('layouts.partials.sidebar')

        <div id="main">
            @include('layouts.partials.navbar')



            <div class="page-content">
                @yield('content')
            </div>

            {{-- Footer layouts --}}
            @include('layouts.partials.footer')
        </div>
    </div>
@endsection