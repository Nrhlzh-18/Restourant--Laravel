@extends('layout.main')

@section('content')
<div class="home">
	<center>
		<h3 class="text">Edit Order</h3>
	</center>
	<a href="/customer" class="btn btn_secondary btn-lg mb-3" title="back"></a>

	<div class="row">
		<div class="col-5">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('order.update',$order->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="mb-3">
							<label class="form-label">Customer</label>
							<select name="customerId" class="form-select">
								@foreach ($customer as $c)
									@if ($order->customerId == $c->id)
										<option value="{{ $c->id }}" selected>{{ $c->nameCustomer }}</option>
									@else
										<option value="{{ $c->id }}">{{ $c->nameCustomer }}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="mb-3 menu-container">
							<label class="form-label">Menu</label>
							<button class="btn btn-info btn-lg btn-add-menu" type="button"></button>
							@foreach ($order->orderItem as $key => $orderItem)
								<div class="input-group mb-1 menu">
									<select name="menuId[]" class="form-select">
										<option></option>
										@foreach ($menu as $m)
											@if ($orderItem->menuId == $m->id)
												<option value="{{ $m->id }}" selected>{{ $m->nameMenu }}</option>
											@else
												<option value="{{ $m->id }}">{{ $m->nameMenu }}</option>
											@endif
										@endforeach
									</select>
									<input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="{{ $orderItem->quantity }}">
										@if ($key==0)
											<a class="btn_secondary"></a>
										@else
											<a class="btn btn-danger btn-delete-menu"></a>
										@endif
								</div>			
							@endforeach
						</div>

						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	<script>
		$('.btn-add-menu').click(function() {
			$('.menu-container').appen(menu())
		})

		$(document).on('click', '.btn-delete-menu', function() {
			$(this).closest('.menu').remove()
		})

		function menu() {
			return `<div class="input-group mb-1 menu">
						<select name="menuId[]" class="form-select">
							<option><option>
							@foreach ($menu as $m): ?>
								<option value="{{ $m->id }}">{{ $m->nameMenu }}</option>
							@endforeach
						</select>
						<input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="1">
						<a class="btn btn-danger btn-delete-menu"></a>
					</div>`
		}
	</script>
@endsection