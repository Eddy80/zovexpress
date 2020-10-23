@extends('layout')

@section('content')

<?php
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UsersController;
?>

<div class="highlight-phone" style="background: url(assets/img/bg/TascoHeaderBG2.png) no-repeat ; height:140px; background-color:#E5E5E5; margin-top:4px;box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);">
        <div class="container">
            <div class="row">
                <div  style= "width:100%;display:inline-block;">
                    <div style="float:left;width:34%;"><img src="assets/img/bg/Tasco_logo.png" /></div>
                    <div style="float:left;background-color:#FFF800; color:#000000; width:303px; height:40px; text-align:center;font-size:12px;font-weight:bold;border:1px solid #fff; border-radius:3px;cursor:pointer;">Открыть собственный <br/>магазин в TASCO</div>
                    <div style="float:right;padding-right:30px;">
                        <a class="login" href="javascript:korzina();" style="display:inline-block;color: #423E3E;font-family: Roboto;font-size: 13px; margin-right:10px;">
                        <img src="assets/img/bg/heard.png"/>
                        <div style="float:right;margin-top:15px;background-color:#0F3C80; color:#fff;border-radius: 50%!important;width:20px;height:20px;text-align:center; margin-left:-6px;">0</div>
                        </a>

                        <a class="login" href="javascript:korzina();" style="display:inline-block;color: #423E3E;font-family: Roboto;font-size: 13px; ">
                        корзина &nbsp;
                        <img src="assets/img/korzina.png"/>
                        <div style="float:right;margin-top:15px;background-color:#DF0707; color:#fff;border-radius: 50%!important;width:20px;height:20px;text-align:center; margin-left:-6px;">0</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height:60px; background-color:#fff; margin-top:4px;box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);">
        <div class="container" style="height:20px;">
            <div class="row" style="height:20px;">
                <div  style= "width:100%;display:inline-block;height:20px;">
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<div class="team-grid" style="background: #fff;">
        <div class="container">      
            <div class="row" style="font-family: Roboto, sans-serif;margin-top:10px;">
                <div class="col-md-4 col-lg-3 item">
                    <div class="tascoLeftMenu" style="text-align:left;color:#0F3C80;">
                        <h4 style="margin-top:10px;margin-left:20px;">КАТЕГОРИИ</h4>
                        <hr style="background-color:#0F3C80;">
                        <ul style="list-style:none;">
                            <li><a href="#" class="tascoleftmenulink">Женская одежда</a></li>
                            <li><a href="#" class="tascoleftmenulink">Мужская одежда</a></li>
                            <li><a href="#" class="tascoleftmenulink">Детская одежда</a></li>
                            <li><a href="#" class="tascoleftmenulink">Аксессуары</a></li>
                            <li><a href="#" class="tascoleftmenulink">Женская обувь</a></li>
                            <li><a href="#" class="tascoleftmenulink">Мужская обувь</a></li>
                            <li><a href="#" class="tascoleftmenulink">Детская обувь</a></li>
                            <li><a href="#" class="tascoleftmenulink">Игрушки</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Часы</a></li>
                            <li><a href="#" class="tascoleftmenulink">Электроника</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Посуда</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Мебель</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Постельное белье</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Аксессуары для моб.</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Оборудование</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Спорт инвентарь</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Сумки, кошельки</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Косметика</a></li> 
                            <li><a href="#" class="tascoleftmenulink">Бижутерия</a></li>         
                        </ul>
                    </div>  
                    <div>
                        <img src="assets/img/bg/Tasco_left_banner.png" 
                        style="margin-top:10px;margin-left:5px;width:250px" />    
                    </div>
                </div>
                <div class="col-md-8 col-lg-6 item" style="padding:0px;"> 
                    <div class="tascoLeftMenu" style="padding:0px;">
                        <img src="assets/img/bg/tasco_main_banner.png" style="width:100%;"/>
                        <!-- <div class="cover">
                            <h3 class="name">Emily Clark</h3>
                            <p class="title">Artist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                            </div> 
                    
                    -->
                    <div style="display:inline-block; width:100%;padding:0px;">
                        <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;margin-right:22px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
                                <div> 
                                    <img src="assets/img/bg/tasco_goods.png" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; " />
                                    <a href="#">
                                    <img src="/assets/img/bg/instagram_icon.png" 
                                    style="position:relative; top:-150px; left:-60px;z-index:10;" />
                                    </a>
                                </div>
                                <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;margin-top:-25px;margin-bottom:5px;">Мужские роскошные часы ...</div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;text-align:left;">$12</div>
                                    <div style="float:right;width:40%;">
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_gray.png"/>
                                    </div>
                                </div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/heard_gray.png" /></div>
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/share_gray.png" /></div>
                                    <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;padding-right: 6px;">Awatch Store</div>
                                </div>          
                            </div>

                            <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;margin-right:22px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
                                <div> 
                                    <img src="assets/img/bg/tasco_goods.png" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; " />
                                    <a href="#">
                                    <img src="/assets/img/bg/instagram_icon.png" 
                                    style="position:relative; top:-150px; left:-60px;z-index:10;" />
                                    </a>
                                </div>
                                <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;margin-top:-25px;margin-bottom:5px;">Мужские роскошные часы ...</div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;text-align:left;">$12</div>
                                    <div style="float:right;width:40%;">
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_gray.png"/>
                                    </div>
                                </div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/heard_gray.png" /></div>
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/share_gray.png" /></div>
                                    <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;padding-right: 6px;">Awatch Store</div>
                                </div>          
                            </div>

                            <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;margin-right:0px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
                                <div> 
                                    <img src="assets/img/bg/tasco_goods.png" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; " />
                                    <a href="#">
                                    <img src="/assets/img/bg/instagram_icon.png" 
                                    style="position:relative; top:-150px; left:-60px;z-index:10;" />
                                    </a>
                                </div>
                                <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;margin-top:-25px;margin-bottom:5px;">Мужские роскошные часы ...</div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;text-align:left;">$12</div>
                                    <div style="float:right;width:40%;">
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_gray.png"/>
                                    </div>
                                </div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/heard_gray.png" /></div>
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/share_gray.png" /></div>
                                    <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;padding-right: 6px;">Awatch Store</div>
                                </div>          
                            </div>
                            <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;margin-right:22px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
                                <div> 
                                    <img src="assets/img/bg/tasco_goods.png" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; " />
                                    <a href="#">
                                    <img src="/assets/img/bg/instagram_icon.png" 
                                    style="position:relative; top:-150px; left:-60px;z-index:10;" />
                                    </a>
                                </div>
                                <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;margin-top:-25px;margin-bottom:5px;">Мужские роскошные часы ...</div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;text-align:left;">$12</div>
                                    <div style="float:right;width:40%;">
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_gray.png"/>
                                    </div>
                                </div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/heard_gray.png" /></div>
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/share_gray.png" /></div>
                                    <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;padding-right: 6px;">Awatch Store</div>
                                </div>          
                            </div>

                            <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;margin-right:22px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
                                <div> 
                                    <img src="assets/img/bg/tasco_goods.png" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; " />
                                    <a href="#">
                                    <img src="/assets/img/bg/instagram_icon.png" 
                                    style="position:relative; top:-150px; left:-60px;z-index:10;" />
                                    </a>
                                </div>
                                <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;margin-top:-25px;margin-bottom:5px;">Мужские роскошные часы ...</div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;text-align:left;">$12</div>
                                    <div style="float:right;width:40%;">
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_gray.png"/>
                                    </div>
                                </div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/heard_gray.png" /></div>
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/share_gray.png" /></div>
                                    <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;padding-right: 6px;">Awatch Store</div>
                                </div>          
                            </div>

                            <div style="cursor:pointer;float:left;padding:0px;margin-left:0px;margin-top:10px;margin-right:0px;width:174px;border-radius: 3px; box-shadow:3px 3px 3px 0px #ccc; font-family: Roboto;">
                                <div> 
                                    <img src="assets/img/bg/tasco_goods.png" style="position:relative; top:0px; left:0px;z-index:1;border-radius: 3px 0px 0px 3px;width:174px; " />
                                    <a href="#">
                                    <img src="/assets/img/bg/instagram_icon.png" 
                                    style="position:relative; top:-150px; left:-60px;z-index:10;" />
                                    </a>
                                </div>
                                <div style="float:left;width:100%;color:#000000;font-size:10px; padding-left:10px;text-align:left;margin-top:-25px;margin-bottom:5px;">Мужские роскошные часы ...</div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:40%;font-weight:bold;font-size:14px;margin-left:10px; padding-left:0px;text-align:left;">$12</div>
                                    <div style="float:right;width:40%;">
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_orange.png"/>
                                        <img src="/assets/img/bg/Star_gray.png"/>
                                    </div>
                                </div>
                                <div style="display:inline-block; width:100%;">
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/heard_gray.png" /></div>
                                    <div style="float:left;width:20%;"><img src="assets/img/bg/share_gray.png" /></div>
                                    <div style="float:right;width:60%;color:#C4C4C4;font-size:10px;text-align: right;padding-right: 6px;">Awatch Store</div>
                                </div>          
                            </div>
                        </div>

                        <div style="width:100%;padding:20px 28%; text-align:center;">
                            <div style="border-radius:10px;width:250px; height:30px;padding-top:5px;background-color:#F0F0F3; text-align:center; font-size:12px;font-weight:bold;">
                                <img src="assets/img/bg/arrow_left.png" />
                                &nbsp;&nbsp;&nbsp;
                                1 &nbsp;&nbsp;&nbsp;2 &nbsp;&nbsp;&nbsp;3 &nbsp;&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;5 &nbsp;&nbsp;&nbsp;6 &nbsp;&nbsp;&nbsp;... &nbsp;&nbsp;&nbsp;10
                                &nbsp;&nbsp;&nbsp;
                                <img src="assets/img/bg/arrow_right.png" />
                            </div>
                        </div>
                    </div>
                    

                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="tascoRightMenu">
                        <div>
                        <img src="assets/img/bg/Tasco_right_banner1.png" style="width:250px;height:300px;"
                        </div>
                        <div>
                        <img src="assets/img/bg/Tasco_right_banner2.png" style="margin-top:10px;width:250px"/>
                        </div>
                        <div>
                        <img src="assets/img/bg/Tasco_right_banner3.png" style="margin-top:10px;width:250px"/>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


       
            <div class="container" style="background-color: #0F3C80; box-shadow:0px 5px 5px 0px gray;">
                <div class="row">
                    <div class="col-md-2">
                                         
                           
                    </div>
                    <div class="col-md-5" style="min-height: 300px; margin-bottom: 30px;">
                        <div class="intro" style="margin-bottom: 20px;">
                            <h2 style="color: #fff;font-family: Roboto, sans-serif;font-size: 36px;margin-bottom: 0;">ОФОРМИТЬ <br>БОНУСНУЮ КАРТУ</h2>
                        </div>
                        
                        <div class="intro" style="margin-bottom: 20px;">
                        <label style="color: #759FDD;margin-bottom: 20;font-family: Roboto, sans-serif;font-size: 18px;">Бонусная карта дает ежемесечные скидки и участие в ежегодной лотерее
                        </label>
                        </div>
                        
                        <div class="intro">
                        <a class="btn btn-primary" role="button" href="#" style="padding-top: 10px;padding-bottom: 10px;background-color: #CE9127;padding-right: 35px;padding-left: 40px;margin-right: 37px;border-width: 1px; border-color: #FFF;font-family: Roboto, sans-serif;"><strong>VIP Bonus Card</strong>
                        </a>       
                        </div>
                    </div>
                     
                    <div class="col-md-3" style="min-height: 300px; padding-left: 0px;margin-bottom: 30px;">
                        
                        <div style=" height: 210px;width: 319px; border-radius: 25px 25px  25px 25px; background-color: #0F3C80; margin-top: 50px; background-image:url(assets/img/bonuscard.png)">
                        </div> 
                           
                    </div>

                    <div class="col-md-2">
                                         
                           
                    </div>
                </div>
            </div>
        

            <div class="container" style="margin-top: 50px; ">
                
                    <div style="font-family: Roboto, sans-serif;font-style: normal;font-weight: normal;font-size: 30px;line-height: 35px;text-transform: uppercase;color: #0F3C80; margin-bottom: 50px;">
                        МАГАЗИНЫ
                    </div>

                    <div class="simple-slider" style="">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" style="">
                                <div class="swiper-slide">
                                    <div class="row" style="text-align:center;margin:0 auto;padding-left:90px;">
                                    
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/1.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/2.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/3.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/4.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/5.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/6.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/7.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/chin/8.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px; background-color: #fff;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px; background-color: #fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px; background-color: #fff;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px; background-color: #fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px; background-color: #fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px; background-color: #fff;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px; background-color: #fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;  "></div>
                                    
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="text-align:center;margin:0 auto;padding-left:90px;">
                                        
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/1.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/2.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/3.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/4.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/5.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/6.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/7.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/8.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/9.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/10.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/11.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/12.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/13.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/14.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/15.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;  "></div>
                                    
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="text-align:center;margin:0 auto;padding-left:90px;">
                                        
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/16.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/17.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/18.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/19.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/20.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/21.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/22.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/23.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/24.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/25.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/26.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/27.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/28.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/28.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/30.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;  "></div>
                                    
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="text-align:center;margin:0 auto;padding-left:90px;">
                                        
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/31.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/32.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/33.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/34.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/35.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/36.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/37.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/38.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/39.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/40.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/41.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/42.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/43.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/44.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/45.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;  "></div>
                                    
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="text-align:center;margin:0 auto;padding-left:90px;">
                                        
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/46.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/47.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/48.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/49.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/50.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/51.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/52.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/53.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/54.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/55.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/56.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/57.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/58.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/59.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/60.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;  "></div>
                                    
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="text-align:center;margin:0 auto;padding-left:90px;">
                                        
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/61.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/62.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/63.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/64.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/65.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/66.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/67.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/68.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/69.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/70.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/71.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/72.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/73.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/74.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/75.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;  "></div>
                                    
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row" style="text-align:center;margin:0 auto;padding-left:90px;">
                                        
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/76.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/77.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/78.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/79.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/80.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/81.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/82.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/83.jpeg);background-size: 165px 92px; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/shops/turk/84.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color:#fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color:#fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color:#fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color:#fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color:#fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                                        <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color:#fff; height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;  "></div>
                                    
                                    </div>
                                </div>



                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev prev myprev"></div>
                            <div class="swiper-button-next next mynext"></div>
                            
                        </div>
                        <div style="text-align: center;">
                        <a class="btn btn-primary" role="button" href="#" style="font-family: Roboto, sans-serif;padding-top: 6px;background-color: #DF0707;padding-right: 35px;padding-left: 35px;;border-width: 1px; border-color: #FFF; text-align: center;box-shadow:0px 5px 5px 0px gray; margin-top: 50px;"><strong>Показать больше</strong>
                        </a>
                        </div>
                    </div>
                
            </div>    
    </div>
    <div class="brands" style="background-color:#D79729; height:400px;">
    <div class="container">
 
    <div class="slider-header">
        <h2 class="text-left" style="color:#fff;margin: 0 auto; padding-top: 40px;  font-family: Roboto, sans-serif;font-style: normal;font-weight: normal;font-size: 30px;line-height: 35px;text-transform: uppercase;">
            &nbsp;ОТЗЫВЫ
        </h2>
    </div>
        <div class="simple-slider" >

            <div class="swiper-containermy">

                <div class="swiper-wrapper">
                
                    <?php   $reviews = GeneralController::getReviewsList();  ?>
                    @foreach($reviews as $review)
                    <div class="swiper-slide" style=" font-family: Roboto, sans-serif;height:auto;padding:40px 0px 0px 0px; margin:0 auto;margin-bottom:0px; ">
                        <p style="color: #ffffff; padding-left:80px; padding-right: 80px; height:auto; text-align: justify;margin:0 auto;">
                        {{$review->textru}}
                        </p>
                        <?php   
                        $user = UsersController::getUserFLNames($review->userid);
                        ?>
                        <p style="color: #fff;text-align: right;margin-top: 30px;margin-bottom: 0px;">
                        @if (count($user) > 0)
                        {{ $user[0]->firstname }} {{ $user[0]->lastname }}
                        @endif
                        </p>
                    </div>
                    @endforeach
                    
                    
                </div>
                <div class="swiper-paginationmy" style="padding-top:20px;"></div>
                
            <!--  <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->
            </div>
        </div>
    
    </div>

