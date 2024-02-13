@extends('admin.template')
@section('title', 'Portofolio')
@section('layout')
<div class="page-heading">
    <h3>Edit Portofolio</h3>
</div>

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <form action="{{ url('admin/portofolio', $porto->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Portofolio Title<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $porto->title }}" class="form-control" id="exampleInputUsername1" placeholder="Input Portofolio Title..." name="title">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Description<span class="text-danger">*</span></label>
                        <textarea class="ckeditor" name="description">{{ $porto->description }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Insert Image Portofolio</label><br>
                        <label for="formFile"><span class="text-sm mt-0">Rekomendasi Ukuran: 1:1 atau 4:3<span class="text-danger">*max 2mb</span></span></label>
                        <div class="image"></div>
                        <div class="row mt-2">
                            <label for="">Image Sebelumnya</label>
                            @foreach($porto->img as $image)
                            <div class="col-3"><img src="{{asset('img/'.$image->image)}}" style="height: 10vh" alt=""></div>
                            @endforeach
                        </div>
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