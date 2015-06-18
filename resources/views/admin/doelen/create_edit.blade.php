@extends('admin.layouts.modal') {{-- Content --}} @section('content')
    <!-- Tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-general" data-toggle="tab"> {{
			trans("admin/modal.general") }}</a></li>
    </ul>
    <!-- ./ tabs -->
    <form class="form-horizontal" enctype="multipart/form-data"
          method="post"
          action="@if(isset($doelen)){{ URL::to('jaldoelen/'.$doelen->id.'/edit') }}
	        @else{{ URL::to('admin/doelen/create') }}@endif"
          autocomplete="off">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
                {{-- code --}}
                <div class="form-group {{{ $errors->has('code') ? 'has-error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="code"> {{
						trans("admin/doelen.code") }}</label> <input
                                class="form-control" type="text" name="code" id="code"
                                value="{{{ Input::old('code', isset($doelen) ? $doelen->code : null) }}}" />
                        {!!$errors->first('code', '<label class="control-label" for="code">:message</label>')!!}
                    </div>
                </div>

                {{-- competentie --}}
                <div class="form-group {{{ $errors->has('competentie') ? 'has-error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="competentie">{{
						trans("admin/doelen.competentie") }}</label> <input
                                class="form-control" type="text" name="competentie" id="competentie"
                                value="{{{ Input::old('competentie', isset($doelen) ? $doelen->competentie : null) }}}" />
                        {!!$errors->first('competentie', '<label class="control-label"
                                                               for="name">:message</label>')!!}
                    </div>
                </div>
                {{-- leerplanid --}}
                <div class="form-group {{{ $errors->has('lp_id') ? 'has-error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="lp_id">{{
						trans("admin/doelen.lpid") }}</label> <input
                                class="form-control" type="text" name="lp_id" id="lp_id"
                                value="{{{ Input::old('lp_id', isset($doelen) ? $doelen->lp_id : $id) }}}" />
                        {!!$errors->first('lp_id', '<label class="control-label"
                                                                 for="name">:message</label>')!!}
                    </div>
                </div>

            </div>
        </div>


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
                        {{ trans("admin/modal.edit") }}
                    @else
                        {{trans("admin/modal.create") }}
                    @endif
                </button>
            </div>
        </div>
    </form>
@stop
