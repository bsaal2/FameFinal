@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
             <div class="row">

               <div class="col-lg-5">
                 <h1 class="text-primary">Our Department</h1>
                 <hr />
                 <form role="form" action={{url('/editDepartment/'.$depart->id)}} method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$depart->name}}" placeholder="Enter Name" required>
                   </div>
                   <div class="form-group">
                    <label>College</label>
                    <input type="text" class="form-control" name="college" value="{{$depart->college}}" placeholder="Enter College" required>
                   </div>
                   <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="phoneno" value="{{$depart->phoneno}}" placeholder="Enter Phone No." required>
                   </div>
                   <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$depart->email}}" placeholder="Enter Email" required>
                   </div>
                   <div class="form-group">
                    <label>Department</label>
                    <input type="text" class="form-control" name="department" value="{{$depart->department}}" placeholder="Enter Department" required>
                   </div>
                   <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="file" required>
                    <p class="help-block">{{$depart->file}}</p>
                   </div>
                   <button type="submit" class="btn btn-default">Submit</button>
                 </form>

               </div>

               <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked">
                   <li role="presentation" class="active"><a href="{{url('admindepartment')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('admindepartmentview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

             </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
