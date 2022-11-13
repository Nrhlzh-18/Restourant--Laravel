@extends('layout.main')

@section('content')
<div class="gabut">
        
        @if ( session()->has('success') )
            <div class="alert mt-4 alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

            
                    <h3 class="text" align="center">Managemen Menu</h3>
                    <div class="card">
                        <div class="card-header py-3">
                            <a href="{{ route('menu.create') }}">
                            <button class="btn btn-primary" type="button" style="border-radius: 7px;">Tambah Data
                                <!-- <i class='bx bx-plus-medical'></i></i> --></button>
                            </a>
                        </div>
                        <div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead class="hz">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Menu</th>
                                            <th>Description</th>
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>                                 
                                     <tbody class="nr">
                                        @foreach ($menus as $menu)
                                            
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $menu->nameMenu }}</td>
                                            <td>{{ $menu->descMenu }}</td>
                                            {{-- <td><img width="200px" height="150px" src="{{ ( $menu->photoMenu ) ? asset( "storage/" . $menu->photoMenu ) : ""  }}" alt="photo menu" class="img-thumbnail img-fluid"></td> --}}
                                            <td>
                                                @if(!$menu->photoMenu)
                                                    <img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset( "storage/images/defaultmenu.jpg" ) }}">
                                                @else 
                                                    <img width="200px" height="150px" alt="photo menu" class="img-thumbnail img-fluid" src="{{ asset( "storage/". $menu->photoMenu ) }}">
                                                @endif
                                            </td>
                                            <td>{{ $menu->price }}</td>
                                            <td>
                                                <a href="/menu/{{ $menu->id }}/edit" class="btn me-1 text-white btn-sm btn-warning">
                                                    <span data-feather="edit">Edit</span>
                                                </a>
                                                <form action="/menu/{{ $menu->id }}" method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Sure?')" class="btn btn-danger btn-sm">
                                                        <span data-feather="trash-2">Hapus</span>
                                                    </button>
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
            </div>
            </div>

@endsection