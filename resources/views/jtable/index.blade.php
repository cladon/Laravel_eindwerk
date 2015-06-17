@extends('layouts.sidenav')
<html>
<head>

    {{--<link href="{{asset('assets/site/css/jquery-ui.min.css" rel="stylesheet" type="text/css')}}" />--}}
    {{--<link href="{{asset('assets/jtable/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css')}}" />--}}

    <link href="{{asset('assets/site/jtable/themes/redmond/jquery-ui-1.8.16.custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/site/jtable/Scripts/jtable/themes/lightcolor/blue/jtable.css')}}" rel="stylesheet" type="text/css" />


</head>


<body>
<div id="tabel1" style="width: 600px;"></div>

{{--  Uncaught TypeError: $(...).jtable is not a function --}}


<script src="{{asset('assets/site/jtable/scripts/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/site/jtable/scripts/jquery-ui-1.8.16.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/site/jtable/Scripts/jtable/jquery.jtable.js')}}" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function () {

        //Prepare jTable
        $('#tabel1').jtable({
            title: 'Overzicht leerplannen',
            ajaxSettings: {
                type: 'GET',
                dataType: 'json'
            },
            actions: {
                listAction: '/jtable/data',
                updateAction: ''
            },
            fields: {
                id: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                leerplannummer: {
                    title: 'leerplannummer',
                    width: '40%'
                },
                ingang: {
                    title: 'ingang',
                    width: '20%'
                },
                created_at: {
                    title: 'created_at',
                    width: '20%'
                },
                updated_at: {
                    title: 'updated_at',
                    width: '20%'
                }

            }
        });

        //Load person list from server
        $('#tabel1').jtable('load');

    });

</script>



</body>
</html>

</html>