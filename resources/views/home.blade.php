@extends('layout')

@section('content')

<?php
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UsersController;
?>

<div class="highlight-phone" style="background: url(assets/img/zov_ban_blue-01.png) bottom / cover no-repeat;opacity: 0.99;background-color: #0F3C80;text-align: left;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="height: auto;margin-bottom: 30px; padding-right: 20px;">
                    <div class="intro">
                        <h2 style="color: #fff;font-family: Roboto, sans-serif;font-size: 48px;margin-bottom: 0;">INTERNATIONAL <br>COURIER SERVICE</h2>
                    </div>
                    <label style="color: #E5E5E5;margin-bottom: 20;font-family: Roboto, sans-serif;font-size: 24px;">Экспресс доставка из Китая, <br>Турции и США
                    </label>
                    <label style="color: #759FDD;margin-bottom: 20;font-family: Roboto, sans-serif;font-size: 18px;">Международная Курьерская Служба
                    </label>
                    <br/><br/>
                    <div>
                    <a class="btn btn-primary" role="button" href="{{url('underconstruction')}}" style="font-family: Roboto, sans-serif;font-size: 14px;padding-top:11px;background-color: #DF0707;margin-right: 37px;border-width: 2px; border-color: #FFF;color:#fff;height:42px;width:165px;font-weight: bold;line-height: 16px;text-align: center;">заказать</a>
                    <a class="btn btn-primary" role="button" href="javascript:codeformwithoutreg();" style="font-family: Roboto, sans-serif;font-size: 14px;padding-top:11px;background-color: #FFFFFF;color: #000000;border-width: 2px; border-color: #FFF;height:42px;width:165px;font-weight: bold;line-height: 16px;text-align: center;">получить код</a>
                    </div>
                </div>
                <div class="col-md-6" style="height: 340px; padding-left: 10px;">
                    <div style=" height: 340px; border-radius: 0px 25px  0px 25px; background-color: transparent;z-index:50;">

                        <div class="simple-slider" >
                            <div class="swiper-container">
                                <div class="swiper-wrapper">    
                                    <div class="swiper-slide" style="">
                                        <img src="assets/img/manshet/manshet1.png" style="height:340px; width:546px;border-radius: 0px 25px  0px 25px;">
                                    </div>             
                                    <div class="swiper-slide" style="">
                                        <img src="assets/img/manshet/manshet2.png" style="height:340px; width:546px;border-radius: 0px 25px  0px 25px;">
                                    </div>    
                                    <div class="swiper-slide" style="">
                                        <img src="assets/img/manshet/manshet3.png" style="height:340px; width:546px;border-radius: 0px 25px  0px 25px;">
                                    </div>  
                                    <div class="swiper-slide" style="">
                                        <img src="assets/img/manshet/manshet4.png" style="height:340px; width:546px;border-radius: 0px 25px  0px 25px;">
                                    </div>  
                                    <div class="swiper-slide" style="">
                                        <img src="assets/img/manshet/manshet5.png" style="height:340px; width:546px;border-radius: 0px 25px  0px 25px;">
                                    </div>                  
                                </div>
                            <!--    <div class="swiper-paginationman" style="padding-top:20px;"></div>
                                
                            <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div> -->
                            </div>
                        </div>

                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-blue" style="background-color: #C80808;height: 14px;padding: 0px;">
        <div class="myarrow-down"></div>
    </div>
    
    <div class="brands">
        <a href="#" style="border-color: #bf7b05;"> </a>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-12  col-md-12 col-lg-12" style="text-align:center;">
                <button class="btn btn-primary" type="button" style="margin: 0px 30px ; height:42px;width:146px;font-family: Roboto, sans-serif;margin-bottom: 20px; background-color: #D79729;border-style: none;box-shadow:0px 5px 5px 0px gray;">Как заказать?</button>
                <button class="btn btn-primary" type="button" style="margin: 0px 30px ; height:42px;width:146px;font-family: Roboto, sans-serif;margin-bottom: 20px; background-color: #E5E5E5;border-style: none;color: #000000;box-shadow:0px 5px 5px 0px gray;">Накладная</button>
                <button class="btn btn-primary" type="button" style="margin: 0px 30px ; height:42px;width:146px;font-family: Roboto, sans-serif;margin-bottom: 20px; background-color: #E5E5E5;border-style: none;color: #000000;box-shadow:0px 5px 5px 0px gray;">Магазины</button>
                <button class="btn btn-primary" type="button" style="margin: 0px 30px ; height:42px;width:146px;font-family: Roboto, sans-serif;margin-bottom: 20px; background-color: #E5E5E5;border-style: none;color: #000000;box-shadow:0px 5px 5px 0px gray;">Наши адреса</button>
                </div>
            </div>
        </div>
   

        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-12  col-md-12 col-lg-12" style="text-align:center;">
                
                    <div class="circlebutton">
                    <a href="{{url('infotracking')}}"  style="border-color: #bf7b05;"> 
                        <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:6px 2px; width:100px;transition: width 2s;height: 100px;text-align:center;">
                        <img src="assets/img/ot.png" >
                        </div>
                        <h6 class="text-center align-self-center mx-auto name" style="font-family: Roboto, sans-serif;width: 181px;color: #000000;" >Отслеживание посылки</h6>
                    </a>
                    </div>
                    <div class="circlebutton">
                    <a href="{{url('infosending')}}" style="border-color: #bf7b05;"> 
                        <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:6px 2px; width:100px;height: 100px;text-align:center;">
                        <img src="assets/img/tar.png" >
                        </div>
                        <h6 class="text-center align-self-center mx-auto name" style="font-family: Roboto, sans-serif;width: 175px;color: #000000;" >Тарифы</h6>
                    </a>
                    </div>
                    <div class="circlebutton">
                    <a href="{{url('underconstruction')}}"  style="border-color: #bf7b05;"> 
                        <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                        <img src="assets/img/pop.png" >
                        </div>
                        <h6 class="text-center align-self-center mx-auto name" style="font-family: Roboto, sans-serif;width: 175px;color: #000000;" >Пополнение счета</h6>
                    </a>
                    </div>

                    <div class="circlebutton">
                    <a href="{{url('underconstruction')}}" style="border-color: #bf7b05;"> 
                        <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                        <img src="assets/img/gr.png" >
                        </div>
                        <h6 class="text-center align-self-center mx-auto name" style="font-family: Roboto, sans-serif;width: 175px;color: #000000;" >Грамм в грамм</h6>
                    </a>
                    </div>

                    <div class="circlebutton">
                    <a href="{{url('calculator')}}" style="border-color: #bf7b05;"> 
                        <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                        <img src="assets/img/clc.png" >
                        </div>
                        <h6 class="text-center align-self-center mx-auto name" style="font-family: Roboto, sans-serif;width: 175px;color: #000000;" >Калькулятор</h6>
                    </a>
                    </div>

                    <div class="circlebutton">
                    <a href="{{url('forbidden')}}" style="border-color: #bf7b05;"> 
                        <div class="rounded-circle border " style="background-color: #DF0707;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                        <img src="assets/img/zap.png" >
                        </div>
                        <h6 class="text-center align-self-center mx-auto name" style="font-family: Roboto, sans-serif;width: 175px;color: #000000;" >Запрещённые товары</h6>
                    </a>
                    </div>
                
                </div>
            </div>
        </div>


        <div class="container" style="margin-bottom:10px;" >
            
            
            <div style="background-color: #DF0707; margin-bottom: 20px;
                 border-radius: 20px 20px 0px 0px; box-shadow:0px 5px 5px 0px gray; ">
                
                        <div class="row" style="display:inline-block;width:100%;padding-left:10px;text-align:center;">
                            
                            <div class="col-lg-4" style="float:left; padding: 50px 0px 10px 30px; height:145px;margin-bottom:20px;   ">
                                <div style="margin: 0px 20px 10px 20px;width:220px; ">
                                    <img src="assets/img/tasco.png" >
                                    <button class="btn btn-primary" type="button" 
                                    style="border-style: solid;border-width: 2px; border-color:#fff;font-family: Roboto, sans-serif;padding: 10px 20px;  margin-top: 26px;  background-color: #D79729;">Перейти на страницу</button>
                                </div> 
                            </div>
                               
                            <div class="col-lg-8" style="float:left:padding:0px 0px; margin: 50px 0px 10px 0px; display:inline-block;">    
                                <div class="inredwhitesquare">
                                    <img src="assets/img/top/1.jpeg" style="height:138px; width:130px;border-radius: 5px;">
                                </div> 
                            
                                <div class="inredwhitesquare">
                                    <img src="assets/img/top/2.jpeg" style="height:138px; width:130px;border-radius: 5px;">
                                </div> 
                            
                                <div class="inredwhitesquare">
                                    <img src="assets/img/top/3.jpeg" style="height:138px; width:130px;border-radius: 5px;">
                                </div> 
                               
                                <div class="inredwhitesquare">
                                    <img src="assets/img/top/4.jpeg" style="height:138px; width:130px;border-radius: 5px;">
                                </div> 

                                <div class="inredwhitesquarelast">
                                    <img src="assets/img/top/5.jpeg" style="height:138px; width:130px;border-radius: 5px;">
                                </div> 
                            </div> 
                            
                        
                            
                        </div>    
                      

                        <div class="row">   
                            <div class="col-md-4" style="font-family: Roboto, sans-serif;font-weight:bold;text-align:center;color:#fff;padding-top: 0px;padding-bottom: 10px;">
                            </div>
                            <div class="col-md-8" style="text-align:center;font-family: Roboto, sans-serif;font-weight:bold;color:#fff;padding-top: 0px;padding-bottom: 10px;padding-right:70px;">
                                Заказывайте товары напрямую у поставщиков                    
                            </div>
                        </div>
                    
                </div>
   
    </div>

