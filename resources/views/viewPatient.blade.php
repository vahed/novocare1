
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
							  <td>Next of kin</td>
							  <td>Blood type</td>
							  <td>Is disabled</td>
							</tr>
						</thead>
						<tbody>
							@foreach($userPatient as $patient)
							<tr>
								<td>{{$patient->nextOfKin}}</td>
								<td>{{$patient->bloodType}}</td>
								<td>{{$patient->isDisabled}}</td>
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