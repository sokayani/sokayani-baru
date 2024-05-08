@extends('landing.tamplate')

@section('product')
    <div class="container">
        <div class="row w-100 my-lg-5 bg-info rounded">
            <div class="w-100 my-5">
                <div class="row justify-content-between align-items-center">              
                    <div class="col-auto">
                        <!-- Tombol "Halaman Admin" -->
                        <a href="{{ route('posts.index') }}" class="btn btn-success">Halaman Pengguna Admin</a>
                    </div>
                    <div class="col-auto">
                        <!-- Judul "PRODUCTS" -->
                        <h1 class="fw-bold">PRODUCTS</h1>
                    </div>
                    <div class="col-auto">
                        <!-- Tombol "Halaman Pengguna Mercant" -->
                        <a href="{{ route('posts.index') }}" class="btn btn-success">Halaman Pengguna Merchant</a>
                    </div>
                </div>
                <div class="border border-top border-black mx-auto mt-3" style="width: 100px"></div>
                <div class="grid mt-5 mx-3">
                    <div class="row row-gap-4">
                        @foreach ($products as $product)
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ $product['image'] }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title my-auto">{{ $product['menu'] }}</h5>
                                            <p class="bg-info px-3 py-1 rounded fw-semibold my-auto">{{ $product['price'] }}</p>
                                        </div>
                                        <p class="card-text mt-3" style=" overflow: hidden;
                                            display: -webkit-box;
                                            -webkit-line-clamp: 3; /* number of lines to show */
                                            line-clamp: 3;
                                            -webkit-box-orient: vertical;">
                                            {{ $product['description'] }}
                                        </p>
                                        <a href="#" class="btn btn-primary w-100">Pesan Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
