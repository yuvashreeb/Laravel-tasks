@extends('layouts.app')
@section('content')  
<link rel="stylesheet" href="{{asset('/extensions/Editor/css/editor.dataTables.min.css')}}">
        <link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
       <script src="{{asset('/js/jquery-2.2.2.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="{{asset('/extensions/Editor/js/dataTables.editor.min.js')}}"></script>
      
                            <div class="box box-success">
                                <div class="box-header">
                                    <i class="glyphicon glyphicon-home"></i>

                                    <h3 class="box-title">Address</h3>

                                    <!-- Map Container -->

                                </div>
                                <div class="box-body chat" id="chat-box">

                                    <button class="btn btn-info btn-sm" onclick="getLocation()">User Location</button>

                                    <p id="demo"></p>





                                    <div class="box-body">
                                        <div id="googleMap" style="height:380px;"></div>
                                    </div>
                                    <!-- /.chat -->
                                    <div class="box-footer">

                                    </div>
                                </div>
                            </div>

                            <!-- Chat box -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <i class="fa fa-comments-o"></i>

                                    <h3 class="box-title">Log Details</h3>


                                </div>
                              
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0">
                                    </table>

                            

                                
                            </div>
        
       
        <script>
       var Data = <?php echo ($logs); ?>;

       $(document).ready(function () {
           $('#example').DataTable({
           
            
               data: Data,
               columns: [
                   {title: "UserAgent", data: "UserAgent"},
                   {title: "IpAddress", data: "IpAddress"},
                   {title: "BrowserName", data: "BrowserName"},
                   {title: "Version", data: "Version"},
                   {title: "Last Logged ", data: "updated_at"},
                   {title: "Platform", data: "Platform"},
               ]

           });
           var table = $('#example').DataTable();

       });
        </script>
    @endsection
