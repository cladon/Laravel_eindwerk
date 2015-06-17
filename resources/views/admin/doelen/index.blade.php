@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {{{ trans("admin/doelen.leerplan") }}} :: @parent
@stop

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {{{ trans("admin/doelen.doel") }}}
            {{--{{var_dump($id)}}--}}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{{ URL::to('admin/doelen/create/'. $id) }}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span>
                        {{trans("admin/modal.new") }}</a>
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>

            <th>{{{ trans("admin/doelen.code") }}}</th>
            <th>{{{ trans("admin/doelen.competentie") }}}</th>

            <th>{{{ trans("admin/admin.action") }}}</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@stop


{{--{{dd($id)}}--}}

 Scripts
@section('scripts')
    @parent
    <script type="text/javascript">
        var oTable;
        $(document).ready(function () {
            oTable = $('#table').DataTable({
                "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "sPaginationType": "bootstrap",
                "processing": true,
                "serverSide": true,
                "ajax": "{{ URL::to('admin/doelen/data/'. $id) }}",
                "fnDrawCallback": function (oSettings) {
                    $(".iframe").colorbox({
                        iframe: true,
                        width: "80%",
                        height: "80%",
                        onClosed: function () {
                            window.location.reload();
                        }
                    });
                }
            });
        });
    </script>
@stop
