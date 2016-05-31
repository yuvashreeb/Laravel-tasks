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
   
var editor;
//    $('#example').DataTable({
//        data: Data,
//        columns: [
//            {title: "Id", data: "Id"},
//            {title: "Name", data: "Name"},
//            {title: "Offset", data: "Offset"}
//
//
//
//        ]
//
//    });
//    var table = $('#example').DataTable();
//                $('#example tbody').on('click', 'tr', function () {
//                    var info = table.row(this).data();
//                  
//              //   view(info);
//                    
//                });
//
//});
//               function view(info){     
//                $.ajaxSetup({
//        headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//        }});
//   
//        $.ajax({
//              url:'view',
//              type:'post',
//            data: {info: info},
//            success:function(text)
//            {
//  
//      alert("success");
//            }
//    });
//               }

    $('#example').on('click', 'a.editor_edit', function (e) {
            e.preventDefault();
     
            editor.edit( $(this).closest('tr'), {
                title: 'Edit record',
                buttons: 'Update'
            } );
        } );
    $('#example').on('click', 'a.editor_remove', function (e) {
            e.preventDefault();
     
            editor.remove( $(this).closest('tr'), {
                title: 'Delete record',
                message: 'Are you sure you wish to remove this record?',
                buttons: 'Delete'
            } );
        } );
    $('#example').DataTable( {
         "scrollX": "300px",
           data:Data,
        
            columns: [
               
                { title:"Id",data: "Id" },
                { title:"Name",data: "Name" },
               
                { title:"Offset",data: "Offset", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) },
                //{title:'Time',data:'Time'},   
            {title:"Edit/Delete",
                    data: null,
                    className: "center",
                    defaultContent: '<a href="" class="editor_edit">Edit</a> / <a href="" class="editor_remove">Delete</a>'
                }
            ]
        } );
        
                         editor = new $.fn.dataTable.Editor( {
          data:Data,
            "table": "#example",
            "fields": [ {
                    "label": "Id",
                    "name": "Id"
                }, {
                    "label": "Name",
                    "name": "Name"
                }, {
                    "label": "Offset",
                    "name": "Offset"
                }
//                ,{
//                    "label": "Time",
//                    "name": "Time"
//                }
//                
            ]
        } );
           
});

        </script>


   
                <p class="login-box-msg">Time Zone</p>

                <form class="form-group"  id="UserProfile" method="post" enctype="multipart/form-data" >
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                     
                    </table>
                    
                </form>   

@endsection