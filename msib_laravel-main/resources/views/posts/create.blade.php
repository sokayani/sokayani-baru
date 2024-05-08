@extends('layouts.master')
@section('content')
<div class="mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h2>Tambah Product</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-dark ms-3">Tambah Product</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">Plese check the form below for errors</div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama">
                    {{-- check error --}}
                    @if ($errors->has('nama'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control {{$errors->has('stock') ? 'is-invalid' : ''}}" id="stock" name="stock">
                    {{-- check error --}}
                    @if ($errors->has('stock'))
                        <div class="invalid-feedback">
                            {{ $errors->first('stock') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat</label>
                    <input type="number" class="form-control {{$errors->has('berat') ? 'is-invalid' : ''}}" id="berat" name="berat">
                    {{-- check error --}}
                    @if ($errors->has('berat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('berat') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="number" class="form-control {{$errors->has('harga') ? 'is-invalid' : ''}}" id="harga" name="harga">
                    {{-- check error --}}
                    @if ($errors->has('harga'))
                        <div class="invalid-feedback">
                            {{ $errors->first('harga') }}
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <textarea class="form-control {{$errors->has('kondisi') ? 'is-invalid' : ''}}" id="kondisi" name="kondisi" rows="3"></textarea>
                    @if ($errors->has('kondisi'))
                        <div class="invalid-feedback">
                            {{ $errors->first('kondisi') }}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark w-100">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection