@extends('admin.layouts.master')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Produk Yang Sedang Di Jual</h4>
                            <p class="card-description">
                                <a href="{{ url('addmenu') }}"><button type="button" class="btn btn-info btn-icon-text">Tambah Menu<i class="mdi mdi-bookmark-plus"></i></button></a>
                              </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center"><h4>Nama Produk</h4></th>
                                            <th class="text-center"><h4>Harga</h4></th>
                                            <th class="text-center"><h4>Deskripsi</h4></th>
                                            <th class="text-center"><h4>Gambar Produk</h4></th>
                                            <th class="text-center"><h4>Action</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $data)

                                        <tr>
                                            <td class="text-center"><h5>{{ $data->title }}</h5></td>
                                            <td class="text-center"><h5>{{ $data->price }}</h5></td>
                                            <td class="text-center"><h5>{{ $data->description }}</h5></td>
                                            <td class="text-center"><img src="/foodimage/{{ $data->image }}" style="height: 130px; width:130px; align-item:center;" alt="produk"></td>
                                            <td class="text-center">
                                                <a href="{{ url('/deletemenu', $data->id) }}"><button type="button" class="btn btn-danger btn-icon-text"><i class="mdi mdi-delete"></i> Delete</button></a>
                                                <a href="{{ url('/updateview',$data->id) }}"><button type="button" class="btn btn-warning btn-icon-text"><i class="ti-reload btn-icon-prepend"></i>Edit</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
