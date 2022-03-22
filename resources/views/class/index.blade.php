@extends('adminlte::page')

@section('title', 'Class')

@section('content_header')
    <h1>Class</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-primary" onclick="reloadTable()" >Reload</button>
        </div>
        <div class="card-body">
          <table id="classes" class="table table-bordered table-hover" width="100%">
            <thead>
              <tr>
                <th>Subject</th>
                <th>Title</th>
                <th>Section</th>
                <th>Class Number</th>
                <th>Type</th>
                <th>Unit</th>
                <th>Instructor</th>
                <th>Building</th>
                <th>Day(s)</th>
                <th>Time</th>
                <th>Capacity</th>
                <th>Textbook</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>

      </div>
   </div>
</div>

@stop

@section('css')

@stop

@section('js')
    <script>
    var table;
    $(document).ready(function() {
        table = $('#classes').DataTable( {
            "ajax": "https://youli.academic.csusb.edu/class/public/class-index-data",
            "processing": true,
            "columns": [
                { "data":"course.subject" },
                { "data":"course.title" },
                { "data":"section" },
                { "data":"class_number" },
                { "data":"type" },
                { "data":"unit" },
                { "data": null,
                  render: function (data, type, row) {
                      return data.instructor.fname+' '+data.instructor.lname;
                  },
                },
                { "data":"room.building" },
                { "data":"days" },
                { "data":null,
                  render: function (data, type, row) {
                      return data.start_time+'-'+data.end_time;
                  },
                },
                { "data":"capacity" },
                { "data":null,
                  render: function (data, type, row) {
                    if(data.textbooks.length>0) {
                      var output="";
                      for(var i=0;i<data.textbooks.length;i++){
                        output+='<li>'+data.textbooks[i].title+'</li>';
                      }
                      return output;
                    } else {
                      return 'N/A';
                    }
                  },
                },
            ]
        } );
    } );

    function reloadTable() {
      table.ajax.reload();
    }
    </script>
@stop
