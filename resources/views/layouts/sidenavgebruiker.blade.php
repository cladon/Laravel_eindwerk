@extends('app')
@section('content')
    <div class="row">
            @yield('top')
    </div>
    <div class="row">

        <div class="col-sm-9 col-md-10 main">
            @yield('main')
        </div>
    </div>
@endsection
