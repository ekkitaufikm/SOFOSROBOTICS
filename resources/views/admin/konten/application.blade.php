@extends('admin/layout')

@section('title', 'Application | Sofosrobotics')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">Isi Deskripsi</h5>
                        </div>
                    </div>
                </div>
                <form action="https://resiq.id/lingkar/question/store" method="post">
                    <input type="hidden" name="_token" value="sxj9BwTpFVuYAAEDxtmulBRcfa0cepIL8wFz5yBI">                <div class="card-body">
                        <div class="form-group">
                            <label>Deskripsi Konten</label>
                            <textarea class="form-control" id="validationTextarea" required=""></textarea>
                        </div>
    
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection

