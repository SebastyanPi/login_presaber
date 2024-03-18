@extends('layouts.app')

@section('content')
<section class="paddingTopNav" style="  background-image: url('assets/img/banner-bg.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class='p-3 my-5 '>
                    <div class='text-center py-3'>  
                        <h2>¿Quieres registrarte?</h2>
                        <span>Contacta con el Administrador!</span>
                        <a href="{{ route('login') }}" class="btn btn-primary">Ir Login</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <img src="{{ env('APP_URL') }}assets/img/header-img2.png"  alt="">
            </div>
        </div>
    </div>
</section>

@endsection