</div> <!-- brands div-->
        
    <div class="team-grid">
        <div class="container">
          
            <div class="row people" style="font-family: Roboto, sans-serif;">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/Rectangle24.png)">
                        <!-- <div class="cover">
                            <h3 class="name">Ben Johnson</h3>
                            <p class="title">Musician</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div> -->
                    </div>
                    <div class="minibox">
                        Скидки
                    </div>   
                    <div class="arrow-up"></div> 
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/Rectangle25.png)">
                        <!-- <div class="cover">
                            <h3 class="name">Emily Clark</h3>
                            <p class="title">Artist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div> -->
                    </div>
                    <div class="minibox2">
                        Скидки в инстаграм
                    </div>   
                    <div class="arrow-up"></div> 
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/Rectangle26.png)">
                        <!-- <div class="cover">
                            <h3 class="name">Carl Kent</h3>
                            <p class="title">Stylist </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div> -->
                    </div>
                    <div class="minibox">
                        Акции
                    </div>   
                    <div class="arrow-up"></div> 
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(assets/img/Rectangle33.png)">
                        <!-- <div class="cover">
                            <h3 class="name">Felicia Adams</h3>
                            <p class="title">Model </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div> -->
                    </div>
                    <div class="minibox2">
                        Новости
                    </div>   
                    <div class="arrow-up"></div> 
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
