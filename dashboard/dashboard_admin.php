<?php 
	include 'navbar-admin.php';
?>
<div class="d-flex">
<h4 class=" mt-3 ms-3">Dashboard Admin</h4>

</div>

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
    <!-- Bagian Konten-->
<div class="container" id="data">
<div class=" row mt-2">
<div class=" pt-3 pb-3 col-2 ">
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn btn-outline-primary">Home</button>
  <button type="button" class="btn btn-outline-primary">Contact</button>
  <button type="button" class="btn btn-outline-primary">Notification</button>
</div>
</div>


</div>
</div>
<!-- Data Siswa -->
    <div class="container mt-3 mb-3">
		<div class="card" style=" padding:15px;">
			<div class="card-body" >

           
			<div class="row">

            <div class="card ms-2 mb-3" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Data Jumlah Siswa</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jumlah Seluruh Siswa saat ini adalah</h6>
                </div>
			</div>

            <div class="card ms-2 mb-3" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Data Siswa yang izin Pulang</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jumlah Seluruh Siswa yang Pulang adalah</h6>
                </div>
			</div>

            <div class="card ms-2 mb-3" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Data Siswa yang Izin Tidak Hadir</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Jumlah Seluruh Siswa yang Tidak Hadir adalah</h6>
                </div>
			</div>
  
			</div>
		</div>
    </div>

    <div class="d-flex">
<h4 class=" mt-3 ms-3 mt-3"  id="tabel_tidakhadir">Area Tabel Data</h4>
</div>

                <!-- Area Tabel Tidak Hadir-->
                <div class="container mt-3 mb-3 ">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        Data Siswa Tidak Hadir
                    </div>
                    <div class="card-body">

                    <div class="d-flex m-4">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="Cari" placeholder="Cari Data" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cari..</button>
                        </form>
                    </div> 
                    </div>

                    <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">no</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
            </table>
                    </div>
                </div>
                </div>

                  <!-- Area Tabel Tidak Hadir-->

                  <div class="d-flex">
<h4 class=" mt-3 ms-3 mt-3"  id="tabel_izinpulang">Area Tabel Data</h4>
</div>

                <!-- Area Tabel Pulang-->
                <div class="container mt-3 mb-3 ">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        Data Siswa Pulang
                    </div>
                    <div class="card-body">

                    <div class="d-flex m-4">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                        <input class="form-control me-2" type="Cari" placeholder="Cari Data" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Cari..</button>
                        </form>
                    </div> 
                    </div>

                    <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">no</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
            </table>
                    </div>
                </div>
                </div>

                  <!-- Area Tabel Pulang-->

            </div>
            </div>
            
              <!-- Contact -->
            
            <div class="pt-1 pb-1 mt-3 ms-3">
                <div class="text-center justify-content-center">
                        <div class="card-header">
                           <img src="" class="col-2 mt-4 mb-4" alt="">
                           <h3 class="text_header">Nama dan Biodata singkat</h3>
                        </div>
                        <div class="row text-center text-md-left">
                     <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3  left-text">
                        <h5 class="text-uppercase mb-4 font-weight-bold text_header">adinda Ridha Salsabila</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3  left-text">
                        <h5 class="text-uppercase mb-4 font-weight-bold text_header">Muhammad Hafi Ilham</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3  left-text">
                        <h5 class="text-uppercase mb-4 font-weight-bold text_header">Reihan</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3  left-text">
                        <h5 class="text-uppercase mb-4 font-weight-bold text_header">Louis</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                        </div>
            </div>

            </div>
	</div>
		</div>
<?php 
	include 'footer.php';
?>