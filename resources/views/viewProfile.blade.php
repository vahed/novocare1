
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
							  <td>Firstname</td>
							  <td>Lastname</td>
							  <td>User Type</td>
							  <td>Gender</td>
							  <td>Date of birth</td>
							  <td>Phone</td>
							</tr>
						</thead>
						<tbody>
							@foreach($userProfile as $profile)
							<tr>
								<td>{{$profile->firstname}}</td>
								<td>{{$profile->lastname}}</td>
								<td>{{$profile->userType}}</td>
								<td>{{$profile->gender}}</td>
								<td>{{$profile->dateOfBirth}}</td>
								<td>{{$profile->phone}}</td>
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