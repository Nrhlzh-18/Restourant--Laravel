@extends('layout.main')

@section('content')
<section class="home">
	<div class="mb-4">
		<span class="text">Create Customer</span>
	</div>
	
	<a href="/menu" class="btn my-3 btn-primary text-white fw-bold btn-sm">
        <i class='bx bx-arrow-back' ></i>
        <span data-feather="chevron-left"></span>
    </a>
    

	<div class="row">
		<div class="col-5">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('customer.store') }}" method="POST">
						@csrf
						<div class="mb-3">
							<label class="">Name :</label>
							<input type="text" name="nameCustomer" class="form-control">
						</div>
						<div class="mb-3">
							<label class="">Email :</label>
							<input type="email" name="emailCustomer" class="form-control">
						</div>
						<div class="mb-3">
							<label class="">Phone :</label>
							<input type="text" name="phoneCustomer" class="form-control">
						</div>
						<div class="mb-3">
							<div class="">
								<label class="form-lab">Member</label>
								<input type="checkbox" name="member" value="1" class="form-check-input">
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
	</section>
@endsection