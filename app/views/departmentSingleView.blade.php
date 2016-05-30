@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
             <div class="row">
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <table class="table table-bordered table-responsive">
                 <thead>
                   <tr class="active">
                     <th>id</th>
                     <th>Name</th>
                     <th>College</th>
                     <th>Phone No</th>
                     <th>Email</th>
                     <th>File</th>
                     <th>Department</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                   </tr>
                 </thead>
                 <tbody>
                    <tr>
                      <td>{{$depart->id}}</td>
                      <td>{{$depart->name}}</td>
                      <td>{{$depart->college}}</td>
                      <td>{{$depart->phoneno}}</td>
                      <td>{{$depart->email}}</td>
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$depart->file}}" /></td>
                      <td>{{$depart->department}}</td>
                      <td>{{$depart->created_at}}</td>
                      <td>{{$depart->updated_at}}</td>
                    </tr>
                 </tbody>
                </table>
              </div>

              <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation" class="active"><a href="{{url('admindepartment')}}"><i class="fa fa-plus"></i> New</a></li>
                  <li role="presentation" class="active"><a href="{{url('admindepartmentview')}}">View</a></li>
                </ul>
             </div> <!-- ======== End of column =================== -->

            </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
