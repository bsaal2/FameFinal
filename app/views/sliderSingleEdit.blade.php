@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
               <div class="col-md-5 col-lg-5">
                 <h1 class="text-primary">Slider</h1>
                 <hr />

                 <form role="form" action="{{url('/editSlider/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                     <label>Heading</label>
                     <input class="form-control" name="heading" value="{{$slider->heading}}" placeholder="Enter heading" required>
                    </div>
                    <div class="form-group">
                     <label>Content</label>
                     <textarea class="form-control" name="content" rows="3" required>{{$slider->content}}</textarea>
                    </div>
                    <div class="form-group">
                     <label>File input</label>
                     <input type="file" name="file">
                     <p class="help-block">{{$slider->file}}</p>
                    </div>
                    <button type="submit" class="btn btn-default">Update</button
                 </form>
               </div>

               <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('adminslider')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('adminsliderview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

              </div>
            <!--============ End of row ===================-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
