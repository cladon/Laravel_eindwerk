@extends('admin.layouts.modal') {{-- Content --}} @section('content')

    <form id ="1" class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ URL::to('jaldoelen/'.$doelen->id.'/edit') }}" autocomplete="off">

        {{--  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ URL::to('jaldoelen/'. $doelen->id .'/edit')}}" autocomplete="off">--}}


        <h2>Updaten JAL-Doelen</h2>

        {{--code--}}
        <div class="form-group {{{ $errors->has('code') ? 'has-error' : '' }}}">

            <label class="col-md-1 control-label" for="code"> {{	trans("doelen.code") }}</label>

            <div class="col-md-10">
                <input class="form-control" type="text" name="code" id="code" disabled="disabled" value="{{{ Input::old('code', isset($doelen) ? $doelen->code : null) }}}" />

                {!!$errors->first('code', '<label class="control-label" for="code">:message</label>')!!}
            </div>
        </div>

        {{--competentie--}}
        <div class="form-group {{{ $errors->has('competentie') ? 'has-error' : '' }}}">

            <label class="col-md-1 control-label" for="competentie">{{trans("doelen.competentie") }}</label>

            <div class="col-md-10">
                <input class="form-control" type="text" name="competentie" id="competentie" disabled="disabled" value="{{{ Input::old('competentie', isset($doelen) ? $doelen->competentie : null) }}}" />

                {!!$errors->first('competentie', '<label class="control-label" for="competentie">:message</label>')!!}
            </div>
        </div>

        {{--leerplanid--}}
        <div class="form-group {{{ $errors->has('lp_id') ? 'has-error' : '' }}}">
            <div class="col-md-12">
                <label class="control-label" for="lp_id">{{trans("doelen.lpid") }}</label>
                <input class="form-control" type="hidden" name="lp_id" id="lp_id" value="{{{ Input::old('lp_id', isset($doelen) ? $doelen->lp_id : $id) }}}" />
                {!!$errors->first('lp_id', '<label class="control-label" for="lp_id">:message</label>')!!}
            </div>
        </div>

        <div class="container">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-waar">Waar</a></li>
                <li><a data-toggle="tab" href="#tab-hoe">Hoe</a></li>
                {{--<li><a data-toggle="tab" href="#tab-wie">Met wie</a></li>--}}
                <li><a data-toggle="tab" href="#tab-wanneer">Wanneer</a></li>
                <li><a data-toggle="tab" href="#tab-evaluatie">Evaluatie</a></li>
            </ul>

            <div class="tab-content">

                {{--TAB -> Waar--}}

                <div id="tab-waar" class="tab-pane fade in active">

                    {{--graad_J1--}}
                    <div class="form-group {{{ $errors->has('graad_j1') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="graad_j1"> {{	trans("site/doelen.grj1") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="graad_j1" id="graad_j1" value="{{{ Input::old('graad_j1', isset($doelen) ? $doelen->graad_j1 : null) }}}" />

                            {!!$errors->first('graad_j1', '<label class="control-label" for="graad_j1">:message</label>')!!}
                        </div>
                    </div>

                    {{--graad_J2--}}
                    <div class="form-group {{{ $errors->has('graad_j2') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="graad_j2"> {{	trans("site/doelen.grj2") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="graad_j2" id="graad_j2"  value="{{{ Input::old('graad_j2', isset($doelen) ? $doelen->graad_j2 : null) }}}" />

                            {!!$errors->first('graad_j2', '<label class="control-label" for="graad_j2">:message</label>')!!}
                        </div>
                    </div>

                    {{--intern project--}}
                    <div class="form-group {{{ $errors->has('waar_ip') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="waar_ip"> {{	trans("site/doelen.waarip") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="waar_ip" id="waar_ip"  value="{{{ Input::old('waar_ip', isset($doelen) ? $doelen->waar_ip : null) }}}" />

                            {!!$errors->first('waar_ip', '<label class="control-label" for="waar_ip">:message</label>')!!}
                        </div>
                    </div>

                    {{--extern project--}}
                    <div class="form-group {{{ $errors->has('waar_ep') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="waar_ep"> {{	trans("site/doelen.waarep") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="waar_ep" id="waar_ep"  value="{{{ Input::old('waar_ep', isset($doelen) ? $doelen->waar_ep : null) }}}" />

                            {!!$errors->first('waar_ep', '<label class="control-label" for="waar_ep">:message</label>')!!}
                        </div>
                    </div>
                </div>

                {{--TAB -> Hoe--}}

                <div id="tab-hoe" class="tab-pane fade">

                    {{--Observatieopdracht--}}
                    <div class="form-group {{{ $errors->has('hoe_ood') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="hoe_ood"> {{	trans("site/doelen.hoeood") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="hoe_ood" id="hoe_ood" value="{{{ Input::old('hoe_ood', isset($doelen) ? $doelen->hoe_ood : null) }}}" />

                            {!!$errors->first('hoe_ood', '<label class="control-label" for="hoe_ood">:message</label>')!!}
                        </div>
                    </div>

                    {{--Doeopdracht--}}
                    <div class="form-group {{{ $errors->has('hoe_doe') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="hoe_doe"> {{	trans("site/doelen.hoedoe") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="hoe_doe" id="hoe_doe"  value="{{{ Input::old('hoe_doe', isset($doelen) ? $doelen->hoe_doe : null) }}}" />

                            {!!$errors->first('hoe_doe', '<label class="control-label" for="hoe_doe">:message</label>')!!}
                        </div>
                    </div>

                    {{--Project--}}
                    <div class="form-group {{{ $errors->has('hoe_project') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="hoe_project"> {{	trans("site/doelen.hoeprj") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="hoe_project" id="hoe_project"  value="{{{ Input::old('hoe_project', isset($doelen) ? $doelen->hoe_project : null) }}}" />

                            {!!$errors->first('hoe_project', '<label class="control-label" for="hoe_project">:message</label>')!!}
                        </div>
                    </div>

                </div>

                {{--TAB -> wie--}}

                {{--<div id="tab-wie" class="tab-pane fade">--}}

                {{--PAV--}}
                {{--<div class="form-group {{{ $errors->has('wie_pav') ? 'has-error' : '' }}}">--}}

                {{--<label class="col-md-3 control-label" for="wie_pav"> {{	trans("site/doelen.wiepav") }}</label>--}}
                {{--<div class="col-md-6">--}}

                {{--<textarea class="form-control full-width wysihtml5" name="wie_pav"   value="wie_pav" rows="5">{{{ Input::old('wie_pav', isset($doelen) ? $doelen->wie_pav : null) }}}</textarea>--}}

                {{--{!!$errors->first('wie_pav', '<label class="control-label" for="wie_pav">:message</label>')!!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--zaco--}}
                {{--<div class="form-group {{{ $errors->has('wie_zaco') ? 'has-error' : '' }}}">--}}

                {{--<label class="col-md-3 control-label" for="wie_zaco"> {{	trans("site/doelen.wiezaco") }}</label>--}}
                {{--<div class="col-md-6">--}}

                {{--<textarea class="form-control full-width wysihtml5" name="wie_zaco"   value="wie_zaco" rows="5">{{{ Input::old('wie_zaco', isset($doelen) ? $doelen->wie_zaco : null) }}}</textarea>--}}

                {{--{!!$errors->first('wie_zaco', '<label class="control-label" for="wie_zaco">:message</label>')!!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--ned--}}
                {{--<div class="form-group {{{ $errors->has('wie_ned') ? 'has-error' : '' }}}">--}}

                {{--<label class="col-md-3 control-label" for="wie_ned"> {{	trans("site/doelen.wiened") }}</label>--}}
                {{--<div class="col-md-6">--}}

                {{--<textarea class="form-control full-width wysihtml5" name="wie_ned"   value="wie_ned" rows="5">{{{ Input::old('wie_ned', isset($doelen) ? $doelen->wie_ned : null) }}}</textarea>--}}

                {{--{!!$errors->first('wie_ned', '<label class="control-label" for="wie_ned">:message</label>')!!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--mavo--}}
                {{--<div class="form-group {{{ $errors->has('wie_mavo') ? 'has-error' : '' }}}">--}}

                {{--<label class="col-md-3 control-label" for="wie_mavo"> {{	trans("site/doelen.wiemavo") }}</label>--}}
                {{--<div class="col-md-6">--}}

                {{--<textarea class="form-control full-width wysihtml5" name="wie_mavo"   value="wie_mavo" rows="5">{{{ Input::old('wie_mavo', isset($doelen) ? $doelen->wie_mavo : null) }}}</textarea>--}}

                {{--{!!$errors->first('wie_mavo', '<label class="control-label" for="wie_mavo">:message</label>')!!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--wisk--}}
                {{--<div class="form-group {{{ $errors->has('wiewisk') ? 'has-error' : '' }}}">--}}

                {{--<label class="col-md-3 control-label" for="wie_wisk"> {{	trans("site/doelen.wiewisk") }}</label>--}}
                {{--<div class="col-md-6">--}}

                {{--<textarea class="form-control full-width wysihtml5" name="wie_wisk"   value="wie_wisk" rows="5">{{{ Input::old('wie_wisk', isset($doelen) ? $doelen->wie_wisk : null) }}}</textarea>--}}

                {{--{!!$errors->first('wie_wisk', '<label class="control-label" for="wie_wisk">:message</label>')!!}--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--LO--}}
                {{--<div class="form-group {{{ $errors->has('wie_lo') ? 'has-error' : '' }}}">--}}

                {{--<label class="col-md-3 control-label" for="wie_lo"> {{	trans("site/doelen.wielo") }}</label>--}}
                {{--<div class="col-md-6">--}}

                {{--<textarea class="form-control full-width wysihtml5" name="wie_lo"   value="wie_lo" rows="5">{{{ Input::old('wie_lo', isset($doelen) ? $doelen->wie_lo : null) }}}</textarea>--}}

                {{--{!!$errors->first('wie_lo', '<label class="control-label" for="wie_lo">:message</label>')!!}--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--TAB -> wanneer--}}
                <div id="tab-wanneer" class="tab-pane fade">

                    {{--Voorzien moment--}}
                    <div class="form-group {{{ $errors->has('wanneer_vm') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="wanneer_vm"> {{	trans("site/doelen.wanneervm") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="date" name="wanneer_vm" id="wanneer_vm" value="{{{ Input::old('wanneer_vm', isset($doelen) ? $doelen->wanneer_vm : null) }}}" />

                            {!!$errors->first('wanneer_vm', '<label class="control-label" for="wanneer_vm">:message</label>')!!}
                        </div>
                    </div>
                    {{--Werkelijk moment--}}
                    <div class="form-group {{{ $errors->has('wanneer_wm') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="wanneer_wm"> {{	trans("site/doelen.wanneerwm") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="date" name="wanneer_wm" id="wanneer_wm" value="{{{ Input::old('wanneer_wm', isset($doelen) ? $doelen->wanneer_wm : null) }}}" />

                            {!!$errors->first('wanneer_wm', '<label class="control-label" for="wanneer_wm">:message</label>')!!}
                        </div>
                    </div>
                </div>

                {{--TAB -> evaluatie--}}
                <div id="tab-evaluatie" class="tab-pane fade">

                    {{--evaluatie instrument--}}
                    <div class="form-group {{{ $errors->has('eva_instru') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="eva_instru"> {{	trans("site/doelen.evainstru") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="text" name="eva_instru" id="eva_instru" value="{{{ Input::old('eva_instru', isset($doelen) ? $doelen->eva_instru : null) }}}" />

                            {!!$errors->first('eva_instru', '<label class="control-label" for="eva_instru">:message</label>')!!}
                        </div>
                    </div>

                    {{--evaluatiedatum--}}
                    <div class="form-group {{{ $errors->has('eva_dat') ? 'has-error' : '' }}}">

                        <label class="col-md-2 control-label" for="eva_dat"> {{	trans("site/doelen.evadat") }}</label>

                        <div class="col-md-9">
                            <input class="form-control" type="date" name="eva_dat" id="eva_dat" value="{{{ Input::old('eva_dat', isset($doelen) ? $doelen->eva_dat : null) }}}" />

                            {!!$errors->first('eva_dat', '<label class="control-label" for="eva_dat">:message</label>')!!}
                        </div>
                    </div>

                </div>
            </div>


             {{--Actie knoppen--}}
            <div class="form-group">
                <div class="col-md-12">
                    <button type="reset" class="btn btn-sm btn-warning close_popup">
                        <span class="glyphicon glyphicon-ban-circle"></span> {{trans("site/modal.cancel") }} </button>
                    <button type="reset" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-remove-circle"></span> {{trans("site/modal.reset") }} </button>
                    <button type="submit" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-ok-circle"></span>  {{ trans("site/modal.edit") }} </button>
                </div>
            </div>

        </div>
    </form>
@endsection
@stop
