@extends('layout.main')

@section('content')
<section class="home">
    <h3 class="text">Create Menu</h3>

    <a href="/menu" class="btn my-3 btn-primary text-white fw-bold btn-sm">
        <i class='bx bx-arrow-back' ></i>
        <span data-feather="chevron-left"></span>
    </a>
    
    <div class="row">
        <div class="col-6">
            <div class="card card-body">
                <form action="/menu" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input value="{{ old('nameMenu') }}" required name="nameMenu" type="text" required placeholder="Name" class="form-control" id="floatingInput">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" required value="{{ old('descMenu') }}" name="descMenu" required placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Menu Photo</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input name="photoMenu" class="form-control" type="file" id="image" name="image" onchange="previewImage()">       
                    </div>
                    <div class="form-floating mb-3">
                        <input value="{{ old('price') }}" name="price" type="number" placeholder="Name" class="form-control" id="floatingInput">
                        <label for="floatingInput">Price</label>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-success rounded me-1" type="submit">Submit</button>
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