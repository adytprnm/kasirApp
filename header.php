<header class="container-fluid bg-dark" style="position:fixed; z-index:99999;">
	<nav class="container navbar navbar-expand-sm bg-dark navbar-dark">
	  <div class="container-fluid">
		<a href="../dasbord" class="btn text-light">
		<h2>TOKO || ST 22</h2></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse  justify-content-end" id="collapsibleNavbar">
	      <ul class="navbar-nav">
			  <li class="nav-item">
				  <a class="nav-link btn-sm text-white rounded-3 px-3 mx-1 my-1" href="../penjualan"><img src="../gambar/penjualan2.svg">Penjualan</a>
				</li>
				<?php if($_SESSION['level']=="admin"){ ?>
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-3 mx-1 my-1" href="../produk"><img src="../gambar/produk1.svg" alt="">Produk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-3 mx-1 my-1" href="../pelanggan"><img src="../gambar/pelanggan.svg" alt="">Pelanggan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-3 mx-1 my-1" href="../petugas"><img src="../gambar/petugas1.svg" alt="">Petugas</a>
					</li>
					<?php } ?>
					<li class="nav-item">
						<a class="nav-link btn-sm text-white rounded-3 px-3 mx-1 my-1" href="../report"><img src="../gambar/laporan1.svg">Laporan</a>
					</li>
					<li class="nav-item">
					<a class="nav-link btn-sm text-white rounded-3 px-3 mx-1 my-1" href="../about"><img src="../gambar/info.svg"> About</a>
				  </li>
					<li class="nav-item">
	          <a class="nav-link btn-sm text-white rounded-3 px-3 mx-1 my-1" href="../logout.php"><img src="../gambar/logout1.svg">Logout</a>
	        </li>    
	      </ul>
	    </div>
	  </div>
	</nav>
</header>