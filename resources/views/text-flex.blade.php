@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="d-flex flex-row">
                <button type="button" class="btn btn-primary mr-2">Tambah</button>
                <button type="button" class="btn btn-primary mr-2">Import</button>
                <button type="button" class="btn btn-primary">Export</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex flex-row justify-content-end">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Tahun
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">2020</a></li>
                        <li><a class="dropdown-item" href="#">2021</a></li>
                        <li><a class="dropdown-item" href="#">2022</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
