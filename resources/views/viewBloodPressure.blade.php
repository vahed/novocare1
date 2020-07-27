@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


					  <table class="table table-striped">
						<thead>
							<tr>
							  <td>Date</td>
							  <td>Time</td>
							  <td>Systolic pressure</td>
							  <td>Diastolic pressure</td>
							  <td>Heart rate</td>
							  <td>Comment</td>
							</tr>
						</thead>
						<tbody>
							@foreach($userBloodPressure as $bloodpressure)
							<tr>
								<td>{{$bloodpressure->date}}</td>
								<td>{{$bloodpressure->time}}</td>
								<td>{{$bloodpressure->systolicPressure}}</td>
								<td>{{$bloodpressure->diastolicPressure}}</td>
								<td>{{$bloodpressure->heartRate}}</td>
								<td>{{$bloodpressure->comment}}</td>
							</tr>
							@endforeach
						</tbody>
					  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection