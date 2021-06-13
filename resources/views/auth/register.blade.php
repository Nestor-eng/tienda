@extends('layouts.users')
@section('user-content')
<main class="main">
    <div class="container">
        <div class="row" style="margin-top: 50px; margin-bottom: 50px">
            @if(Session::has('success'))
                <div class="col-md-12 form-group">
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

        
            <div class="col-md-12">
                <h2 class="text-center title mb-2">Registro</h2>
        
                <form action="{{route('registro.rapido')}}" method="POST" autocomplete="off">
                    @csrf
                    <!--<label for="register-email">Correo Electróninco <span class="required">*</span></label>-->
                      <input type="text" class="form-input form-wide mb-2" id="register-name" required autocomplete="new-text" name="name" placeholder="Nombre(s)" onblur="this.value = this.value.toUpperCase();">

                        @if ($errors->has('name'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('name') }}</span>
                        @endif
                        
                         <input type="text" class="form-input form-wide mb-2" id="register-apellidoP" required autocomplete="new-text" name="apellidoP" placeholder="Apellido Paterno" onblur="this.value = this.value.toUpperCase();">

                        @if ($errors->has('apellidoP'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('apellidoP') }}</span>
                        @endif
                    <input type="text" class="form-input form-wide mb-2" id="register-apellidoM"  autocomplete="new-text" name="apellidoM" placeholder="Apellido Materno" onblur="this.value = this.value.toUpperCase();">

                        @if ($errors->has('apellidoM'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('apellidoM') }}</span>
                        @endif
                    <input type="email" class="form-input form-wide mb-2" id="register-email" required autocomplete="new-text" name="email" placeholder="Correo Electrónico">

                        @if ($errors->has('email'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('email') }}</span>
                        @endif
                        <input type="text" class="form-input form-wide mb-2" id="register-username" required autocomplete="new-text" name="username" placeholder="Nombre de Usuario">

                        @if ($errors->has('username'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('username') }}</span>
                        @endif
                        
                    <!--<label for="register-password">Contraseña <span class="required">*</span></label>-->
                    <input type="password" class="form-input form-wide mb-2" id="register-password" required autocomplete="new-password" name="password" placeholder="Contraseña">

                        @if ($errors->has('password'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('password') }}</span>
                        @endif
        
                   <div class="col-lg-12">
                        <button type="submit" class="btn btn-success btn-block">Registrar</button>
        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection