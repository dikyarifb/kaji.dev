@extends('layouts.withoutonepage')

@section('title')

KlikAdv Jaya Internasional - Apply as {{$dashName}}
	
@endsection


@section('content')
	
	<section class="career-section">

		<div class="container">

			<div class="row">


				<div class="col-md-12 col-job-detail col-job-apply">
				
					<center>

						<h2> Send your resume </h2>
						<p style="color:grey">fill the form below for applying</p>

					</center>

				</div>

			</div>

			<br>

			<div class="row">

				<div class="col-md-12 col-job-detail">

					<div class="panel panel-default">

						<div class="panel-body">

							@if (session('message'))

								<div class="alert alert-{{session('status')}}">				
									{{session('message')}}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								</div>

							@endif

							@if($errors->any())
							    <ul class="alert alert-danger" style="padding-left: 30px">
							        @foreach($errors->all() as $error)
							            <li>{{$error}}</li>
							        @endforeach
							    </ul>
							@endif

							<form method="POST" action="{{URL('/apply-job')}}" enctype="multipart/form-data">
							 {{ csrf_field() }}
							  <div class="form-group">
							    <label for="name">Full Name*</label>
							    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required>
							  </div>
							  <div class="form-group">
							    <label for="email">Email address*</label>
							    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
							  </div>
							  <fieldset>						  
								  <div class="form-group">
								    <label for="position">Position</label>
								    <input type="text" name="posisi" class="form-control" id="position" placeholder="{{$dashName}}" value="{{$dashName}}"  readonly="true">
								  </div>
							  </fieldset>
							  <div class="form-group">
							    <label for="message">Additional message</label>
							    <textarea style="height: 150px" name="pesan" placeholder="Additional message for company, feel free to express yourself!" class="form-control"></textarea><br>
							  <div class="form-group">
							    <label for="exampleInputFile">CV or resume here*</label>
							    <input type="file" id="" name='pdf_file'>
							    <p class="help-block" >Input document file such as .pdf and other .doc type, max size 10Mb</p>
							    {!! Recaptcha::render() !!}
							  </div>
							  <button type="submit" class="btn" >Apply!</button>
							</form>

						</div>

					</div>

				</div>

			</div>		

		</div>
	</section>
@endsection