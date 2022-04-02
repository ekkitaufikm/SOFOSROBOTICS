@extends('main')

@section('title', 'sofosrobotics')
    
@section('content')

<main id="main">
    <form>
        <select class="select2" style="width: 25%" id="provinsi">
            <option value="">---- Pilih Provinsi ----</option>
            <?php
                include 'db.php';
                $query = "select * from provinces";
                $result = $konek->query($query);
                if (!$result) {
                    printf("Errormessage: %s\n", $konek->error);
                }
                while($data = $result->fetch_array(MYSQLI_ASSOC)){
            ?>
            <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
            <?php
                }
            ?>
        </select><br/><br/>
        <select class="select2" style="width: 25%" id="kabupaten">
            <option value="">---- Pilih Kabupaten ----</option>
        </select><br/><br/>
        <select class="select2" style="width: 25%" id="kecamatan">
            <option value="">---- Pilih Kecamatan ----</option>
        </select>
    </form>
    
</main>

@endsection