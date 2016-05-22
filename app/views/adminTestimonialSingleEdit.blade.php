@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid" style="height: 1000px;">
             <div class="row">

               <div class="col-lg-5">
          <!--
                 <div class="well well-sm">
                  <strong></strong>
                 </div>
-->
                 <h1 class="text-primary">Testimonials</h1>
                 <hr />
                 <form role="form" action="{{url('/editTestimonial/'.$users->id)}}" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="fullname" placeholder="Enter Name" value="{{$users->name}}" required>
                   </div>
                   <div class="form-group">
                    <label>Position</label>
                    <input class="form-control" name="position" placeholder="Enter Position" value="{{$users->position}}" required>
                   </div>
                   <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" name="title" placeholder="Enter title" value="{{$users->title}}" required>
                   </div>
                   <div class="form-group">
                    <label>File input</label>
                    <input type="file" name="file">
                    <p class="help-block">{{$users->file}}</p>
                   </div>
                   <div class="form-group">
                    <label>Text area</label>
                    <textarea class="form-control" name="content" rows="3" required>{{$users->content}}</textarea>
                   </div>
                   <button type="submit" class="btn btn-default">Update</button>
                 </form>

               </div>

               <div class="col-lg-3 col-lg-offset-2">
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
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
