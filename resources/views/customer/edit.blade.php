@extends('layout.main')

@section('content')
<div class="home">
	<center>
		<h3 class="text">Update Costumer</h3>
	</center>
	<a href="/customer" class="btn btn_secondary btn-lg mb-3" title="back"></a>

	<div class="row">
		<div class="col-5">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('customer.update',$customer->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="mb-3">
							<label class="">Name :</label>
							<input type="text" name="nameCustomer" value="{{ $customer->nameCustomer }}" class="form-control">
						</div>
						<div class="mb-3">
							<label class="">Email :</label>
							<input type="email" name="emailCustomer" value="{{ $customer->emailCustomer }}" class="form-control">
						</div>
						<div class="mb-3">
							<label class="">Phone :</label>
							<input type="text" name="phoneCustomer" value="{{ $customer->phoneCustomer }}" class="form-control">
						</div>
						<div class="mb-3">
							<div class="">
								<label class="form-lab">Member</label>
								<input type="checkbox" name="member" value="{{ $customer->member ? 'checked' : '' }}" class="form-check-input">
							</div>
						</div>

						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection