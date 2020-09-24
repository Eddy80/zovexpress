@extends('layout')

@section('content')

<div class="team-grid nakladnaya">
        <div class="container">
          
            
            

       
            <div class="container" style="background-color: #fff; box-shadow:0px 5px 5px 0px gray;">
                <div class="row">
                    <div class="col-md-12" style="margin-left:100px;margin-top:30px;">
                    <p><a href="/">Главная</a> > Накладная </p>
                    </div>
                    
                    <div class="col-md-8" style="margin-bottom: 30px;margin-left:100px;margin-top:0px;">
                        <div style="display:inline-block; margin-bottom: 20px;">
                            <div style="float:left;width:100px;margin-right:00px;">
                                <h2 style=" color: #777777;
                                            font-family: Roboto, sans-serif;
                                            font-size: 11px;
                                            margin-bottom: 10px;
                                            ">
                                            Страна:
                                </h2>
                                <SELECT name="countries">
                                    <OPTION value="Russia">Russia</OPTION>
                                </SELECT>
                            </div>     
                            <div style="float:left;width:170px;margin-right:20px;">
                                <h2 style=" color: #777777;
                                            font-family: Roboto, sans-serif;
                                            font-size: 11px;
                                            margin-bottom: 10px;
                                            ">
                                            Ваш персональный код:
                                </h2>
                                <INPUT type="text" name="personalcode" value=""/>                                 
                            </div>    
                            <div style="float:left;width:100px;">
                                <h2 style=" color: #777777;
                                            font-family: Roboto, sans-serif;
                                            font-size: 11px;
                                            margin-bottom: 10px;">
                                            Промокод:
                                </h2>
                                <INPUT type="text" name="personalcode" value=""/>                                 
                            </div>       
                        </div>
                    </div> 
                    <div class="col-md-4" style="min-height: 300px; padding-left: 0px;margin-bottom: 30px;">
                        
                        <!-- <div style=" height: 210px;width: 319px; border-radius: 25px 25px  25px 25px; background-color: #0F3C80; margin-top: 50px; background-image:url(assets/img/bonuscard.png)">
                        </div>  -->
                           
                    </div>

                    
                </div>
            </div>
        

            
                
            </div>    
    </div>


@endsection
