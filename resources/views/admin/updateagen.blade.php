@extends('admin.layouts.master')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Data Agen / Pelayan</h4>
                            <form action="{{ url('/updatefoodagen', $data->id) }}" method="Post" enctype="multipart/form-data" class="form-sample">
                                @csrf
                                <p class="card-description">Personal info</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Agen / Pelayan</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control" value="{{ $data->name }}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Foto Lama</label>
                                            <div class="col-sm-9">
                                                <img src="/agenimage/{{ $data->image }}" alt="Profil" width="120px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Posisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="speciality" class="form-control" value="{{ $data->speciality }}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Foto Baru</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image" class="form-control" placeholder="Masukkan Foto Baru" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-description">
                                   Sosial Media (NB: jika tidak ada akun sosial media beri tanda " - ")
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Facebook</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" name="facebook" value="{{ $data->facebook }}" aria-label="Recipient's username">
                                                      <div class="input-group-append">
                                                        <a href="{{ $data->facebook }}" class="btn btn-sm btn-facebook" target="_blank"><button  type="button">
                                                          <i class="ti-facebook"></i>
                                                        </button></a>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">

                                            <div class="col-sm-9">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Instagram</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" name="instagram" value="{{ $data->instagram }}" aria-label="Recipient's username">
                                                      <div class="input-group-append">
                                                        <a href="{{ $data->instagram }}" class="btn btn-sm btn-dribbble" target="_blank"><button  type="button">
                                                          <i class="ti-instagram"></i>
                                                        </button></a>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">

                                            <div class="col-sm-9">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Twitter</label>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" name="twitter" value="{{ $data->twitter }}" aria-label="Recipient's username">
                                                      <div class="input-group-append">
                                                        <a href="{{ $data->twitter }}" class="btn btn-sm btn-twitter"  target="_blank"><button  type="button">
                                                          <i class="ti-twitter"></i>
                                                        </button></a>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-icon-text" value="Save">Simpan<i class="mdi mdi-arrow-up-bold"></i></button>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
