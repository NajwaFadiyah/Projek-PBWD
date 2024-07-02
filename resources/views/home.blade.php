@extends('layout/aplikasi')

@section('konten')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Dashboard</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                    </form>
                </div>

                <div class="card-body">
                    <p>Selamat datang, {{ Auth::user()->name }}!</p>
                    <p>Anda berhasil login.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
