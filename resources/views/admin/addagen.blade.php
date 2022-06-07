@extends('admin.layouts.master')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Tambah Admin Atau Pelayan</h4>
                        <form action="{{ url('/uploadagen') }}" method="post" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                          <div class="form-group">
                            {{-- <label for="exampleInputUsername1">Nama</label> --}}
                            <input type="text" name="name" class="form-control" placeholder="Nama Agen/Pelayan">
                          </div>
                          <div class="form-group">
                            {{-- <label for="exampleInputEmail1">Posisi</label> --}}
                            <input type="text" name="speciality" class="form-control"  placeholder="Posisi Agen/Pelayan">
                          </div>
                          <div class="form-group">
                            <label for="Foto Profil">Foto Profil</label>
                            <input type="file" name="image" class="form-control"  placeholder="Foto Profil">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputConfirmPassword1">link akun sosial Media (beri tanda " - " jika tidak memiliki akun)</label>
                            <input type="text" name="facebook" class="form-control"  placeholder="link akun facebook">
                          </div>
                          <div class="form-group">
                            {{-- <label for="exampleInputConfirmPassword1">Akun Instagram</label> --}}
                            <input type="text" name="instagram" class="form-control" placeholder="link akun instagram">
                          </div>
                          <div class="form-group">
                            {{-- <label for="exampleInputConfirmPassword1">Akun Twiter</label> --}}
                            <input type="text" name="twitter" class="form-control" placeholder="link akun twiter">
                          </div>
                          <button type="submit" class="btn btn-info btn-icon-text" value="Save"><i class="mdi mdi-account-plus"></i>Tambah</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
