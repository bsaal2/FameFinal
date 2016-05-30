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
                     <th>Caption</th>
                     <th>Album</th>
                     <th>Image</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                     <th>View</th>
                     <th>Delete</th>
                     <th>Edit</th>
                   </tr>
                 </thead>
                 <tbody>
                   @forelse ($image as $image)
                    <tr>
                      <td>{{$image->id}}</td>
                      <td>{{$image->caption}}</td>
                      <td>{{$image->album}}</td>
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$image->file}}" /></td>
                      <td>{{$image->created_at}}</td>
                      <td>{{$image->updated_at}}</td>
                      <td class="text-center"><a href="{{URL::to('adminimagesingleview/'.$image->id)}}"><i class="fa fa-eye"></i></a></td>
                      <td class="text-center"><a href="{{URL::to('adminimagesingledelete/'.$image->id)}}"><i class="fa fa-trash"></i></a></td>
                      <td class="text-center"><a href="{{URL::to('adminimagesingleedit/'.$image->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                    </tr>
                    @empty
                      <h2 class="text-primary">Empty Data</h2>
                    @endforelse
                 </tbody>
                </table>
              </div>

              <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                <ul class="nav nav-pills nav-stacked sidebar">
                  <li role="presentation" class="active"><a href="{{url('adminimage')}}"><i class="fa fa-plus"></i> New</a></li>
                  <li role="presentation" class="active"><a href="{{url('adminimageview')}}">View</a></li>
                </ul>
             </div> <!-- ======== End of column =================== -->

            </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
