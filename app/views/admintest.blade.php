@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
               <div class="col-md-5 col-lg-5">
                 <h1 class="text-primary">Test Preparation</h1>
                 <hr />
                 @if(Session::has('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                    </div>
                  @endif
                 <form role="form" action="{{url('/handleTest')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                     <label>Heading</label>
                     <input type="text" class="form-control" name="heading" placeholder="Enter heading" required>
                    </div>
                    <div class="form-group">
                     <label>Title</label>
                     <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                     <label>Content Up</label>
                     <textarea class="form-control" name="contentup" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                     <label>Content Down</label>
                     <textarea class="form-control" name="contentdown" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                     <label>File input</label>
                     <input type="file" name="file" required>
                     <p class="help-block">Choose the file</p>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button
                 </form>
               </div>

               <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('admintest')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('admintestview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

              </div>
            <!--============ End of row ===================-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
