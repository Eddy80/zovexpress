@extends('layout') 
@section('content')
<div class="team-grid nakladnaya">
        <div class="container">     
       
            <div class="container" style="background-color: #fff; box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left: 8%; padding-bottom:30px;">
                
               

            @if (session('status'))
                <div class="alert alert-danger" role="alert" style="text-align:center;margin-top:0px;">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="/relogin">
                @csrf
                <h2 class="sr-only">Вход в кабинет</h2>
                <div class="illustration">
                  <img src="assets/img/logo.png">
                  
                </div>
                <div class="leftpartitem">
                  <h2>Email:</h2>
         
                  <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="leftpartitem">
                  <h2>Пароль:</h2>
                  <input placeholder="Parol" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="leftpartitem" style="width:110px;">
                <h2>&nbsp;</h2>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  &nbsp;Запомнить 
                </label>
                </div>

                <div class="leftpartitem" style="width:120px;">
                  <h2>&nbsp;</h2>
                  <button class="btn btn-primary btn-block" type="submit" style="font-weight:bold;background-color: #DF0707;">
                  Войти
                  </button>
                </div>

                <div class="leftpartitem">
                <h2>&nbsp;</h2>
                  <button onclick="regform()" class="btn btn-light border rounded border-warning" 
                                type="button" data-dismiss="modal" style="font-size: 14px; background-color: #ffffff;">
                    Регистрация
                  </button>
                </div>

                @if (Route::has('password.request'))
                    <a class="forgot" href="{{ route('password.request') }}">
                      Забыли email или пароль?  {{-- {{ __('Forgot Your Password?') }} --}}
                    </a>
                @endif

            </form>
  

  </div>
  </div>
  </div>
  </div>

@endsection
