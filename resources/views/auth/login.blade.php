@extends('layouts.app')

@section('content')
<section class="paddingTopNav" style="  background-image: url('assets/img/banner-bg.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class='p-3 my-5 '>
                    <div class='text-center py-3'>  
                        <h2>Campus de Formación</h2>
                        <span>Evalua tus competencias realizando simulacros tipo icfes.</span>
                    </div>
                    <form class='loginForm' action="{{ route('login.post') }}" method="POST" >
                        @csrf
                        <div>
                            <input name="nit"  type='number' placeholder='Usuario' id='user' />
                        </div>
                        <div>
                            <input  name="password" type='password' label='Password' placeholder='Contraseña' id='password' />
                        </div>
                        <div>
                            <button class='buttonLogin'> Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6 col-xs-12">
                <img src="{{ env('APP_URL') }}assets/img/header-img2.png"  alt="">
            </div>
        </div>
    </div>
</section>

@endsection
