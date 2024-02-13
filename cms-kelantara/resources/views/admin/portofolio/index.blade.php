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
                        <th style="text-align: center;">Portofolio Title</th>
                        <th style="text-align: center;">Description</th>
                        <th style="text-align: center;">Portofolio Image</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection