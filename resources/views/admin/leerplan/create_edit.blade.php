@extends('admin.layouts.modal') {{-- Content --}} @section('content')
    <!-- Tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-general" data-toggle="tab"> {{
			trans("admin/modal.general") }}</a></li>
    </ul>
    <!-- ./ tabs -->
    <form class="form-horizontal" enctype="multipart/form-data"
          method="post"
          action="@if(isset($leerplan)){{ URL::to('admin/leerplan/'.$leerplan->id.'/edit') }}
	        @else{{ URL::to('admin/leerplan/create') }}@endif"
          autocomplete="off">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
                {{-- code --}}
                <div class="form-group {{{ $errors->has('leerplannummer') ? 'has-error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="leerplannummer"> {{
						trans("admin/modal.title") }}</label> <input
                                class="form-control" type="text" name="leerplannummer" id="leerplannummer"
                                value="{{{ Input::old('leerplannummer', isset($leerplan) ? $leerplan->leerplannummer : null) }}}" />
                        {!!$errors->first('leerplannummer', '<label class="control-label" for="name">:message</label>')!!}
                    </div>
                </div>

                {{-- omsch --}}
                <div class="form-group {{{ $errors->has('ingang') ? 'has-error' : '' }}}">
                    <div class="col-md-12">
                        <label class="control-label" for="ingang">{{
						trans("admin/leerplan.ingang") }}</label> <input
                                class="form-control" type="text" name="ingang" id="ingang"
                                value="{{{ Input::old('ingang', isset($leerplan) ? $leerplan->ingang : null) }}}" />
                        {!!$errors->first('ingang', '<label class="control-label"
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
                    @if (isset($leerplan))
                        {{ trans("admin/modal.edit") }}
                    @else
                        {{trans("admin/modal.create") }}
                    @endif
                </button>
            </div>
        </div>
    </form>
@stop
