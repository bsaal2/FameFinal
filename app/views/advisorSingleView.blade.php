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
                     <th>Work</th>
                     <th>Personal Overview</th>
                     <th>Advisor Image</th>
                     <th>Content</th>
                     <th>Phone No.</th>
                     <th>Email</th>
                     <th>Facebook Link</th>
                     <th>Twitter Link</th>
                     <th>GooglePlus Link</th>
                     <th>LinkedIn Link</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                   </tr>
                 </thead>
                 <tbody>
                    <tr>
                      <td>{{$advisor->id}}</td>
                      <td>{{$advisor->name}}</td>
                      <td>{{$advisor->work}}</td>
                      <td>{{$advisor->overview}}</td>
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$advisor->file}}" /></td>
                      <td>{{$advisor->content}}</td>
                      <td>{{$advisor->phone}}</td>
                      <td>{{$advisor->email}}</td>
                      <td>{{$advisor->facebooklink}}</td>
                      <td>{{$advisor->twitterlink}}</td>
                      <td>{{$advisor->googlepluslink}}</td>
                      <td>{{$advisor->linkedinlink}}</td>
                      <td>{{$advisor->created_at}}</td>
                      <td>{{$advisor->updated_at}}</td>
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
                     <a href="{{url('/adminaboutus')}}" class="alert-link">Create</a>
                   </div>
                   <div class="alert alert-warning" role="alert">
                     <a href="{{url('/adminaboutview')}}" class="alert-link">View</a>
                   </div>
                 </div>
               </div>
             </div> <!-- ======== End of column =================== -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop