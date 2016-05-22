@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid" style="height: 1000px;">
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

               <div class="col-lg-3 col-lg-offset-2">
                 <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                  </div>
                  <div class="panel-body">
                    <div class="alert alert-warning" role="alert">
                      <a href="{{url('/adminslider')}}" class="alert-link">Create</a>
                    </div>
                    <div class="alert alert-warning" role="alert">
                      <a href="{{url('/adminsliderview')}}" class="alert-link">View</a>
                    </div>
                  </div>
                </div>
              </div> <!-- ======== End of column =================== -->

              </div>
            <!--============ End of row ===================-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
