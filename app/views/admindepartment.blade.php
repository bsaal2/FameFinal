@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
             <div class="row">

               <div class="col-lg-5">
                 <h1 class="text-primary">Our Department</h1>
                 <hr />
                 @if(Session::has('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                    </div>
                  @endif
                 <form role="form" action={{url('/handleDepartment')}} method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                   </div>
                   <div class="form-group">
                    <label>College</label>
                    <input type="text" class="form-control" name="college" placeholder="Enter College" required>
                   </div>
                   <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="phoneno" placeholder="Enter Phone No." required>
                   </div>
                   <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                   </div>
                   <div class="form-group">
                    <label>Department</label>
                    <select class="form-control" name="department">
                      <option>--select--</option>
                      <option value="physics">Physics</option>
                      <option value="chemistry">Chemistry</option>
                      <option value="botany">Botany</option>
                      <option value="zoology">Zoology</option>
                      <option value="maths">Maths</option>
                      <option value="english">English</option>
                      <option value="aptitute">Engineering Aptitute</option>
                      <option value="medical">Medical</option>
                      <option value="accountancy">Accountancy</option>
                      <option value="economics">Economics</option>
                      <option value="bussiness">Bussiness Studies</option>
                      <option value="bba">BBA</option>
                    </select>
                   </div>
                   <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="file" required>
                    <p class="help-block">Note:The image of 120*132 is preferable</p>
                   </div>
                   <button type="submit" class="btn btn-default">Submit</button>
                 </form>

               </div>

               <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
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
