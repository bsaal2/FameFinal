@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
             <div class="row">

               <div class="col-lg-5">
                 <h1 class="text-primary">About Us</h1>
                 <hr />
                 <form role="form" action="{{url('/editAbout/'.$about->id)}}" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>History</label>
                    <textarea class="form-control" name="history" rows="3" required>{{$about->history}}</textarea>
                   </div>
                   <div class="form-group">
                    <label>Mission</label>
                    <textarea class="form-control" name="mission" rows="3" required>{{$about->mission}}</textarea>
                   </div>
                   <div class="form-group">
                    <label>History Image</label>
                    <input type="file" name="file" required>
                    <p class="help-block">{{$about->file}}</p>
                   </div>
                   <button type="submit" class="btn btn-default">Submit</button>
                 </form>

               </div>

               <div class="col-xs-2 col-xs-offset-3 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3 col-lg-2 col-lg-offset-3">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('adminaboutus')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('adminaboutview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

             </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
