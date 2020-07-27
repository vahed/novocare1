@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create user</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    	<h1>Add Patient</h1>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	
	@if(Session::has('duplicateError'))
		<div class="alert alert-danger">{{Session::get('duplicateError')}}</div>
	@endif
	
	@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
	
	@if (session('duplicate'))
    <div class="alert alert-primary">
        {{ session('duplicate') }}
    </div>
    @endif
					 <form method="POST" action="{{route('patient.store')}}" id="form">
						 @csrf
					  <div class="form-group">
						<label for="nextOfKin">Next of kin:</label>
						<input type="text" class="form-control" id="nextOfKin" name="nextOfKin" value="{{old('nextOfKin')}}">
					  </div>
					  <div class="form-group">
						<label for="bloodType">blood type:</label>
						<input type="text" class="form-control" id="bloodType" name="bloodType" value="{{old('bloodType')}}">
					  </div>
					  <div class="form-group">
						<label for="isDisabled">Is disabled:</label>
						<input type="text" class="form-control" id="isDisabled" name="isDisabled" value="{{old('isDisabled')}}">
					  </div>
					  
					  <button type="submit" class="btn btn-default">Create patient</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
