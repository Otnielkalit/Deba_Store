@extends('admin.layouts.master')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Customer Pesan Tempat</h3>
                            </p>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th><h5 class="text-center">Nama</h5></th>
                                            <th><h5 class="text-center">Email</h5></th>
                                            <th><h5 class="text-center">No Telp/WA</h5></th>
                                            <th><h5 class="text-center">No. Meja</h5></th>
                                            <th><h5 class="text-center">Tanggal Datang</h5></th>
                                            <th><h5 class="text-center">Jam Datang</h5></th>
                                            <th><h5 class="text-center">Pesan</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td class="text-center">{{ $data->name }}</td>
                                            <td class="text-center">{{ $data->email }}</td>
                                            <td class="text-center">{{ $data->phone }}</td>
                                            <td class="text-center">{{ $data->guest }}</td>
                                            <td class="text-center">{{ $data->date }}</td>
                                            <td class="text-center">{{ $data->time }}</td>
                                            <td class="text-center">{{ $data->message }}</td>
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
