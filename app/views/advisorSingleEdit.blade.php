@extends('adminlayout')
@section('admincontent')

<div id="page-wrapper">

            <div class="container-fluid">
             <div class="row">

               <div class="col-lg-5">
                 <h1 class="text-primary">Advisor</h1>
                 <hr />
                 <form role="form" action="{{url('/editAdvisor/'.$advisor->id)}}" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="fullname" value="{{$advisor->name}}" placeholder="Enter Name" required>
                   </div>
                   <div class="form-group">
                    <label>Work</label>
                    <input class="form-control" name="work" value="{{$advisor->work}}" placeholder="Enter Work Details" required>
                   </div>
                   <div class="form-group">
                    <label>Personal Overview</label>
                    <textarea class="form-control" name="overview" rows="3" required>{{$advisor->overview}}</textarea>
                   </div>
                   <div class="form-group">
                    <label>Advisor Image</label>
                    <input type="file" name="file" required>
                    <p class="help-block">{{$advisor->file}}</p>
                   </div>
                   <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content" rows="3">{{$advisor->content}}</textarea>
                   </div>
                   <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="phone" value="{{$advisor->phone}}" placeholder="Enter Phone Number">
                   </div>
                   <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{$advisor->email}}" placeholder="Enter Email Address">
                   </div>
                   <div class="form-group">
                    <label>Facebook Link</label>
                    <input class="form-control" name="facebook" value="{{$advisor->facebooklink}}" placeholder="Enter Facebook Link" >
                   </div>
                   <div class="form-group">
                    <label>Twitter Link</label>
                    <input class="form-control" name="twitter" value="{{$advisor->twitterlink}}" placeholder="Enter Twitter Link" >
                   </div>
                   <div class="form-group">
                    <label>GooglePlus Link</label>
                    <input class="form-control" name="googleplus" value="{{$advisor->googlepluslink}}" placeholder="Enter Gmail Link">
                   </div>
                   <div class="form-group">
                    <label>LinkedIn Link</label>
                    <input class="form-control" name="linkedin" value="{{$advisor->linkedinlink}}" placeholder="Enter LinkedIn Link">
                   </div>
                   <button type="submit" class="btn btn-default">Submit</button>
                 </form>

               </div>

               <div class="col-xs-2 col-xs-offset-2 col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2">
                 <ul class="nav nav-pills nav-stacked sidebar">
                   <li role="presentation" class="active"><a href="{{url('adminadvisor')}}"><i class="fa fa-plus"></i> New</a></li>
                   <li role="presentation" class="active"><a href="{{url('adminadvisorview')}}">View</a></li>
                 </ul>
              </div> <!-- ======== End of column =================== -->

             </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

@stop
