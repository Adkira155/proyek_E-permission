<?php 
	include 'navbar-user.php';
?>
    <!-- Bagian Konten-->
<div class="container">
<div class=" row mt-3">

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Nama Pengguna</li>
  </ol>
</nav>

</div>
</div>
<!-- data diri user -->
    <div class="container mt-3 mb-3" id="data">
		<div class="card" style=" padding:15px;">
			<div class="card-body bglight">

			<div class="row">
			<div class="col-2 card-body"><img src=""></div>

				<div class="ms-3 card-body col-lg-8 bg-light data">
				<h5>Nama User</h5>
				<p >xxxxxxxxxx</p>
				<br>
				<p >xxxxxxxxxx</p>
				<p >xxxxxxxxxx</p>
				<p >xxxxxxxxxx</p>
				</div>
			</div>
  
			</div>
		</div>
    </div>


	<!-- Area Izin -->
      <div class="card m-5" id="buat">
        <div class="card-body bglight">
                <h5 class="card-title ">Membuat Izin</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Hic atque fugit odit aspernatur nam eos quibusdam dicta! Molestiae eos alias voluptate excepturi fugit 
                  cumque ad totam officia dolorum rem. Voluptas.
                    </h6>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <div class="btn-group dropend ">
                    <button type="button" class="btn dropdown-toggle justify-content-md-end btn-warning text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                     Membuat Perizinan Untuk
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Pulang / Datang Terlambat</a></li>
                      <li><a class="dropdown-item" href="#">Izin Tidak Hadir</a></li>
                    </ul>
                  </div>
                    </div>
      </div>
    </div>

	<!-- Area Tunggu Konfirmasi -->

      <div class="card m-5" id="tunggu">
        <div class="card-body bglight">
                <h5 class="card-title ">Menunggu Konfirmasi</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Hic atque fugit odit aspernatur nam eos quibusdam dicta! Molestiae eos alias voluptate excepturi fugit 
                  cumque ad totam officia dolorum rem. Voluptas.
                    </h6>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button class="btn me-md-4  btn-info" type="button"><a class=" text-dark text-decoration-none" href="tbl_tunggu.php">Cek Sekarang <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                      <style>svg{fill:#000000}</style>
                      <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                    </svg></a></button>
                    </div>
      </div>
    </div>

	<!-- Area Diizinkan -->
      <div class="card m-5" id="terima">
        <div class="card-body bglight">
                <h5 class="card-title">Izin Diizinkan</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Hic atque fugit odit aspernatur nam eos quibusdam dicta! Molestiae eos alias voluptate excepturi fugit 
                  cumque ad totam officia dolorum rem. Voluptas.
                    </h6>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button class="btn me-md-4 btn-success" type="button"><a class=" text-dark text-decoration-none" href=".php">Cek Sekarang <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                      <style>svg{fill:#000000}</style>
                      <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                    </svg></a></button>
                    </div>
      </div>
    </div>

    <!-- Area Ditolak -->
    <div class="card m-5" id="tolak">
        <div class="card-body bglight">
                <h5 class="card-title">Izin Ditolak</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Hic atque fugit odit aspernatur nam eos quibusdam dicta! Molestiae eos alias voluptate excepturi fugit 
                  cumque ad totam officia dolorum rem. Voluptas.
                    </h6>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button class="btn me-md-4 btn-danger" type="button"><a class=" text-dark text-decoration-none" href=".php">Cek Sekarang <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                      <style>svg{fill:#000000}</style>
                      <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                    </svg></a></button>
                    </div>
      </div>
    </div>


                  <!-- About Us -->
            
                  <div class="pt-1 pb-1 mt-3 ms-3" >
                <div class="text-center justify-content-center">
                        <div class="row text-center text-md-left">
                     <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3  left-text">
                        <h5 class="text-uppercase mb-4 font-weight-bold text_header">lorem</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3  left-text">
                        <h5 class="text-uppercase mb-4 font-weight-bold text_header">lorem</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>

                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3  left-text">
                        <h5 class="text-uppercase mb-4 font-weight-bold text_header">lorem</h5>
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