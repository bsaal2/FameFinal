@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid" style="height: 1000px;">
              <div class="col-md-8 col-lg-8">
                <table class="table table-bordered">
                 <thead>
                   <tr class="active">
                     <th>id</th>
                     <th>Heading</th>
                     <th>Content</th>
                     <th>Image</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                     <th>View</th>
                     <th>Delete</th>
                     <th>Edit</th>
                   </tr>
                 </thead>
                 <tbody>
                   @forelse ($service as $service)
                    <tr>
                      <td>{{$service->id}}</td>
                      <td>{{$service->heading}}</td>
                      <td>{{$service->content}}</td>
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame/fame/app/uploaded/'.$service->file}}" /></td>
                      <td>{{$service->created_at}}</td>
                      <td>{{$service->updated_at}}</td>
                      <td><a href="{{URL::to('adminservicesingleview/'.$service->id)}}"><i class="fa fa-eye"></i></a></td>
                      <td><a href="{{URL::to('adminservicesingledelete/'.$service->id)}}"><i class="fa fa-trash"></i></a></td>
                      <td><a href="{{URL::to('adminservicesingleedit/'.$service->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                    </tr>
                    @empty
                      <h2 class="text-primary">Empty Data</h2>
                    @endforelse
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
                     <a href="{{url('/adminservice')}}" class="alert-link">Create</a>
                   </div>
                   <div class="alert alert-warning" role="alert">
                     <a href="{{url('/adminserviceview')}}" class="alert-link">View</a>
                   </div>
                 </div>
               </div>
             </div> <!-- ======== End of column =================== -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
