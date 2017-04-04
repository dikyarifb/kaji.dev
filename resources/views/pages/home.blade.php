@extends('layouts.master')
@section('content')

<div class="main">
		<section class="screen screen-1" id="about" style="margin-top:-1px">

			<div class="container" >

				<div class="row middle-sm">

					<!--div class="about-left">
					
						<div class="wrapper-list">

							<ul class="list-project">

								<li> <h3> Lorem ipsum</h3> </li>
								<li> <h3> Lorem ipsum</h3> </li>
								<li> <h3> Lorem ipsum</h3> </li>
								<li> <h3> Lorem ipsum</h3> </li>
								<li> <h3> Lorem ipsum</h3> </li>

							</ul>

						</div>
					
					</div-->

					<div class="about-right" >
						@if (session('message'))

								<div class="alert alert-{{session('status')}}" style="position: fixed;top: 100px;width: 300px">				
									{{session('message')}}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								</div>

							@endif

						<h1>An Advertising Network Platform Created for You</h1>
						<h2>Wether you are a Brand, Client, or Agency we've got you covered</h2><br/><br/><br/>

						<p>We are a digital destination combining the best online billboard placement network together - all in one place.</p>
						<p>KlikAdv implements and manages Billboard placement for advertisers and marketers tp help achieveng key objectives of increasing brang awareness, and brang engagement</p>
						
					</div>

					<div class="arrow-bottom">
					</div>

				</div>

			</div>
			
		</section>

		<section class="screen screen-2" id="process">

			<div class="container">

				<div class="row middle-sm">

					<div class="left process-left">

						<h1>With just a simple click<br/> we help you advertise</h1><br/><br/>
							
						<h3>We believe</h3>
						<h4>the world's best brands deserve the best advertising spots, and we can find it for you</h4><br/>
						<ul>
							<li>Ratusan pilihan spot iklan terbaik untuk brand kamu <i class="fa fa-check-square-o fa-lg"></i></li>
							<li>Proses mudah, cepat, dan praktis <i class="fa fa-check-square-o fa-lg"></i></li>
							<li>Bantuan layanan pelanggan setiap saat <i class="fa fa-check-square-o fa-lg"></i></li>
						</ul>				
					
					</div>

					<div class="right process-right">

						<center>							
							<h1>if you want it<br/> just "<span>Klik</span>" it</h1>
						</center>
						
						<div class='frame-desktop'>
							
						</div>
						
					</div>

				</div>

			</div>
			
		</section>

		<section class="screen screen-3" id="location" style="margin-top:-1px">

			<div class="container">

				<div class="row middle-sm">

					<div class="col-md-12 Location">

						<center>
							<h1>Jangkauan Terluas <br/>dari Sabang hingga Merauke</h1><br/>
							<h4>KlikAdv.com memberikan kemudahan bagi anda untuk mencari spot- spot iklan<br/>terbaik di setiap wilayah dan kota di Indonesia</h4>
						</center>
						
					</div>

				</div>

			</div>
			
		</section>

		<section class="screen screen-4" id="contact">

			<div class="container">

				<div class="row middle-sm">
					
					<div class="left contact-left">

						<h1>Need help to find best spots to advertise your brand?</h1><br>
						<br>
						<p>Implementing a new digital way to find the best billboard placement for all your brand campaign to help in achieving key objectives of increasing brand awareness and boost engagement.</p>
						
					</div>

					<div class="right contact-right">
						<form action="{{URL('/sendPesan')}}" method="POST">
						 {{ csrf_field() }}
						  <div class="form-group">
						    <input type="email" class="form-control" name='email' id="email" placeholder="Email" required>
						  </div>
						  <div class="form-group">
						    <input type="text" class="form-control" name='nama' id="name" placeholder="Full name" required>
						  </div>
						  <div class="form-group">
						    <textarea class="form-control" name='pesan' id="message" placeholder="How can we help?" required></textarea>
						  </div><br>
						  <button type="submit" id='send' class="btn btn-default">Submit</button>
						</form>
						
					</div>

				</div>

			</div>

			
			
		</section>
	</div>

@endsection