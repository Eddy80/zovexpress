@extends('layout')

@section('content')
<div class="highlight-clean" style="background-image: url(&quot;assets/img/mountain_bg.jpg&quot;);opacity: 1;padding: 0px 0px 50px;background-size: cover;">
    <h2 class="text-center" style="color: #ffffff;margin: 0px;padding: 0px;"><br>INTERNATIONAL COURIER SERVICE<br><br></h2>
    <p class="text-justify d-xl-flex align-self-center" style="color: #ffffff;margin: 0 auto;font-size: 16px;padding: 0px 50px;">Lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It
        has survived not only five enturies, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of etraset sheets containing Lorem Ipsum passages, and more recently with
        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br></p>
    <div class="container text-justify">
        <div class="intro"></div>
        <div class="buttons" style="margin: 20px 23px;">
            <a class="btn btn-light text-center border rounded border-warning ml-auto action-button" role="button" href="{{url('calculator')}}" data-bs-hover-animate="rubberBand" style="background-color: #da9904;width: 175px;height: 35px;padding: 10px 18px 10px 18px;font-size: 14px;color: #ffffff;"><strong>КАЛЬКУЛЯТОР</strong><br></a>
            <a class="btn btn-light text-center border rounded border-warning ml-auto action-button" role="button" href="{{url('tracking')}}" data-bs-hover-animate="rubberBand" style="background-color: transparent;width: 175px;height: 35px;padding: 10px 18px 10px 18px;font-size: 14px;color: #ffffff;"><strong>Отслеживание</strong></a>
        </div>
    </div>
</div>
<div class="team-clean" style="width: 100%;"></div>
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-size: 18px;">Информация</h2>
        </div>
        <p class="text-center" style="margin: 39px;"></p>
    </div>
</div>
<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-size: 18px;"></h2>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('infosending')}}"><img src="assets/img/info1.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
                <a href="{{url('infosending')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Виды отправок и сроки</strong><br></h3></a>
            </div>

            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('tasco')}}"><img src="assets/img/info2.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
                <a href="{{url('tasco')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Информация о TASCO</strong><br></h3></a>
            </div>

            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('forbidden')}}"><img src="assets/img/info3.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
                <a href="{{url('forbidden')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Запрещенные товары</strong><br></h3></a>
            </div>
        </div>
    </div>
</div>
<div>
<div class="simple-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="padding-top:120px; padding-left: 180px;background-color: #262936; ">
                <p style="color: #ffffff; width: 85%;text-align: justify;">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                </p>
                </p>
                <p style="color: #c69500;width: 85%;text-align: right;"> Anar Babayev</p>
            </div>
            <div class="swiper-slide" style="padding-top:120px; padding-left: 180px;background-color: #262936; ">
                <p style="color: #ffffff; width: 85%;text-align: justify;">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                </p>
                </p>
                <p style="color: #c69500;width: 85%;text-align: right;"> Anar Babayev</p>
            </div>
            <div class="swiper-slide" style="padding-top:120px; padding-left: 180px;background-color: #262936; ">
                <p style="color: #ffffff; width: 85%;text-align: justify;">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy
                </p>
                </p>
                <p style="color: #c69500;width: 85%;text-align: right;"> Anar Babayev</p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="simple-slider">
    <div class="swiper-container">
        <div class="swiper-pagination"></div>
    </div>
</div>&nbsp;&nbsp;
</div>

&nbsp;

<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="font-size: 18px;"></h2>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('calculator')}}"><img src="assets/img/info4.png" style="width: 120px;height: 120px;"></a>
                <a href="{{url('calculator')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Калькулятор</strong><br></h3></a>
            </div>
            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('infotracking')}}"><img src="assets/img/info5.png" style="width: 120px;height: 120px;"></a>
                <a href="{{url('infotracking')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Отслеживание</strong><br></h3></a>
            </div>
            <div class="col-md-6 col-lg-4 item" style="padding: 2px 15px 2px;">
                <a href="{{url('other')}}"><img src="assets/img/info3.png" width="120px" height="120px" style="width: 120px;height: 120px;"></a>
                <a href="{{url('other')}}" style="text-decoration: none; color: #313437;"><h3 class="name" style="font-size: 16px;"><strong>Другое</strong><br></h3></a>
            </div>
        </div>
    </div>
</div>
@endsection
