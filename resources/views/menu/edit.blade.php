@extends('layout.main')

@section('content')
<section class="home">
    <div class="mt-3">
        <h1>Edit Menu</h1>
    </div>

    <a href="/menu" class="btn my-3 btn-primary text-white fw-bold btn-sm">
        <span data-feather="chevron-left"></span>
    </a>

    <div class="row">
        <div class="col-6">
            <div class="card card-body">
                <form action="/menu/{{ $menu->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-floating mb-3">
                        <input value="{{ old('nameMenu', $menu->nameMenu) }}" required name="nameMenu" type="text" required placeholder="Name" class="form-control" id="floatingInput">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" required name="descMenu" required placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ old('descMenu', $menu->descMenu) }}</textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Menu Photo</label>

                        @if ($menu->photoMenu)
                            <img src="{{ asset('storage/' . $menu->photoMenu) }}" class="img-preview img-fluid mb-3 col-sm-5">
                        @else                           
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif

                        <input name="photoMenu" class="form-control" type="file" id="image" name="image" onchange="previewImage()">       
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ old('price', $menu->price) }}" name="price" type="number" placeholder="Name" class="form-control" id="floatingInput">
                        <label for="floatingInput">Price</label>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-success rounded me-1" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <script>
        // preview image
        function previewImage() {
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector(".img-preview");

            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFEvent) {
                imgPreview.src = oFEvent.target.result;
            }
        }
    </script>
    
@endsection