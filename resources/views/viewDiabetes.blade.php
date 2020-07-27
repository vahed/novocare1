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
							  <td>Befor food</td>
							  <td>After food</td>
							  <td>Suger level</td>
							  <td>Comment</td>
							</tr>
						</thead>
						<tbody>
							@foreach($userDiabetes as $diabetes)
							<tr>
								<td>{{$diabetes->date}}</td>
								<td>{{$diabetes->time}}</td>
								<td>{{$diabetes->beforFood}}</td>
								<td>{{$diabetes->afterFood}}</td>
								<td>{{$diabetes->sugarLevel}}</td>
								<td>{{$diabetes->comment}}</td>
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