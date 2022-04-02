@extends('admin/layout')

@section('title', 'Detail Part Software | Sofosrobotics')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data Detail Software</h5>
                        </div>
                        <div class="col-lg-6">
                            <div class="btn-group btn-group-pill float-end" role="group" aria-label="Basic example">
                                <a href="{{ url('#') }}" class="btn btn-primary" type="button">Tambah Data</a>
                                <a href="{{ url('part') }}" class="btn btn-info" type="button">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th>Nama Barang</th>
                                <th>Pilihan</th>
                                <th>Komponen</th>
                                <th>Harga</th>
                                <th>Harga Jasa</th>
                                <th>Gambar</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Database</td>
                                <td>Acces/Tidak Acces</td>
                                <td>ESP 32</td>
                                <td>Rp 500.000</td>
                                <td>Rp 5.000.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Web Based</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>ESP 32 internet acces</td>
                                <td>Rp 500.000</td>
                                <td>Rp 5.000.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mobile Based</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>HC05</td>
                                <td>Rp 250.000</td>
                                <td>Rp 5.000.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bluetooth Access</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>HC05</td>
                                <td>Rp 250.000</td>
                                <td>Rp 200.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Remote Access</td>
                                <td>Infrared/ Radio Signal/ Bluetooth/ Tidak Menggunakan</td>
                                <td>Infrared</td>
                                <td>Rp 200.000</td>
                                <td>Rp 200.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection

