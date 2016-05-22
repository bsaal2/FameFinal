@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid" style="height: 1000px;">
              <div class="row">
               <div class="col-md-5 col-lg-5">
                 <h1 class="text-primary">Our Partners</h1>
                 <hr/>

                 <form role="form" action="{{url('/handlepartner')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                     <label>Content</label>
                     <textarea class="form-control" name="content" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                     <label>File input</label>
                     <input type="file" name="file" required>
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
                      <a href="{{url('/adminpartner')}}" class="alert-link">Create</a>
                    </div>
                    <div class="alert alert-warning" role="alert">
                      <a href="{{url('/adminpartnerview')}}" class="alert-link">View</a>
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
