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
                     <th>Position</th>
                     <th>Title</th>
                     <th>File</th>
                     <th>Content</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                     <th>View</th>
                     <th>Delete</th>
                     <th>Edit</th>
                   </tr>
                 </thead>
                 <tbody>
                   @forelse ($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->position}}</td>
                      <td>{{$user->title}}</td>
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$user->file}}" /></td>
                      <td>{{$user->content}}</td>
                      <td>{{$user->created_at}}</td>
                      <td>{{$user->updated_at}}</td>
                      <td class="text-center"><a href="{{URL::to('admintestimonialsingleview/'.$user->id)}}"><i class="fa fa-eye"></i></a></td>
                      <td class="text-center"><a href="{{URL::to('admintestimonialsingledelete/'.$user->id)}}"><i class="fa fa-trash"></i></a></td>
                      <td class="text-center"><a href="{{URL::to('admintestimonialsingleedit/'.$user->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                    </tr>
                    @empty
                      <h2 class="text-primary">Empty Data</h2>
                    @endforelse
                 </tbody>
                </table>
              </div>


              <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('admintestimonial')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('admintestimonialview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
