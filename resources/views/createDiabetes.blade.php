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

                    	<h1>Create diabetes reading</h1>
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
					 <form method="POST" action="{{route('diabetes.store')}}" id="form">
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
						<label for="beforeFood">Before Food:</label>
						<input type="text" class="form-control" id="beforeFood" name="beforeFood" value="{{old('beforeFood')}}">
					  </div>
					  <div class="form-group">
						<label for="afterFood">After Food:</label>
						<input type="text" class="form-control" id="afterFood" name="afterFood" value="{{old('afterFood')}}">
					  </div>
					  <div class="form-group">
						<label for="sugarLevel">Sugar Level:</label>
						<input type="text" class="form-control" id="sugarLevel" name="sugarLevel" value="{{old('sugarLevel')}}">
					  </div>
					  <div class="form-group">
						<label for="comment">Comment:</label>
						<input type="text" class="form-control" id="comment" name="comment" value="{{old('comment')}}">
					  </div>


					  <button type="submit" class="btn btn-default">Create measurement</button>
					</form>

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
            </div>
        </div>
    </div>
</div>
@endsection
