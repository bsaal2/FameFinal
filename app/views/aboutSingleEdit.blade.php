@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid" style="height: 1000px;">
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

               <div class="col-lg-3 col-lg-offset-2">
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
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
