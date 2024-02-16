@extends('admin.template')
@section('title', 'Portofolio')
@section('layout')
<div class="page-heading">
    <h3>Portofolio</h3>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card-body">
        <div class="card-title d-flex justify-content-end mb-5">
            <a href="/admin/portofolio/create" class="btn btn-primary btn-lg btn-icon-text">
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
                        <th style="text-align: center;">Portofolio Type</th>
                        <th style="text-align: center;">Portofolio Title</th>
                        <th style="text-align: center;">Description</th>
                        <th style="text-align: center;">Portofolio Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($porto as $item)
                        <tr class="fw-bold text-center">
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center gap-1">
                                <a href="{{url('/admin/portofolio/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm-lg text-white"><i class="bi bi-vector-pen"></i></a>
                                <form action="{{ url('admin/portofolio', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-icon btn-danger delete" data-id="{{ $item->id }}"><i class="bi bi-trash-fill"></i></button>
                                </form>
                                </div>
                            </td>
                            <td>{{$item->type->name}}</td>
                            <td>{{$item->title}}</td>
                            <td>{!! $item->description !!}</td>
                            <td>
                                <div class="d-flex justify-content-center align-items-center">
                                    @foreach($item->img as $image)
                                    <img src="{{asset('img/'.$image->image)}}" style="height: 10vh" alt="">
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection