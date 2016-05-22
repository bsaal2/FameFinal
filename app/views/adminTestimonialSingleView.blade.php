@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid" style="height: 1000px;">
              <div class="col-md-8 col-lg-8">
                <table class="table table-bordered">
                 <thead>
                   <tr class="active">
                     <th>id</th>
                     <th>Name</th>
                     <th>Position</th>
                     <th>Title</th>
                     <th>File</th>
                     <th>Content</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                   </tr>
                 </thead>
                 <tbody>
                    <tr>
                      <td>{{$users->id}}</td>
                      <td>{{$users->name}}</td>
                      <td>{{$users->position}}</td>
                      <td>{{$users->title}}</td>
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$users->file}}" /></td>
                      <td>{{$users->content}}</td>
                      <td>{{$users->created_at}}</td>
                      <td>{{$users->updated_at}}</td>
                    </tr>
                 </tbody>
                </table>
              </div>


              <div class="col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                <div class="panel panel-primary">
                 <div class="panel-heading">
                   <h3 class="panel-title">Menu</h3>
                 </div>
                 <div class="panel-body">
                   <div class="alert alert-warning" role="alert">
                     <a href="{{url('/admintestimonial')}}" class="alert-link">Create</a>
                   </div>
                   <div class="alert alert-warning" role="alert">
                     <a href="{{url('/admintestimonialview')}}" class="alert-link">View</a>
                   </div>
                 </div>
               </div>
             </div> <!-- ======== End of column =================== -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop