@extends('layouts.withoutonepage')

@section('title')
	KlikAdv Jaya Internasional - Job as {{$career->name}}
@endsection

@section('content')

	<section class="career-section">

		<div class="container">

			<div class="row">

				<div class="col-md-12 col-job-detail">
				
					<center>
							
							<div class="circle-img-career"></div>
							Career
							<h2>{{$career->name}}</h2>

					</center>
				

				</div>

			</div>

			<div class="row">
			
				<div class="col-md-12 col-job-detail">

					<div class="panel panel-default" style="padding:20px">

						<div class="panel-body">

							<h4><b>Job Description</b></h4>
							<p style="white-space: pre-wrap;">{{$career->description}}</p><br>

							


							@if($career->responsibility!="")

								<h4><b>Responsibilities</b></h4>
								<pre>{{$career->responsibility}}</pre><br>

							@endif								

							@if($career->tool!="")

								<h4><b>Technologies We Use</b></h4>
								<pre>{{$career->tool}}</pre><br>

							@endif							

							<h4><b>Requirements</b></h4>
							<pre>{{$career->requirement}}</pre><br><br/>

							<center>

								<?php
									$name = str_replace(' ','-',$career->name);
								?>
								
								<a href="{{URL($name . '/apply-job')}}" class="btn">Apply now!</a> &nbsp;&nbsp;<b>or</b> &nbsp;&nbsp;send your resume to <b>career@klikadv.com</b><br><br>
								
							</center>
							

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

@endsection