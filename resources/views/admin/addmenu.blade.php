@extends('admin.layouts.master')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambahkan Menu Terbaik Dari Deba Store</h4>
                            <form action="{{ url('uploadfood') }}" method="post" enctype="multipart/form-data"
                                class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    {{-- <label for="exampleInputName1">Nama Produk</label> --}}
                                    <input type="text" name="title" class="form-control" placeholder="Nama Produk">
                                </div>
                                <div class="form-group">
                                    {{-- <label for="exampleInputName1">Harga</label> --}}
                                    <input type="num" name="price" class="form-control" placeholder="Harga Produk">
                                </div>

                                <div class="form-group">
                                    {{-- <label for="exampleTextarea1">Keterangan Produk</label> --}}
                                    <input type="text" name="description" class="form-control"
                                        placeholder="Keterangan Produk">
                                </div>
                                <div class="form-group">
                                    <label>Gambar Produk</label>
                                    <input type="file" name="image">
                                </div>
                                <button type="submit" class="btn btn-primary btn-icon-text" value="Save"><i class="mdi mdi-plus-box"></i> Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
