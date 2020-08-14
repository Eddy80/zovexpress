@extends('layout')

@section('content')

<?php
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UsersController;
?>

<div class="highlight-phone" style="background: url(assets/img/manshetback.png) bottom / cover no-repeat;text-align: left;background-color: #14458f;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="height: 230px; margin-bottom: 30px; padding-right: 20px;">
                    <div class="intro">
                        <h2 style="color: #fff;font-family: Roboto, sans-serif;font-size: 48px;margin-bottom: 0;">INTERNATIONAL <br>COURIER SERVICE</h2>
                    </div>
                    <label style="color: #759FDD;margin-bottom: 20;font-family: Roboto, sans-serif;font-size: 18px;">Международная Курьерская Служба
                    </label>
                    <br/><br/>
                    <div>
                    <a class="btn btn-primary" role="button" href="#" style="padding-top: 6px;background-color: #DF0707;padding-right: 35px;padding-left: 35px;margin-right: 37px;border-width: 1px; border-color: #FFF;"><strong>заказать</strong>
                    </a>
                    <a class="btn btn-primary" role="button" href="javascript:codeformwithoutreg();" style="padding-top: 6px;background-color: #FFFFFF;padding-right: 35px;padding-left: 35px;color: #000000;border-width: 1px; border-color: blue;"><strong>получить код</strong>
                    </a>
                    </div>
                </div>
                <div class="col-md-6" style="height: 230px; padding-left: 10px;">
                     <div style=" height: 246px; border-radius: 0px 25px  0px 25px; background-color: #fff;">
                        </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-blue" style="background-color: rgb(255,0,0);height: 14px;padding: 0px;"></div>
    <div class="brands">
        <a href="#" style="border-color: #bf7b05;"> </a>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align:center;">
                <button class="btn btn-primary" type="button" style="padding-left: 50px;padding-right: 50px;margin-right: 50px;margin-bottom: 20px;  background-color: #D79729;border-style: solid;border-color: #D79729;">Как заказать?</button>
                <button class="btn btn-primary" type="button" style="padding-left: 50px;padding-right: 50px;margin-right: 50px;margin-bottom: 20px; background-color: #E5E5E5;border-style: solid;border-color: #D79729;color: #000000;">Накладная</button>
                <button class="btn btn-primary" type="button" style="padding-left: 50px;padding-right: 50px;margin-right: 50px;margin-bottom: 20px; background-color: #E5E5E5;border-style: solid;border-color: #D79729;color: #000000;">Магазины</button>
                <button class="btn btn-primary" type="button" style="padding-left: 50px;padding-right: 50px;margin-right: 50px;margin-bottom: 20px; background-color: #E5E5E5;border-style: solid;border-color: #D79729;color: #000000;">Наши адреса</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12" style="text-align:center;display:inline-block;width:100%;">

                <a href="{{url('infotracking')}}" style="border-color: #bf7b05;float: left; text-decoration: none;"> 
                    <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:6px 2px; width:100px;height: 100px;text-align:center;">
                    <img src="assets/img/ot.png" >
                    </div>
                    <h6 class="text-center align-self-center mx-auto name" style="width: 175px;color: #000000;" >Отслеживание товара</h6>
                </a>


                <a href="{{url('infosending')}}" style="border-color: #bf7b05;float: left;text-decoration: none;"> 
                    <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:6px 2px; width:100px;height: 100px;text-align:center;">
                    <img src="assets/img/tar.png" >
                    </div>
                    <h6 class="text-center align-self-center mx-auto name" style="width: 175px;color: #000000;" >Тарифы</h6>
                </a>

                <a href="#" style="border-color: #bf7b05;float: left;text-decoration: none;"> 
                    <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                    <img src="assets/img/pop.png" >
                    </div>
                    <h6 class="text-center align-self-center mx-auto name" style="width: 175px;color: #000000;" >Пополнение счета</h6>
                </a>
                
                <a href="#" style="border-color: #bf7b05;float: left;text-decoration: none;"> 
                    <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                    <img src="assets/img/gr.png" >
                    </div>
                    <h6 class="text-center align-self-center mx-auto name" style="width: 175px;color: #000000;" >Грамм в грамм</h6>
                </a>

                <a href="{{url('calculator')}}" style="border-color: #bf7b05;float: left;text-decoration: none;"> 
                    <div class="rounded-circle border " style="background-color: #0F3C80;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                    <img src="assets/img/clc.png" >
                    </div>
                    <h6 class="text-center align-self-center mx-auto name" style="width: 175px;color: #000000;" >Калькулятор</h6>
                </a>

                <a href="{{url('forbidden')}}" style="border-color: #bf7b05;float: left;text-decoration: none;"> 
                    <div class="rounded-circle border " style="background-color: #DF0707;margin:5px 40px;padding:10px 0px; width:100px;height: 100px;text-align:center;">
                    <img src="assets/img/zap.png" >
                    </div>
                    <h6 class="text-center align-self-center mx-auto name" style="width: 175px;color: #000000;" >Запрещённые товары</h6>
                </a>
         
              
               
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
            
                <div style="width: 100%; background-color: red; margin-bottom: 50px;
                 border-radius: 20px 20px 0px 0px; ">
                    <div class="col-12" style="text-align:center;display:inline-block;width:100%; padding-top: 90px;">

                        <div style="float: left; width: 200px; height: 145px; border-radius: 5px;  margin: 0px 70px 10px 20px;">
                            <img src="assets/img/tasco.png" >
                            <button class="btn btn-primary" type="button" style="padding: 10px 20px;  margin-top: 28px;  background-color: #D79729;border-style: solid;border-color: #D79729;">Перейти на страницу</button>
                        </div> 

                        <div style="float: left; width: 145px; height: 145px; border-radius: 5px; background-color: #fff; margin-right: 20px;margin-bottom: 5px;">
                        </div>  
                        <div style="float: left; width: 145px; height: 145px; border-radius: 5px; background-color: #fff; margin-right: 20px;margin-bottom: 5px;">
                        </div>  
                        <div style="float: left; width: 145px; height: 145px; border-radius: 5px; background-color: #fff; margin-right: 20px;margin-bottom: 5px;">
                        </div>  
                        <div style="float: left; width: 145px; height: 145px; border-radius: 5px; background-color: #fff; margin-right: 20px;margin-bottom: 5px;">
                        </div>  
                        <div style="float: left; width: 145px; height: 145px; border-radius: 5px; background-color: #fff; margin-right: 10px;margin-bottom: 5px;">
                        </div>    

                    </div>    
                    <div class="col-12" style="text-align:center;width:100%; color:#fff;padding-top: 20px;padding-bottom: 20px;">
                        Заказывайте товары которых нет в интернет магазинах
                    </div>
                    
                </div>

            </div>
        </div>    
    
    </div>


        
    <div class="team-grid">
        <div class="container">
          
            <div class="row people">
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


       
            <div class="container" style="background-color: #0F3C80">
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
                        <a class="btn btn-primary" role="button" href="#" style="padding-top: 10px;padding-bottom: 10px;background-color: #CE9127;padding-right: 35px;padding-left: 40px;margin-right: 37px;border-width: 1px; border-color: #FFF;"><strong>VIP Bonus Card</strong>
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
        

            <div class="container" style="margin-top: 50px;">
                
                    <div style="font-family: Roboto;font-style: normal;font-weight: normal;font-size: 30px;line-height: 35px;text-transform: uppercase;color: #0F3C80; margin-bottom: 50px;">
                        МАГАЗИНЫ
                    </div>

                    <div class="simple-slider" style="margin-left: -50px;">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" style="padding-left: 105px;">
                                <div class="swiper-slide">
                                    <div class="row">
                                    
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #fff;  height: 70px;"></div>
                                        <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px; background-color: #fff;  height: 70px;"></div>
                                    
                                    </div>
                                </div>
                                <div class="swiper-slide"></div>
                                <div class="swiper-slide"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev" style="margin-left: 50px;"></div>
                            <div class="swiper-button-next" style="margin-left: 50px;"></div>
                            
                        </div>
                        <div style="text-align: center;">
                        <a class="btn btn-primary" role="button" href="#" style="padding-top: 6px;background-color: #DF0707;padding-right: 35px;padding-left: 35px;;border-width: 1px; border-color: #FFF; text-align: center;"><strong>Оставить заявку <br/>на поиск товара</strong>
                        </a>
                        </div>
                    </div>
                
            </div>    
    </div>

    <div class="slider-header">
        <h2 class="text-left" style="background-color:#D79729 ;color:#fff;margin: 0 auto; padding-top: 40px; padding-left: 120px; font-family: Roboto;font-style: normal;font-weight: normal;font-size: 30px;line-height: 35px;text-transform: uppercase;">
            ОТЗЫВЫ
        </h2>
    </div>
