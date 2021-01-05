@extends('layout')

@section('content')
<div class="team-grid nakladnaya">
        <div class="container">     
       
            <div class="container" style="background-color: #fff; box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left: 8%; padding-bottom:30px;">
                
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Логин </p>
                    </div>
                    
                    <!-- first row -->
                    <div class="col-md-12">
                        <div class="leftpart">
                   
                        @if (session('status'))
                            <div class="alert alert-danger" role="alert" style="text-align:center;margin-top:0px;">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form action="/login" method="post">
                            {{csrf_field()}}
                            <div class="leftpartitem"> 
                                <h2>Email адрес:</h2>
                                <INPUT type="email" class="cabFormEdit" name="email" id="email" value="{{old('email')}}"/>                                 
                            </div>   
                            <div class="leftpartitem"> 
                                <h2>Пароль:</h2>
                                <INPUT type="password" class="cabFormEdit" name="password" id="password" value="" />                                 
                            </div>     
                            <div class="leftpartitem">
                                <h2>&nbsp;</h2>    
                                <INPUT type="submit" id="login" value="Войти"  style="font-weight:bold;background-color: #DF0707;"/>                
                            </div> 
                            <div class="leftpartitem">
                                <h2>&nbsp;</h2>
                                <button onclick="regform()" class="btn btn-light border rounded border-warning" 
                                type="button" data-dismiss="modal" 
                                style="font-size: 14px; background-color: #ffffff;">Регистрация</button>
                            </div>
                            </div>
                            <div>
                            <div class="leftpartitem" >
                                 
                                <input name="savepassword" type="checkbox" id="formCheck-1" checked>
                                <label for="formCheck-1">Запомнить</label>
                            </div>
                            
                            <div class="leftpartitem">
                                 
                                <label>Забыли пароль?</label>                
                            </div> 
                            </div>
                            <div class="leftpartitem" style="padding:0px 5px;width: 49%; display: inline-block; float:right;">
                                <img style="float:right; width: 40%; padding: 0px;" src="/assets/img/zovlogo.png"/>
                            </div>
                           
                            
                            <br/>
                            
                            </form>
                        </div>
                        
                    </div> 
                     
                       
                    
                   
                </div>
            </div>
        

            
                
            </div>    
    </div>

    
@endsection
