@extends('layouts.app')
@section('content')  

<script>
var Data = <?php echo ($view); ?>;

$(document).ready(function () {


    $('#example').DataTable({
        data: Data,
        columns: [
            {title: "Id", data: "Id"},
            {title: "Name", data: "Name"},
            {title: "Offset", data: "Offset"},
//            {
//                "targets": -1,
//                title: "Actions",
//                "data": null,
//                "defaultContent": '<a  class="edit">Edit</a>/<a  class="delete">Delete</a>/<a class="view">View</a>'
//            }

        ]

    });
//    var table = $('#example').DataTable();
//    $('#example tbody').on('click', '.edit', function () {
//        var data = table.row($(this).parents('tr')).data();
//        // var data = jQuery.parseJSON(data);
//        //alert(data["Id"] + "'s salary is: " + data["Id"]);
//        window.location.href = '/edit/' + data['Id'];
//    });
//    $('#example tbody').on('click', '.delete', function () {
//        var data = table.row($(this).parents('tr')).data();
//        //var data = jQuery.parseJSON(data);
//        //alert(data["Id"] + "'s salary is: " + data["Id"]);
//        window.location.href = '/delete/' + data['Id'];
//    });
//    $('#example tbody').on('click', '.view', function () {
//        var data = table.row($(this).parents('tr')).data();
//        // alert(data["Id"] + "'s salary is: " + data["Id"]);
//        window.location.href = '/view/' + data['Id'];
//    });


});

</script>
<p class="login-box-msg">Time Zone</p>

<form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

    </table>

</form>   

@endsection