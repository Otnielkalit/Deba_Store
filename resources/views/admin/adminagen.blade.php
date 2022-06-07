@extends('admin.layouts.master')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h2 class="card-title">Data Agen dan Pelayan DebaStore</h2>
                        <p class="card-description">
                            <a href="{{ url('/addagen') }}"><button type="button" class="btn btn-info btn-icon-text">Tambah Agen/Pelayan<i class="mdi mdi-account-plus"></i></button></a>
                          </p>
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Akun SosMed</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $data)
                              <tr>
                                <td class="py-1">
                                  <img style="height:70px ; width:70px;" src="agenimage/{{ $data->image }}" alt="image"/>
                                </td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->speciality }}</td>
                                <td>
                                    <a href="{{ $data->facebook }}" target="_blank"><button type="button" class="btn btn-social-icon btn-outline-facebook"><i class="ti-facebook"></i></button></a>
                                    <a href="{{ $data->instagram }}" target="_blank"><button type="button" class="btn btn-social-icon btn-outline-twitter"><i class="ti-twitter-alt"></i></button></a>
                                    <a href="{{ $data->twitter}}" target="_blank"><button type="button" class="btn btn-social-icon btn-outline-dribbble"><i class="mdi mdi-instagram"></i></button></a>
                                </td>
                                <td>
                                    <a href="{{ url('/deleteagen', $data->id) }}"><button type="submit" class="btn btn-danger btn-icon-text"><i class="mdi mdi-delete-forever"></i>Delete</button></a>
                                    <a href="{{ url('/updateagen', $data->id) }}"><button type="submit" class="btn btn-info btn-icon-text"><i class="mdi mdi-key"></i>Edit</button></a>
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
