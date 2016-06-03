@extends('layouts.app')
@section('content')  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('../../extensions/Editor/css/editor.dataTables.min.css')}}">
<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('extensions/Editor/js/dataTables.editor.min.js')}}"></script>
<script>
var Data = <?php echo ($data); ?>;

$(document).ready(function () {


    $('#example').DataTable({
        data: Data,
        columns: [
            {title: "Id", data: "Id"},
            {title: "Name", data: "Name"},
            {title: "Offset", data: "Offset"},
            {
                "targets": -1,
                title: "Actions",
                "data": null,
                "defaultContent": '<a  class="edit glyphicon glyphicon-edit"></a>/ <a  class="delete glyphicon glyphicon-trash"></a> /<a class="view glyphicon glyphicon-eye-open"></a>'
            }

        ]

    });
    var table = $('#example').DataTable();
    $('#example tbody').on('click', '.edit', function () {
        var data = table.row($(this).parents('tr')).data();
        // var data = jQuery.parseJSON(data);
        //alert(data["Id"] + "'s salary is: " + data["Id"]);
        window.location.href = '/edit/' + data['Id'];
    });
    $('#example tbody').on('click', '.delete', function () {
        var data = table.row($(this).parents('tr')).data();
        //var data = jQuery.parseJSON(data);
        //alert(data["Id"] + "'s salary is: " + data["Id"]);
        window.location.href = '/delete/' + data['Id'];
    });
    $('#example tbody').on('click', '.view', function () {
        var data = table.row($(this).parents('tr')).data();
        // alert(data["Id"] + "'s salary is: " + data["Id"]);
        window.location.href = '/view/' + data['Id'];
    });


});

</script>
<p class="login-box-msg">Time Zone</p>

<form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

    </table>

</form>   

@endsection