<div class="simple-slider" >

    <div class="swiper-container">

        <div class="swiper-wrapper">
           
            <?php   $reviews = GeneralController::getReviewsList();  ?>
            @foreach($reviews as $review)
            <div class="swiper-slide" style=" height:auto;padding:40px 0px 0px 0px; margin:0 auto;margin-bottom:50px;background-color: #D79729; ">
                <p style="color: #ffffff; padding-left:200px; padding-right: 200px; height:auto; width: 85%;text-align: justify;margin:0 auto;">
                {{$review->textru}}
                </p>
                <?php   
                $user = UsersController::getUserFLNames($review->userid);
                ?>
                <p style="color: #fff;width: 85%;text-align: right;margin-top: 30px;margin-bottom: 50px;padding-right: 100px;">
                @if (count($user) > 0)
                {{ $user[0]->firstname }} {{ $user[0]->lastname }}
                @endif
                </p>
            </div>
            @endforeach
            
        </div>
        <div class="swiper-pagination"></div>
       <!--  <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
    </div>
</div>
<div class="simple-slider">
    <div class="swiper-container">
        <div class="swiper-pagination"></div>
    </div>
</div>


<div class="brands" style="padding-bottom: 50px; ">
        
        <div class="container">

<div style="font-family: Roboto;font-style: normal;font-weight: normal;font-size: 30px;line-height: 35px;text-transform: uppercase;color: #0F3C80; margin-bottom: 50px;margin-top: 50px;">
                        Наши Партнеры
                    </div>

            <div class="row" style="padding-left: 110px;">
                
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                      <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                     <div class="col-md-2"  style="margin-top: 10px; margin-right: 10px;background-color: #C4C4C4;  height: 80px;"></div>
                
                
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
