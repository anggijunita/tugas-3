@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Suzuki</h5>
			        <p class="card-text text-muted"> Disini kami menyediakan Mobil Suzuki dengan berbagai variasi sesuai dengan yang diperlukan oleh pelanggan kami.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Honda </h5>
			        <p class="card-text text-muted">Mobil Honda Brio merupakan produk parbikan Honda yang memiliki tingkat penjualan tertinggi. Oleh karena itu mobil Honda Brio dapat menempati 10 mobil terlaris di Indonesia pada semester pertama 2018.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Toyota</h5>
			        <p class="card-text text-muted">Salah satu pabrikan mobil yang telah mengeluarkan berbagai kelas adalah Toyota. Yang paling diingat dari Toyota tentu adalah mobil Toyota Avanza yang menjadi primadona mobil kelas MPV. Ada pula mobil Toyota Alphard yang menjadi mobil premium di kelas MPV.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Nissan</h5>
			        <p class="card-text text-muted">Kami juga menjual mobil bermerek Nissan dengan berbagai macam pilihan dengan warna yang menarik sesuai dengan minat pelanggan.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

			</div>
    	</div>
    </div>
  </div>
</div>

@endsection