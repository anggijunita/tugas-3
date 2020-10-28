@extends('template.base')
@section ('content')
 <div class="jumbotron">
  <h1 class="display-4">Selamat datang di Toko Jual Mobil Online</h1>
  <p class="lead">Di Toko Jual Mobil online kami terdapat banyak mobil dengan harga yang bervariasi  dan di toko Jual Mobil online kami juga mengadakan promo, jangan sampai kelewatan. Happy Shopping dan Terimaksih Telah Berkunjung ke toko kami.</p>
  <hr class="my-4">
  <p>Toko Jual Mobil Online Kami ini sudah sangat terpercaya dan menjual produk dengan kualitas bagus di seluruh Indonesia.</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/produk')}}" role="button">Mulai Belanja</a>
</div>
 @endsection