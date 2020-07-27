@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add blood pressure</div>

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
					 <form method="POST" action="{{route('bloodpressure.store')}}" id="form">
						 @csrf
					  <div class="form-group">
						<label for="date">Date:</label>
						<input type="text" class="form-control" id="date" name="date" value="{{old('date')}}">
					  </div>
					  <div class="form-group">
						<label for="time">Time:</label>
						<input type="text" class="form-control" id="time" name="time" value="{{old('time')}}">
					  </div>
					  <div class="form-group">
						<label for="systolicPressure">Systolic pressure:</label>
						<input type="text" class="form-control" id="systolicPressure" name="systolicPressure" value="{{old('systolicPressure')}}">
					  </div>
					  <div class="form-group">
						<label for="diastolicPressure">Diastolic pressure:</label>
						<input type="text" class="form-control" id="diastolicPressure" name="diastolicPressure" value="{{old('diastolicPressure')}}">
					  </div>
					  <div class="form-group">
						<label for="heartRate">Heart rate:</label>
						<input type="text" class="form-control" id="heartRate" name="heartRate" value="{{old('heartRate')}}">
					  </div>
					  <div class="form-group">
						<label for="comment">Comment:</label>
						<input type="text" class="form-control" id="comment" name="comment" value="{{old('comment')}}">
					  </div>
					  
					  <button type="submit" class="btn btn-default">Create reading</button>
					</form>
                </div>
            </div>
        </div>
    </div>
	
	<script type="text/javascript">
	  
	  $(document).ready(function() {
		/* datepicker based on selecting year, month and day */
		$( "#date" ).datepicker({
			changeMonth: true,
            changeYear: true,
			yearRange: "-60:+0",
		    dateFormat: "yy-mm-dd"
	    });
		
		$('#time').timepicker({
			timeFormat: 'hh:mm:ss',
			interval: 60,
			minTime: '10',
			maxTime: '6:00pm',
			defaultTime: '',
			startTime: '10:00',
			dynamic: false,
			dropdown: true,
			scrollbar: true
		});
	  });
    </script>
</div>
@endsection