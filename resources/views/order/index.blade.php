@extends('layout.main')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">



<div class="gembel">
    @if ( session()->has('success') )
        <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h3 class="text" align="center">Managemen Order</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <a href="{{ route('order.create') }}">
                <button class="btn btn-primary" type="button" style="border-radius: 7px;">Tambah data</button>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead class="hz">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($order as $o)
                    <tbody class="nr">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $o->customer->nameCustomer }}</td>
                        <td>{{ $o->code }}</td>
                        <td>
                            
                            <form action="{{ route('order.destroy',$o->id) }}" method="POST">
                                <a data-bs-toggle="modal" data-bs-target="#addShow{{ $o->id }}" class="fas text-white me-1 fa-edit btn btn-warning btn-sm fs-6 fw-bold">
                                                    Show
                                                </a>

                                                <!-- SHOW DATA -->
                                                <div class="modal fade" id="addShow{{ $o->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="addUser">SHOW ORDER</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                            <div class="modal-body">        
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Customer</span>
                                                                    <span class="input-group-text" id="basic-addon2">{{ $o->customer->nameCustomer }}
                                                                        {{ $o->customer->member ? '(member)' : '' }}</span>
                                                                        
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text" id="basic-addon1">Code Order</span>
                                                                    <span class="input-group-text" id="basic-addon1">{{ $o->code }}</span>                    
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                            
                                                                            <div class="d-flex justify-content-betwen fst-italic">
                                                                                <div class="d-md-flex justify-content-md-center">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table" style="align-items: center;">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Menu</th>
                                                                                                    <th>Quantity</th>
                                                                                                    <th>Harga</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            @foreach ($o->orderItem as $orderItem)
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>{{ $orderItem->menu->nameMenu }}</td>
                                                                                                    <td>{{ $orderItem->quantity }}</td>
                                                                                                    <td>{{ $orderItem->subTotal }}</td>
                                                                                                </tr> 
                                                                                                @endforeach
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                       

                                                                        @if ($o->customer->member)
                                                                            <div class="text-end fst-italic input-group mb-3">
                                                                                <small class="me-3">Discount Member :</small>
                                                                                <small class="border-top border-dark">10 %</small>  
                                                                            </div>
                                                                        @endif
                                                                        </div>
                                                                        <div class="input-group mb-3">
                                                                            <small class="me-3">Total :</small>
                                                                            <small class="border-top border-dark">{{ $o->total }}</small>             
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                            <i class="fa fa-close">Close</i>
                                                                        </button>
                                                                        <a href="" onClick="window.open('{{ route('order.show',$o->id) }}','mywindow','width=10000,location=no')" class="btn btn-success text-white f-bold">Cetak Struk</a>
                                                                    </div>
                                                                </div>
                                                            </div>      
                                                        </div>
                                                    </div>
                                                </div>
                                <a href="{{ route('order.edit',$o->id) }}" class="fas text-white me-1 fa-edit btn btn-warning btn-sm fs-6 fw-bold">
                                    Edit
                                </a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="fas ms-1 fa-trash btn btn-danger btn-sm fs-6 fw-bold" onclick="return confirm('Sure?')">Hapus</button>
                            </form>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
@endsection