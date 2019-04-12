@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <!--                    @can('admin')
                        <center>
                            <h1>Parabéns</h1>
                            <img src="admin.jpg" alt="Parabéns" style="width: 100px;">
                            <h3>Voçê está Logado como Administrador!</h3>
                        </center>
                    @endcan -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
