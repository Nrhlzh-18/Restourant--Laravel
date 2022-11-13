@extends('layout.main')

@section('content')
<div class="gabut">
        @if ( session()->has('success') )
            <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

            
                <h3 class="mb-4" align="center">Managemen Customer</h3>

                    <div class="card">
                        <div class="card-header py-3">
                            <a href="{{ route('customer.create') }}">
                            <button class="btn btn-primary" type="button" style="border-radius: 7px;">Tambah data</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead class="hz">
                                        <tr>
                                            <th style="text-align: center;" >No</th>
                                            <th style="text-align: center;" >Nama</th>
                                            <th style="text-align: center;" >Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($customers as $customer)                                 
                                    <tbody class="nr">
                                        <tr class="text-center" >
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $customer->nameCustomer }}</td>

                                            <td>
                                            <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
                                                <a href="{{ route('customer.edit',$customer->id) }}" class="fas text-white me-1 fa-edit btn btn-warning btn-sm fs-6 fw-bold">
                                                    Edit
                                                </a>

                                                @csrf
                                                @method('DELETE')
      
                                                <button type="submit" class="fas ms-1 fa-trash btn btn-danger btn-sm fs-6 fw-bold">Hapus</button>
                                                </a>
                                            </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@endsection