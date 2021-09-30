@extends('adminlte::page')
@section('content')
<div class="container-fluid">
    <br>

    <div class="card">
        <div class="card-header">Master Produk</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class=" info-box bg-danger">
                        <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Product</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                    </a>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <a href="#" class="info-box bg-success">
                        <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Transaction</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                    </a>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4">
                    <a href="#" class="info-box bg-gradient-warning">
                        <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Highest</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Price</th>
                        <th>Created</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection