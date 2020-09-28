@extends('layout')

@section('content')
<?php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CountryController;
?>
<div class="team-grid nakladnaya">
        <div class="container">
          
            <div class="container" style="background-color: #fff; box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left:8%; padding-right: 8%; padding-bottom:30px;">
                
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Магазины </p>
                    </div>
                    
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align:center;">             
                        <SELECT name="countryid" id="countryid" onchange="javascript:loadshoplist(this.value)" style="height:30px;width:230px;">
                        <OPTION value="-1">Выберите страну</OPTION>
                        <?php   /*$countries = CountryController::getList();
                        @foreach($countries as $country)
                            <OPTION value="{{$country->id}}">{{$country->nameru}}</OPTION>
                        @endforeach */?>
                        <OPTION value="1">Китай</OPTION>
                        <OPTION value="2">Турция</OPTION>
                        </SELECT>
                    </div>     
                    <div class="col-md-4"></div>
                    <div class="col-md-12">&nbsp;</div>
                    <div class="col-md-1"></div>
                    <div class="col-md-10" style="text-align:center;">             
                       <p style="text-align:center; color:#000000;"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, nostrum quae quidem sit id iusto iure aut quas ducimus aliquam et dignissimos dolor nemo sunt odit sequi ipsam repudiandae debitis.</p>
                    </div>     
                    <div class="col-md-1"></div>
                    <div class="col-md-12">&nbsp;</div>
                </div>   
                <div class="row" id="shoplist" style="padding-left:0 auto; padding-left:8%; padding-right: 8%; padding-bottom:30px;text-align:center;">            
                    
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/1x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/2x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/3x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/4x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/5x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/6x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/7x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/chin/8x.jpeg" class="shopimage"/></a></div>        

                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/1x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/2x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/3x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/4x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/5x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/6x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/7x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/8x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/9x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/10x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/11x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/12x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/13x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/14x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/15x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/16x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/17x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/18x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/19x.jpeg" class="shopimage"/></a></div>
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/20x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/21x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/22x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/23x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/24x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/25x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/26x.jpeg" class="shopimage"/></a></div>
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/27x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/28x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/29x.jpeg" class="shopimage"/></a></div>             
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/30x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/31x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/32x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/33x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/34x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/35x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/36x.jpeg" class="shopimage"/></a></div>
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/37x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/38x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/39x.jpeg" class="shopimage"/></a></div>             
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/40x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/41x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/42x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/43x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/44x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/45x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/46x.jpeg" class="shopimage"/></a></div>
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/47x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/48x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/49x.jpeg" class="shopimage"/></a></div>             
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/50x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/51x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/52x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/53x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/54x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/55x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/56x.jpeg" class="shopimage"/></a></div>
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/57x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/58x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/59x.jpeg" class="shopimage"/></a></div>              
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/60x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/61x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/62x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/63x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/64x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/65x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/66x.jpeg" class="shopimage"/></a></div>
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/67x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/68x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/69x.jpeg" class="shopimage"/></a></div>             
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/70x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/71x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/72x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/73x.jpeg" class="shopimage"/></a></div>               
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/74x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/75x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/76x.jpeg" class="shopimage"/></a></div>
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/77x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/78x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/79x.jpeg" class="shopimage"/></a></div>             
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/80x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/81x.jpeg" class="shopimage"/></a></div>        
                    <div class="col-md-3"><a href="https://trendyol.com" target="blank"><img src="/assets/img/shops/turk/82x.jpeg" class="shopimage"/></a></div>               
                 
                    
                </div>
            </div>
           
            
                
            </div>    
    </div>

 
@endsection
