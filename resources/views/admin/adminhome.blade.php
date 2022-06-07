@extends('admin.layouts.master')

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="font-weight-bold">Horas {{ Auth::user()->name }}</h3>
                            <div class="row">
                                <div class="col-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
