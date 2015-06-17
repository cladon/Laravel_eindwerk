@extends('admin.layouts.modal') {{-- Content --}} @section('content')
    <!-- Tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-general" data-toggle="tab"> {{trans("admin/modal.general") }}</a></li>

    </ul>
    <!-- ./ tabs -->
    <form class="form-horizontal" enctype="multipart/form-data"
          method="post"
          action="@if(isset($doelen)){{ URL::to('jaldoelen/'.$doelen->id.'/edit') }}
	        @else{{ URL::to('jaldoelen/create') }}@endif"
          autocomplete="off">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <h2>Updaten JAL-Doelen</h2>

        {{--code--}}
        <div class="form-group {{{ $errors->has('code') ? 'has-error' : '' }}}">

            <label class="col-md-1 control-label" for="code"> {{	trans("site/doelen.code") }}</label>

            <div class="col-md-10">
                <input class="form-control" type="text" name="code" id="code" disabled="disabled" value="{{{ Input::old('code', isset($doelen) ? $doelen->code : null) }}}" />

                {!!$errors->first('code', '<label class="control-label" for="name">:message</label>')!!}
            </div>
        </div>

        {{--competentie--}}
        <div class="form-group {{{ $errors->has('competentie') ? 'has-error' : '' }}}">

            <label class="col-md-1 control-label" for="competentie">{{trans("site/doelen.competentie") }}</label>

            <div class="col-md-10">
                <input class="form-control" type="text" name="competentie" id="competentie" value="{{{ Input::old('competentie', isset($doelen) ? $doelen->competentie : null) }}}" />

                {!!$errors->first('competentie', '<label class="control-label" for="name">:message</label>')!!}
            </div>
        </div>

        {{--leerplanid--}}
        <div class="form-group {{{ $errors->has('lp_id') ? 'has-error' : '' }}}">
            <div class="col-md-12">
                <label class="control-label" for="lp_id">{{trans("site/doelen.lpid") }}</label>
                <input class="form-control" type="text" name="lp_id" id="lp_id" value="{{{ Input::old('lp_id', isset($doelen) ? $doelen->lp_id : $id) }}}" />
                {!!$errors->first('lp_id', '<label class="control-label" for="name">:message</label>')!!}
            </div>
        </div>


        {{--graad_J1--}}
        <div class="form-group {{{ $errors->has('graad_j1') ? 'has-error' : '' }}}">

            <label class="col-md-2 control-label" for="graad_j1"> {{	trans("site/doelen.grj1") }}</label>

            <div class="col-md-9">
                <input class="form-control" type="text" name="graad_j1" id="graad_j1"  value="{{{ Input::old('graad_j1', isset($doelen) ? $doelen->graad_j1 : $graad1) }}}" />

                {!!$errors->first('graad_j1', '<label class="control-label" for="graad_j1">:message</label>')!!}
            </div>
        </div>



        {{--<div class="container">--}}
            {{--<ul class="nav nav-tabs">--}}
                {{--<li class="nav active"><a href="#A" data-toggle="tab">A</a></li>--}}
                {{--<li class="nav"><a href="#B" data-toggle="tab">B</a></li>--}}
                {{--<li class="nav"><a href="#C" data-toggle="tab">C</a></li>--}}
            {{--</ul>--}}

            {{--<!-- Tab panes -->--}}
            {{--<div class="tab-content">--}}
                {{--<div class="tab-pane fade in active" id="A">--}}



                    {{--graad_J1--}}
                    {{--<div class="form-group {{{ $errors->has('graad_j1') ? 'has-error' : '' }}}">--}}

                        {{--<label class="col-md-2 control-label" for="graad_j1"> {{	trans("site/doelen.grj1") }}</label>--}}

                        {{--<div class="col-md-9">--}}
                            {{--<input class="form-control" type="text" name="graad_j1" id="graad_j2"  value="{{{ Input::old('graad_j1', isset($doelen) ? $doelen->graad_j1 : null) }}}" />--}}

                            {{--{!!$errors->first('graad_j1', '<label class="control-label" for="graad_j1">:message</label>')!!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--graad_J2--}}
                    {{--<div class="form-group {{{ $errors->has('graad_j2') ? 'has-error' : '' }}}">--}}

                        {{--<label class="col-md-2 control-label" for="graad_j2"> {{	trans("site/doelen.grj2") }}</label>--}}

                        {{--<div class="col-md-9">--}}
                            {{--<input class="form-control" type="text" name="graad_j2" id="graad_j2"  value="{{{ Input::old('graad_j2', isset($doelen) ? $doelen->graad_j2 : null) }}}" />--}}

                            {{--{!!$errors->first('graad_j2', '<label class="control-label" for="graad_j2">:message</label>')!!}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--intern project--}}
                    {{--<div class="form-group {{{ $errors->has('waar_ip') ? 'has-error' : '' }}}">--}}

                        {{--<label class="col-md-2 control-label" for="waar_ip"> {{	trans("site/doelen.waarip") }}</label>--}}

                        {{--<div class="col-md-9">--}}
                            {{--<input class="form-control" type="text" name="waar_ip" id="waar_ip"  value="{{{ Input::old('waar_ip', isset($doelen) ? $doelen->waar_ip : null) }}}" />--}}

                            {{--{!!$errors->first('waar_ip', '<label class="control-label" for="waar_ip">:message</label>')!!}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--extern project--}}
                    {{--<div class="form-group {{{ $errors->has('waar_ep') ? 'has-error' : '' }}}">--}}

                        {{--<label class="col-md-2 control-label" for="waar_ep"> {{	trans("site/doelen.waarep") }}</label>--}}

                        {{--<div class="col-md-9">--}}
                            {{--<input class="form-control" type="text" name="waar_ep" id="waar_ep"  value="{{{ Input::old('waar_ep', isset($doelen) ? $doelen->waar_ep : null) }}}" />--}}

                            {{--{!!$errors->first('waar_ep', '<label class="control-label" for="waar_ep">:message</label>')!!}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="tab-pane fade" id="B">Content inside tab B</div>--}}
                {{--<div class="tab-pane fade" id="C">Content inside tab C</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{-- Actie knoppen --}}
        <div class="form-group">
            <div class="col-md-12">
                <button type="reset" class="btn btn-sm btn-warning close_popup">
                    <span class="glyphicon glyphicon-ban-circle"></span> {{
				trans("admin/modal.cancel") }}
                </button>
                <button type="reset" class="btn btn-sm btn-default">
                    <span class="glyphicon glyphicon-remove-circle"></span> {{
				trans("admin/modal.reset") }}
                </button>
                <button type="submit" class="btn btn-sm btn-success">
                    <span class="glyphicon glyphicon-ok-circle"></span>
                    @if (isset($doelen))
                        {{ trans("site/modal.edit") }}
                    @else
                        {{trans("site/modal.create") }}
                    @endif
                </button>
            </div>
        </div>
    </form>
@stop
