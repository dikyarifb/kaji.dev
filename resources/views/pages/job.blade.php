@extends('layouts.withoutonepage')

@section('title')

KlikAdv Jaya Internasional - Job available
	
@endsection

@section('content')

	<section class="career-section">

			<div class="container">

				<div class="row career-header">

					<div class="col-md-12">

						<h4>Job Offerings</h4>

						<h1>We Are Hiring</h1>

						<p>Our team is comprised as a passionate group of professionals with backgrounds in<br/>finance, information technology, orginzational, marketing, creative, and customer service</p>
			
					</div>

				</div>

			</div>

			<br>

			<div class="container container-career-item">

				@foreach($career as $key => $careers)

					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>{{$careers->name}}</h4>

							<?php 

								$string = str_replace(' ', '-', $careers->name); 

							?>

							<a class='btn btn-apply' href="{{URL('/job-detail/' . $string)}}">APPLY</a>

							<p>	
								<?php
									$desc = str_limit($careers->description, 130);
								?>						
								{{$desc}}

							</p>

						</div>

					</div>

				@endforeach
				<!--div class="row line-career">
				
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>UI/UX Designer</h4>

							<a class='btn btn-apply' href="#">APPLY</a>

							<p>							
								We need a UI/UX Designer to join our fast growing team to create compelling, meaningful experiences to those who surf into our website.

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Senior Web Developer</h4>

							<p>							
								The right person will work together with great technologies and amazingly ingenious talents of our high-performed Tech Team.

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Front End Developer</h4>

							<p>							
								We are looking for rockstar front end who can work smart and fast without sacrigicing the equality.

							</p>

						</div>

					</div>

				</div-->

				<!--div class="row line-career">
				
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Creative Graphic Designer</h4>

							<p>							
								We are looking for someone who has an awesome creativity fliar, imaginative, and has a great attention to detail, then you surely belong here.

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Sales</h4>

							<p>							
								Baik dalam perencanaan strategis penjualan dan pemasaran.

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Marketing Manager</h4>

							<p>							
								Mengembangkan peluang bisnis baru dan menemukan calon proyek/klien baru.

							</p>

						</div>

					</div>

				</div>

				<div class="row line-career">
				
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Sales & Marketing Manager</h4>

							<p>							
								Bertanggung jawab untuk mengelola seluruh pemasaran (Community, Canvassing, Kemitraan, dan lain-lain).

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Finance Manager</h4>

							<p>							
								Responsibilities include the preparation of management reporting and financial report.

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Account Executie</h4>

							<p>							
								Research client's products, services, plans, copetitors and target market.

							</p>

						</div>

					</div>

				</div>

				<div class="row line-career">
				
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Staff Administrasi</h4>

							<p>							
								Handling purchase administrastion, and maintenance office document

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Customer Service</h4>

							<p>							
								Serve customers by providing product and service information and to take responsiblity for being the first point for all callers.

							</p>

						</div>

					</div>
					<div class="col-md-4 career-item">

						<div class="wrapper-for-bg">

							<h4>Staff Keuangan</h4>

							<p>							
								Melakukan pengaturan administrasi keuangan perusahaan, menyusun dan membuat laporan keuangan perusahaan.

							</p>

						</div>

					</div>

				</div-->


			</div>			

		</section>

@endsection