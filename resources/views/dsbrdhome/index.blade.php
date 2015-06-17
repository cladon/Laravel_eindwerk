@extends('layouts.default')


{{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop

{{-- Content --}}
@section('main')

    <div class="page-header">
        <h3>
            {{$title}}
        </h3>
    </div>

    <div class="row">


{{--//{{dd($leerplan)}}--}}

        @foreach($leerplan as $lp)
        {{--leerplannen--}}

        <div class="col-lg-4 ">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-user fa-1x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$lp->leerplannummer}}</div>

                            <div>{{ trans("site/leerplan.leerplan") }}!</div>
                        </div>
                    </div>
                </div>

                <a href="{{URL::to('jaldoelen/'.$lp->id )}}">
                    <div class="panel-footer">
                        <span class="pull-left">{{ trans("site/leerplan.view_detail") }}</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach



@endsection