@extends('layout.main')

@section('content')
<div class="gabut">
	<div class="mb-4">
		<span class="text" align="center">Create Menu</span>
	</div>
	
	<a href="/menu" class="btn my-3 btn-primary text-white fw-bold btn-sm">
        <i class='bx bx-arrow-back' ></i>
        <span data-feather="chevron-left"></span>
    </a>
    
			<div class="card">
				<div class="card-body">
					<form action="{{ route('order.store') }}" method="POST">
						@csrf
						<div class="mb-3">
							<label class="form-label">Customer</label>
							<select name="customerId" class="form-select">
								<option></option>
								@foreach ($customer as $c)
									<option value="{{ $c->id }}">{{ $c->nameCustomer }}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 menu-container">
							<label class="form-label">Menu :</label>
							<button type="button" class="btn btn-info btn-lg btn-add-menu"></button>
							<div class="input-group mb-1 menu">
								<select name="menuId[]" class="form-select">
									<option></option>
									@foreach ($menu as $m)
									<option value="{{$m->id}}">{{$m->nameMenu}}</option>
									@endforeach
								</select>
								<input type="number" name="quantity[]" class="form-control" placeholder="Qty" value="1">
								<a class="btn btn-secondary btn-delete-menu"></a>
							</div>
						</div>

						<div class="d-grid">
							<button class="btn btn-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>
			</div>


<script>
		$('.btn-add-menu').click(function() {
			$('.menu-container').append(menu())
		})

		$(document).on('click', '.btn-delete-menu', function() {
			$(this).closest('.menu').remove()
		})

		function menu() {
			return `<div class="input-group mb-1 menu">
								<select name="menuId[]" class="form-select">
									<option></option>
									@foreach ($menu as $m)
									<option value="{{$m->id}}">{{$m->nameMenu}}</option>
									@endforeach
								</select>
								<input type="number" name="quantity[]" class="form-control" placeholder="Qty" value="1">
								<a class="btn btn-secondary btn-delete-menu"></a>
							</div>`
		}
	</script>
@endsection