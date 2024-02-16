@extends('admin.template')
@section('title', 'Portofolio')
@section('layout')
<div class="page-heading">
    <h3>Create Portofolio</h3>
</div>

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <form action="{{ url('admin/portofolio') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Portofolio Type<span class="text-danger">*</span></label>
                        <select class="form-control" name="type_id">
                            <option selected disabled>Select Portofolio Type</option>
                            @foreach ($type as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('type_id')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Portofolio Title<span class="text-danger">*</span></label>
                        <input type="text" value="{{ old('title') }}" class="form-control" id="exampleInputUsername1" placeholder="Input Portofolio Title..." name="title">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Description<span class="text-danger">*</span></label>
                        <textarea class="ckeditor" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Insert Image Portofolio</label><br>
                        <label for="formFile"><span class="text-sm mt-0">Rekomendasi Ukuran: 1:1 atau 4:3<span class="text-danger">*max 2mb</span></span></label>
                        <div class="image"></div>
                        <div class="result text-danger fw-bold"></div>
                    </div>
                    <div class="modal-footer gap-1 mt-5">
                        <a href="/admin/agenda" class="btn btn-outline-warning btn-icon-text">
                            Cancel
                        </a>
                        <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const fotoDiv = document.querySelector(".image");
    const submitBtn = document.getElementById("dis");

    submitBtn.addEventListener("click", function(event) {
        // Check if the "foto" div contains any uploaded images
        const uploadedImages = fotoDiv.querySelectorAll("img");
        
        if (uploadedImages.length === 0) {
            // No images are uploaded, prevent form submission and show an error message
            event.preventDefault();
            document.querySelector(".result").innerHTML = "Upload Image";
        }
    });
});
</script>
@endsection

@push('scripts')
<script>
    $('.image').imageUploader({
        imagesInputName: 'image',
        maxSize: 2 * 1024 * 1024,
        maxFiles: 3

    });

</script>
@endpush