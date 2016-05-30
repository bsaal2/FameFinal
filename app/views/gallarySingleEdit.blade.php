@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
               <div class="col-md-5 col-lg-5">
                 <h1 class="text-primary">Add Album</h1>
                 <hr />
                 <form role="form" action="{{url('/editGallary/'.$gallary->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                     <label>Album Name</label>
                     <input type="text" class="form-control" name="name" value="{{$gallary->name}}" placeholder="Enter Album Name" required>
                    </div>
                    <div class="form-group">
                     <label>Cover Photo</label>
                     <input type="file" name="file" required>
                     <p class="help-block">{{$gallary->file}}</p>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button
                 </form>
               </div>

               <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('admingallary')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('admingallaryview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

              </div>
            <!--============ End of row ===================-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
