@extends('admin/layout')

@section('title', 'Detail Part Fitur | Sofosrobotics')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Data Detail Fitur</h5>
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
                                <td>Line Tracking</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Line Sensor</td>
                                <td>Rp 400.000</td>
                                <td>Rp 1.000.000</td>
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
                                <td>Wall Tracking</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>SRF</td>
                                <td>Rp 800.000</td>
                                <td>Rp 1.000.000</td>
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
                                <td>Camera Tracking</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Camera Module</td>
                                <td>Rp 1.300.000</td>
                                <td>Rp 3.500.000</td>
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
                                <td>GPS Tracking</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>GPS Module</td>
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
                                <td>5</td>
                                <td>Lidar</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Lidar</td>
                                <td>Rp 6.500.000</td>
                                <td>Rp 800.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Rfid</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>RFID reader</td>
                                <td>Rp 3,500.000</td>
                                <td>Rp 800.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Kompas</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Kompas Module</td>
                                <td>Rp 1,200.000</td>
                                <td>Rp 500.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Gyro + Accelero</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Navigation Module</td>
                                <td>Rp 5,600.000</td>
                                <td>Rp 800.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Rotary Encoder</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Rotary OMRON</td>
                                <td>Rp 1,500.000</td>
                                <td>Rp 800.000</td>
                                <td> gambar not found </td>
                                <td>
                                    <div class="btn-group btn-group-square" role="group" aria-label="">
                                        <a href="{{ url('#')}}" class="btn btn-primary" title="Ubah Data">Edit</a>
                                        
                                        <a href="{{ url('#')}}" class="btn btn-danger" title="Detail Data">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Voice Recognition</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Voice Module</td>
                                <td>Rp 350.000</td>
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
                                <td>11</td>
                                <td>Sound</td>
                                <td>Menggunakan/ Tidak Menggunakan</td>
                                <td>Speaker</td>
                                <td>Rp 850.000</td>
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
                                <td>12</td>
                                <td>Custom Order</td>
                                <td>Text</td>
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

