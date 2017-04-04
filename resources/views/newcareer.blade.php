@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default ">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="panel-heading" style="color: grey">
                    <b>New Job</b>
                </div>
                <div class="panel-body">
                    <form action="{{URL('/career/store')}}" method="POST">
                     {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">*Job Name - <span style="font-size: 12px;color: grey">Alphanumeric only</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Job name here. ." required>
                      </div>
                      <div class="form-group">
                        <label for="description">*Job Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description here. ." required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="responsibility">Responsilities</label>
                        <textarea class="form-control" name="responsibility" id="responsibility" placeholder="- type your text like these . .&#10;- type your text like these . .&#10;- type your text like these . ."></textarea>
                      </div>
                      <div class="form-group">
                        <label for="tool">Tool or Technology</label>
                        <textarea class="form-control" name="tool" id="tool" placeholder="- type your text like these . .&#10;- type your text like these . .&#10;- type your text like these . ."></textarea>
                      </div>
                      <div class="form-group">
                        <label for="requirement">*Requirements</label>
                        <textarea class="form-control" name="requirement" id="requirement" placeholder="- type your text like these . .&#10;- type your text like these . .&#10;- type your text like these . ." required></textarea>
                      </div>
                        <button type="submit" class="btn btn-primary" style="float:right">Add Job!</button>
                    </form>
                </div>
                
            </div>
        </div>

    </div>

</div>
@endsection
