@extends('layouts.default')

{{-- Web site Title --}}
@section('title') {{{ trans("site/doelen.doel") }}} :: @parent
@stop

{{-- Content --}}
@section('main')


    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>

            <th>{{{ trans("site/doelen.code") }}}</th>
            <th>{{{ trans("site/doelen.competentie") }}}</th>

            <th>{{{ trans("site/admin.action") }}}</th>
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



                "ajax": "{{ URL::to('/jaldoelen/data/'. $id) }}",
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
