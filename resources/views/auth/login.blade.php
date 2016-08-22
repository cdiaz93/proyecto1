@extends('layouts.app')

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>

<div class="login-container">
 <div class="row">
     <div class="col-md-12">
         <div class="text-center m-b-md">
             <h3>SISTEMA DE LOGEO</h3>
         </div>


         <div class="hpanel">
             <div class="panel-body">
                <img src="{{ asset('assets/img/sagaz.jpg') }}" class="img-responsive center-block">
                <br></br>
                 <!-- <form action="#" id="loginForm"> --> 
                 <!--  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}"> -->
                 {!! Form::open(array('url' => '/login', 'method' => 'POST')) !!}
                 {!! Form::token() !!}

                
                 
                  <div class="form-group">
                      <!-- <label class="control-label" for="username">Username</label> -->
                      {!! Form::label('email', 'Correo Electronico', array('class' => 'control-label', 'for' => 'username')) !!}
                      <!-- <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control"> -->
                      {!! Form::text('email',null, array('class' => 'form-control', 'placeholder' =>'ejemplo@gmail.com')) !!}

                       @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                           </span>
                        @endif

                      <span class="help-block small">Su nombre de usuario única para APP</span>
                  </div>

                  <div class="form-group">
                      <!-- <label class="control-label" for="password">Password</label> -->
                      {!!  Form::label('password', 'Contraseña', array('class' => 'control-label', 'for' => 'password' )) !!}
                      <!-- <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control"> -->
                       {!! Form::password('password', array('class' => 'form-control', 'title' => 'Please enter your password',  'id' => 'password', 'placeholder' =>'******')) !!}
                      <span class="help-block small">Su contrase&ntilde;a segura</span>
                  </div>

                  <div class="checkbox">
                     <!-- <input type="checkbox" class="i-checks" checked> -->
                    {!! Form::checkbox('name', 'value',true, array('class' => 'i-checks')) !!}
                      Recordar login
                      <p class="help-block small">(Si se trata de un equipo privado)</p>
                   </div>

                   <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
         
                    </br>
                    <!-- <button class="btn btn-success btn-block">Login</button> -->
                    {!!  Form::submit('Login!', array('class' => 'btn btn-success btn-block')) !!}
              
                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@extends('layouts.foot')