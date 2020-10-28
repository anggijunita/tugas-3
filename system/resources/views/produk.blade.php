@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row row-cols-1 row-cols-md-3">

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/suzuki1.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Suzuki Ertiga GA</h5>
			        <p class="card-text">Mobil keluarga yang satu ini cukup laris manis, namun penjualannya masih jauh dibawah Xenia, Avanza, dan Xpander.</p>
			        <p class="text-danger">Rp 193.000.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/suzuki2.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Suzuki Karimun Wagon R GA</h5>
			        <p class="card-text">Karimun Wagon R adalah mobil LCGC (Low Cost Green Car andalan Suzuki.</p>
			         <p class="text-danger">Rp 110.000.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/suzuki3.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Suzuki APC Arena Blind Van</h5>
			        <p class="card-text">Suzuki hanya menyediakan satu jenis transmisi, yaitu manual. Sedangkan untuk jantung pacunya ditenagai mesin 1.493 cc dengan tenaga 94.5 PS dan torsi 126 Nm.</p>
			        <p class="text-danger">Rp 147.000.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/honda1.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">MObil Honda Brio S M/T</h5>
			        <p class="card-text">Inilah mobil Honda termurah di Indonesia. Harga mobil ini dibanderol mulai Rp. 139 Jutaan.</p>
			        <p class="text-danger">Rp. 139.000.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/honda2.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Honda Brio RS M/T</h5>
			        <p class="card-text"> Honda sudah melengkapinya dengan Side Skir, Tailgate Spoiler dengan LED Mount Stop Lamp, dan bumpe belakang yang dilengkapi diffuser.</p>
			        <p class="text-danger">Rp. 175.000.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/honda3.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Honda Jazz M/T</h5>
			        <p class="card-text">Sebagai salah satu City Car terbaik di Indonesia, Honda Jazz menawarkan performa mesin bertenaga yang ditenagai mesin 1.5 Liter 4 Silinder segaris yang mampu mengeluarkan tenaga sebesar 120 PS dan torsi 145 Nm. </p>
			        <p class="text-danger">Rp. 236.000.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/toyota1.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Toyota All New Rush G</h5>
			        <p class="card-text">Harga mobil Toyota ini dibanderol mulai Rp. 242 Jutaan dan sudah dilengkapi ruang kabin yang lega dengan tiga baris kursi untuk menampung 7-8 penumpang.</p>
			        <p class="text-danger">Rp. 242.150.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/toyota2.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Toyota Fortuner 2.4 G Diesel (4×2)</h5>
			        <p class="card-text">Walaupun harga mobil Toyotav Fortuner sangat mahal, namun mobil ini laris manis diburu konsumen kelas menengah ke atas.</p>
			         <p class="text-danger">Rp. 471.850.000 </p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/toyota3.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title"> Mobil Toyota Toyota C-HR Single Tone</h5>
			        <p class="card-text">Desain modern dengan lekukan body agresif dan futuristik menjadi salah satu kelebihan Toyota C-HR.</p>
			        <p class="text-danger">Rp. 488.650.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->
<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/nissan1.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Nissan Livina E</h5>
			        <p class="card-text">All New Livina menggunakan basis yang sama dengan Mitsubishi Xpander. Oleh karena itulah keduanya memiliki performa yang sama dengan tenaga sebesar 104 PS dan torsi 141 Nm.</p>
			        <p class="text-danger">Rp. 198.800.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini --><!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/nissan2.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Nissan March 1.2L</h5>
			        <p class="card-text">Nissan March menjadi mobil Nissan termurah di Indonesia.</p>
			        <p class="text-danger">Rp. 185.800.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini --><!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/nissan3.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Mobil Nissan Serena 2020 X</h5>
			        <p class="card-text">Nissan Serena akan bersaing melawan Toyota Voxy. Mobil ini sangat mewah dan cocok bagi masbro yang mencari mobil keluarga. Di dalamnya tersedia 3 baris kursi yang dibuat senyaman mungkin untuk memanjakan semua penumpangnya.
			        <p class="text-danger">Rp. 448.000.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->
			  

			</div>
    	</div>
    </div>
  </div>
</div>


@endsection