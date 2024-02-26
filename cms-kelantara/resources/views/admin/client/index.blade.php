@extends('admin.template')
@section('title', 'Clients')
@section('layout')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Clients</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('admin/clients') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputUsername1" class="fw-bold">Client Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="{{ old('name') }}" id="exampleInputUsername1" placeholder="Input Name..." name="name">
                @error('name')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1" class="fw-bold">Client Logo<span class="text-danger">*</span></label>
                <input type="file" class="form-control" id="exampleInputUsername1" name="image" oninput="updateImage(this)">
                @error('image')
                        <p class="text-danger">{{ $message }}</p>
                @enderror
                <img id="pic" width="100%" class="mt-3" style="display: none"/>
            </div>
            <div class="modal-footer gap-1">
            <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                    Submit
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="page-heading">
    <h3>Clients</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-body">
        <div class="card-title d-flex justify-content-end mb-5">
            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-lg btn-icon-text">
                <i class="mdi mdi-upload btn-icon-prepend"></i>
                +
            </a>
        </div>

        <div class="table-responsive">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Action</th>
                        <th style="text-align: center;">Clients Name</th>
                        <th style="text-align: center;">Client Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($client as $item)
                    <tr class="fw-bold">
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td class="">
                            <div class="d-flex align-items-center justify-content-center gap-1">
                            <a data-bs-toggle="modal" data-bs-target="#Edit{{$item->id}}" class="btn btn-warning btn-sm-lg text-white"><i class="bi bi-vector-pen"></i></a>
                            <div class="modal fade" id="Edit{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="EditLabel">Edit Clients</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('admin/clients', $item->id) }}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1" class="fw-bold">Clients Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" value="{{ $item->name }}" id="exampleInputUsername1" placeholder="Input Client Name..." name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1" class="fw-bold">CLient Logo<span class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" value="{{ $item->image }}" id="exampleInputUsername1" placeholder="Input Description..." name="image" oninput="editImage(this)">
                                                    <img id="before" src="{{asset('img/'.$item->image)}}" style="display: block; width: 100%;" alt="">
                                                    <img id="pic2" src="#" width="100%" class="mt-3" style="display: none; width: 100%;"/>
                                                </div>
                                                <div class="modal-footer gap-1">
                                                <button type="button" class="btn btn-outline-warning btn-icon-text" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                    <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ url('admin/clients', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-icon btn-danger delete" data-id="{{ $item->id }}"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </div>
                        </td>
                        <td class="text-center">{{$item->name}}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('img/'.$item->image)}}" style="height: 10vh" alt="">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function updateImage(input) {
        var pic = document.getElementById('pic');

        if (input.files && input.files[0]) {
            // File is selected, update the image source
            pic.src = window.URL.createObjectURL(input.files[0]);
            pic.style.display = 'block'; 
        } else {
            // No file selected, hide the image
            pic.src = '';
            pic.style.display = 'none';
        }
    }
</script>
   
<script>
     function editImage(input) {
        var pic2 = document.getElementById('pic2');
        var before = document.getElementById('before');

        if (input.files && input.files[0]) {
            // File is selected, update the image source
            pic2.src = window.URL.createObjectURL(input.files[0]);
            pic2.style.display = 'block'; 
            before.style.display = 'none'; 
        } else {
            pic2.src = '';
            pic2.style.display = 'none';
            before.style.display = 'block'; 
        }
    }
</script>
@endsection