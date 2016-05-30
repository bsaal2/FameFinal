@extends('layout')
@section('content')


<!-- ======= Banner ======= -->
		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Our Departments</h1>
						<ul>
							<li><a href="{{'home'}}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Our Departments</li>
						</ul>

					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->

<!--======= cart-page ======-->
		<section class="cart-page">
			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Physics</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($physics as $physics)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$physics->file}}" alt="{{$physics->file}}">
									</td>
									<td class="product">
										{{$physics->name}}
									</td>
									<td class="price">
										{{$physics->college}}
									</td>
									<td class="quantity">
                     {{$physics->phoneno}}
									</td>
									<td class="total">
										{{$physics->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td class="product">Empty Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Chemistry</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($chemistry as $chemistry)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$chemistry->file}}" alt="{{$chemistry->file}}">
									</td>
									<td class="product">
										{{$chemistry->name}}
									</td>
									<td class="price">
										{{$chemistry->college}}
									</td>
									<td class="quantity">
                     {{$chemistry->phoneno}}
									</td>
									<td class="total">
										{{$chemistry->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td colspan="5" class="product"><strong>Empty Data</strong></td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Botany</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($botany as $botany)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$botany->file}}" alt="{{$botany->file}}">
									</td>
									<td class="product">
										{{$botany->name}}
									</td>
									<td class="price">
										{{$botany->college}}
									</td>
									<td class="quantity">
                     {{$botany->phoneno}}
									</td>
									<td class="total">
										{{$botany->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td colspan="5" class="product">Empty Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>


					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Zoology</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($zoology as $zoology)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$zoology->file}}" alt="{{$zoology->file}}">
									</td>
									<td class="product">
										{{$zoology->name}}
									</td>
									<td class="price">
										{{$zoology->college}}
									</td>
									<td class="quantity">
                     {{$zoology->phoneno}}
									</td>
									<td class="total">
										{{$zoology->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td colspan="5" class="product">Empty Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Maths</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($maths as $maths)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$maths->file}}" alt="{{$maths->file}}">
									</td>
									<td class="product">
										{{$maths->name}}
									</td>
									<td class="price">
										{{$maths->college}}
									</td>
									<td class="quantity">
                     {{$maths->phoneno}}
									</td>
									<td class="total">
										{{$maths->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td colspan="5" class="product">Empty Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of English</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($english as $english)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$english->file}}" alt="{{$english->file}}">
									</td>
									<td class="product">
										{{$english->name}}
									</td>
									<td class="price">
										{{$english->college}}
									</td>
									<td class="quantity">
                     {{$english->phoneno}}
									</td>
									<td class="total">
										{{$english->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td colspan="5" class="product">Empty Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Engineering Aptitute</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($aptitute as $aptitute)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$aptitute->file}}" alt="{{$aptitute->file}}">
									</td>
									<td class="product">
										{{$aptitute->name}}
									</td>
									<td class="price">
										{{$aptitute->college}}
									</td>
									<td class="quantity">
                     {{$aptitute->phoneno}}
									</td>
									<td class="total">
										{{$aptitute->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td colspan="5" class="product">Empty Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Medical</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($medical as $medical)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$medical->file}}" alt="{{$medical->file}}">
									</td>
									<td class="product">
										{{$medical->name}}
									</td>
									<td class="price">
										{{$medical->college}}
									</td>
									<td class="quantity">
                     {{$medical->phoneno}}
									</td>
									<td class="total">
										{{$medical->email}}
									</td>
								</tr>
								@empty
								<tr>
                  <td colspan="5" class="product">Empty Data</td>
								</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Accountancy</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($accountancy as $accountancy)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$accountancy->file}}" alt="{{$accountancy->file}}">
									</td>
									<td class="product">
										{{$accountancy->name}}
									</td>
									<td class="price">
										{{$accountancy->college}}
									</td>
									<td class="quantity">
                     {{$accountancy->phoneno}}
									</td>
									<td class="total">
										{{$accountancy->email}}
									</td>
								</tr>
								@empty
								<tr>
								</tr>
								<td colspan="5" class="product">Empty Data</td>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Economics</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($economics as $economics)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$economics->file}}" alt="{{$economics->file}}">
									</td>
									<td class="product">
										{{$economics->name}}
									</td>
									<td class="price">
										{{$economics->college}}
									</td>
									<td class="quantity">
                     {{$economics->phoneno}}
									</td>
									<td class="total">
										{{$economics->email}}
									</td>
								</tr>
								@empty
								<tr>
								</tr>
								<td colspan="5" class="product">Empty Data</td>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of Bussiness</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($bussiness as $bussiness)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$bussiness->file}}" alt="{{$bussiness->file}}">
									</td>
									<td class="product">
										{{$bussiness->name}}
									</td>
									<td class="price">
										{{$bussiness->college}}
									</td>
									<td class="quantity">
                     {{$bussiness->phoneno}}
									</td>
									<td class="total">
										{{$bussiness->email}}
									</td>
								</tr>
								@empty
								<tr>
								</tr>
								<td colspan="5" class="product">Empty Data</td>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-center">Department Of BBA</h3>
            <table class="table cart-table">
							<thead>
								<tr>
									<th class="preview">Image</th>
									<th class="product">Name</th>
									<th class="price">College</th>
									<th class="quantity">Phone No.</th>
									<th class="total">Email</th>
								</tr>
							</thead>
							<tbody>
                @forelse($bba as $bba)
								<tr>
									<td class="preview">
										<img src="{{'http://localhost/ProjectFame1/fame/app/storage/uploaded/'.$bba->file}}" alt="{{$bba->file}}">
									</td>
									<td class="product">
										{{$bba->name}}
									</td>
									<td class="price">
										{{$bba->college}}
									</td>
									<td class="quantity">
                     {{$bba->phoneno}}
									</td>
									<td class="total">
										{{$bba->email}}
									</td>
								</tr>
								@empty
								<tr>
								</tr>
								<td colspan="5" class="product">Empty Data</td>
								@endforelse
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</section>
<!--======= cart-page ======-->


<!-- ============ free consultation ================ -->
		<section class="container-fluid consultation">
			<div class="container">
				<p>If you have any querry for related information  ... We are available</p>
				<a href="{{url('contactus')}}">Contact us <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</section> <!-- End consultation -->
<!-- ============ /free consultation ================ -->

@stop
