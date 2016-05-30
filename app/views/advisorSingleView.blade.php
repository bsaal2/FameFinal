@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
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
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$advisor->file}}" /></td>
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


              <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('adminaboutus')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('adminaboutview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
