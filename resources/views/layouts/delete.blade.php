@extends('layouts.app')
@section('content')  
<section class='content'>
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

});

</script>
<p class="login-box-msg">Time Zone</p>

<form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

    </table>

</form>   

@endsection
</section>