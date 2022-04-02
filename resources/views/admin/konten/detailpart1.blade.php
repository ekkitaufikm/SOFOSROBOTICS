@extends('admin/layout')

@section('title', 'Detail Part Mekanik | Sofosrobotics')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data Detail Mekanik</h5>
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
                                <td>Daya Angkut</td>
                                <td>50,100,200,350 kg</td>
                                <td>Torsi motor sesuai dengan pilihan</td>
                                <td>50=45.000.000, 100=60.000.000, 200=75.000.000, 350=90.000.000</td>
                                <td>Rp 15.000.000</td>
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
                                <td>Warna</td>
                                <td>Pilihan Warna</td>
                                <td> - </td>
                                <td> - </td>
                                <td> - </td>
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

