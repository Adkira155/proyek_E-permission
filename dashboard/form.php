<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <!-- bootstrap -->
    <link rel="stylesheet" href="./assets/app/css/bootstrap.min.css">
	<!-- font awesome -->
    <link rel="stylesheet" href="./assets/icons/css/font-awesome.css"> 
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
<div class="card" style="width: 65%; left: 16.5%; margin-top: 0.5%; border-radius: 0; background: #fafafa;">

<div class="card-header text-center text_header bg text-white p-3" style="border-radius: 0;">
    Form Perizinan Tidak Hadir
  </div> 

  <div class="card-body m-3">
<form>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
            <select class="form-select bg text-white" aria-label="Default select example">
                <option value="Pengembangan Perangkat Lunak dan Gim">PPLG</option>
                <option value="Broadcasting">BCT</option>
                <option value="Pekerjaan Sosial">PS</option>
                <option value="Teknik Furniture">TF</option>
                <option value="Teknik Kimia Industri">TKI</option>
                <option value="Desain Komunikasi Visual">DKV</option>
                <option value="Teknik Jaringan Komputer dan Telekomunikasi">TJKT</option>
            </select>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputEmail3" placeholder="Ex: 10">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
            <select class="form-select bg text-white" aria-label="Default select example">
                <option value="Izin">Izin</option>
                <option value="Sakit">Sakit</option>
            </select>
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Alasan</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan detail"></textarea>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Surat keterangan dokter</label>
    <div class="col-sm-10">
    <input class="form-control" type="file" id="formFile">
    </div>
  </div>

  <div class="col-8 mx-auto">
  <button type="submit" class="bgron text-white" style=" padding:10px; border-radius: 15px; border:none;">Simpan Data</button>
    </div>
 
</form>


</div>
</div>  
</body>
</html>