@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
              <div class="col-md-8 col-lg-8">
                <table class="table table-bordered">
                 <thead>
                   <tr class="active">
                     <th>id</th>
                     <th>Heading</th>
                     <th>Content</th>
                     <th>file</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                     <th>View</th>
                     <th>Delete</th>
                     <th>Edit</th>
                   </tr>
                   @if(Session::has('success'))
                   <tr>
                     <td colspan="9">
                       <div class="alert alert-success">
                      {{Session::get('success')}}
                       </div>
                    </td>
                   </tr>
                   @endif
                 </thead>
                 <tbody>
                   @forelse ($slider as $slider)
                    <tr>
                      <td>{{$slider->id}}</td>
                      <td>{{$slider->heading}}</td>
                      <td>{{$slider->content}}</td>
                      <td><img class="img-thumbnail" src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$slider->file}}" /></td>
                      <td>{{$slider->created_at}}</td>
                      <td>{{$slider->updated_at}}</td>
                      <td class="text-center"><a href="{{URL::to('adminslidersingleview/'.$slider->id)}}"><i class="fa fa-eye"></i></a></td>
                      <td class="text-center"><a href="{{URL::to('adminslidersingledelete/'.$slider->id)}}"><i class="fa fa-trash"></i></a></td>
                      <td class="text-center"><a href="{{URL::to('adminslidersingleedit/'.$slider->id)}}"><i class="fa fa-pencil-square"></i></a></td>
                    </tr>
                    @empty
                      <h2 class="text-primary">Empty Data</h2>
                    @endforelse
                 </tbody>
                </table>
              </div>


              <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('adminslider')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('adminsliderview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