</div>

<div class="brands" style="padding-bottom: 50px; ">
        
        <div class="container">

<div style="font-family: Roboto, sans-serif;font-style: normal;font-weight: normal;font-size: 30px;line-height: 35px;text-transform: uppercase;color: #0F3C80; margin-bottom: 50px;margin-top: 50px;">Наши Партнеры
                    </div>

            <div class="row" style="padding-left: 100px;">
                
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/1.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/2.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/3.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/4.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/5.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/6.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/7.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/8.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/9.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/10.jpeg);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/11.png);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/12.png);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-image: url(assets/img/partners/13.png);background-size: 165px 92px;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <!-- <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color: #C4C4C4;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color: #C4C4C4;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color: #C4C4C4;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color: #C4C4C4;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div>
                     <div class="col-md-2"  style="margin-top: 20px; margin-right: 20px;background-color: #C4C4C4;  height: 92px;width: 165px;box-shadow:0px 5px 5px 0px gray;"></div> -->
                
                
            </div>
        </div>
</div>
<!--
<div class="highlight-clean" style="background-image: url(&quot;assets/img/mountain_bg.jpg&quot;);opacity: 1;padding: 0px 0px 5px;background-size: cover;">
    <?php
    $langid = 0;
    $maintitle = GeneralController::getShortName(1,0, $langid );
    $maintext =  GeneralController::getName(     1,0, $langid );
    ?>
    <h2 class="text-center" style="color: #da9904;margin: 0px;padding: 0px;padding-top: 22px;">{{ $maintitle }}<br></h2>
    <p class="text-justify d-xl-flex align-self-center" ><p style="text-align: center; color: #ffffff;margin: 0 auto;font-size: 20px; margin: 30px 0px;">{{ strip_tags($maintext) }}</p></p>
</div>

</div>
<div class="team-clean">
<div class="container">
            <div class="intro">
                &nbsp;
            </div>
    <div class="intro">
        &nbsp;
    </div>
    <div class="row people">
        <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
            <a href="{{url('infosending')}}"><img src="assets/img/info1.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
            <a href="{{url('infosending')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Виды отправок и сроки</strong><br></h3></a>
        </div>       
    </div>
</div>
</div>-->
@endsection