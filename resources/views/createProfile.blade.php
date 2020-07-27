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

	@if (session('duplicate'))
    <div class="alert alert-primary">
        {{ session('duplicate') }}
    </div>
    @endif
					 <form method="POST" action="{{route('profile.store')}}" id="form">
						 @csrf
					  <div class="form-group">
						<input type="hidden" class="form-control" id="Id" name="Id" value="{{old('StoreId')}}">
					  </div>
					  <div class="form-group">
						<label for="Firstname">Firstname:</label>
						<input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}">
					  </div>
					  <div class="form-group">
						<label for="Lastname">Lastname:</label>
						<input type="text" class="form-control" id="Lastname" name="lastname" value="{{old('lastname')}}">
					  </div>
					  <div class="form-group">
						<label for="UserType">UserType:</label>
						<input type="text" class="form-control" id="usertype" name="usertype" value="{{old('usertype')}}">
					  </div>
					  <div class="form-group">
						  <select class="btn btn-primary dropdown-toggle" id="gender" name="gender">
						    <option class="dropdown-item" href="#" value="">Select gender</option>
							<option value="male">Male</option>
                            <option value="female">Female</option>
						  </select>
					  </div>
					  <div class="form-group">
						<label for="DateOfBirth">Date of Birth:</label>
						<input type="text" class="form-control" id="DateOfBirth" name="dateofbirth" value="{{old('dateofbirth')}}">
					  </div>
					  <div class="form-group">
						<label for="Phone">Phone:</label>
						<input type="text" class="form-control" id="Phone" name="phone" value="{{old('phone')}}">
					  </div>

					  <button type="submit" class="btn btn-default">Create new user</button>
					</form>
                </div>
            </div>
        </div>
    </div>
	<script type="text/javascript">

	  $(document).ready(function() {
		/* datepicker based on selecting year, month and day */
		$( "#DateOfBirth" ).datepicker({
			changeMonth: true,
            changeYear: true,
			yearRange: "-60:+0",
		    dateFormat: "yy-mm-dd"
	    });

		/* reset the form with empty values */
		$("#form")[0].reset();

		const genderOldValue = '{{ old('gender') }}';

		/* get the vlaue of the selected item */
		if(genderOldValue !== '') {
		  $('#gender').val(genderOldValue);
		}
	  });
    </script>
</div>
@endsection
