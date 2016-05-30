@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
             <div class="row">

               <div class="col-lg-5">
                 <h1 class="text-primary">Services</h1>
                 <hr />
                 <form role="form" action={{url('/editService/'.$service->id)}} method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Service Heading</label>
                    <input class="form-control" name="heading" value="{{$service->heading}}" placeholder="Enter heading" required>
                   </div>
                   <div class="form-group">
                    <label>Service Content</label>
                    <textarea class="form-control" name="content" rows="3" required>{{$service->content}}</textarea>
                   </div>
                   <div class="form-group">
                    <label>Service Image</label>
                    <input type="file" name="file" required>
                    <p class="help-block">{{$service->file}}</p>
                   </div>
                   <button type="submit" class="btn btn-default">Submit</button>
                 </form>

               </div>

               <div class="col-xs-2 col-xs-offset-3 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3 col-lg-2 col-lg-offset-3">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('adminservice')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('adminserviceview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

             </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
