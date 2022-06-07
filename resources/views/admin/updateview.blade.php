
@extends('admin.layouts.master')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Menu Anda</h4>
                        <form action="{{ url('update', $data->id) }}" method="post" enctype="multipart/form-data"
                            class="forms-sample">
                            @csrf
                            <div class="form-group">
                                {{-- <label for="exampleInputName1">Nama Produk</label> --}}
                                <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputName1">Harga</label> --}}
                                <input type="num" name="price" class="form-control" value="{{ $data->price }}">
                            </div>

                            <div class="form-group">
                                {{-- <label for="exampleTextarea1">Keterangan Produk</label> --}}
                                <input type="text" name="description" class="form-control" value="{{ $data->description }}">
                            </div>
                            <div class="form-group">
                                <label>Gambar Produk lama</label>
                                <img src="foodimage/{{ $data->image }}" width="200px" alt="foto produk">
                            </div>
                            <div class="form-group">
                                <label>Foto Baru</label>
                                <input type="file" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary btn-icon-text" value="Save"><i
                                    class="ti-file btn-icon-prepend"></i>Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
