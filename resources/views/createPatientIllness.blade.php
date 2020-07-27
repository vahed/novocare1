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

                    	<h1>Add new customer</h1>
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
	
	@if (session('createProfile'))
    <div class="alert alert-primary">
        {{ session('createProfile') }}
    </div>
    @endif
					 <form method="POST" action="{{route('patientIllness.store')}}" id="form">
						 @csrf
					  
					  <div class="form-group">
						  <select class="btn btn-primary dropdown-toggle" id="illness" name="illness">
						    <option class="dropdown-item" href="#" value="">Select type of illness</option>
							<option value="1" {{ old('illness') == 1 ? 'selected' : '' }}>Hypertension</option>
                            <option value="2" {{ old('illness') == 2 ? 'selected' : '' }}>Diabetes</option>
						  </select>
					  </div>
					  

					  <button type="submit" class="btn btn-default">Add illness</button>
					</form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection