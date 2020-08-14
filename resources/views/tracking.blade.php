@extends('layout')

@section('content')
<?php
use App\Http\Controllers\CodesController;
use App\Http\Controllers\TrackingsController;
use App\Http\Controllers\CountryController;
?>
<div class="highlight-blue" style="background-color: rgb(255,0,0);height: 14px;padding: 0px;"></div>
<div class="register-photo" style="background-color: rgb(255,255,255);padding: 20px 0px;">
    <div class="table-responsive table-borderless">
        <table class="table table-bordered">
            <thead>
            <tr></tr>
            </thead>
            <tbody>
            <tr>
                <td style="padding: 0px;">
                    <h2 class="text-center" style="font-size: 16px;margin: 0px 8px 0px;"><strong>ОТСЛЕЖИВАНИЕ ТОВАРА</strong></h2>
                </td>
            </tr>
            <tr>
                <td class="text-center" style="padding: 0px;"><img src="assets/img/underline.png"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-container">
        <form method="post" style="width: 600px;padding: 10px 20px;">
            <p>
                <strong>Код:</strong>
                <SELECT id="code" class="border rounded border-warning" onchange="javascript:getTrackings();"  style="-moz-appearance:none; -webkit-appearance: none; margin-left: 20px; padding: 0px 10px; color:#ffffff; font-weight:bold;font-size: 14px;width: 400px;height: 35px;background-color: #d79827;" >
                    @if ( Auth::check())
                    <OPTION style="background-color: #ffffff; width: auto;border-color: #DA9904; color:#DA9904; border-radius: 5px; font-size: 14px; font-weight: bold;" value="-1">Выберите код</OPTION>
                    <?php   $codes = CodesController::getListByUserId();?>
                    @foreach($codes as $code)
                     <?php
                     
                      $countryid =  $code->countryid;
                      $country = CountryController::getNameById($countryid);
                      $countryinfoid =  $code->countryinfoid;
                      $countryinfo = CountryController::getInfoByIds($countryid, $countryinfoid);
                    ?>
                    <OPTION style="background-color: #ffffff; width: auto;border-color: #DA9904; color:#DA9904; border-radius: 5px; font-size: 14px; font-weight: bold;" value="{{$code->id}}">{{$code->code}} - [{{ $country->nameru }}] -  ({{$countryinfo[0]->inforu}})</OPTION>

                    <!-- <OPTION style="background-color: #ffffff; width: auto;border-color: #DA9904; color:#DA9904; border-radius: 5px; font-size: 14px; font-weight: bold;" value="{{$code->code}}">{{$code->code}} - [{{ $country->nameru }}] -  ({{$countryinfo[0]->inforu}})</OPTION> -->

                    @endforeach
                    @endif
                </SELECT>
            </p>
            <p><strong>Треки:</strong>&nbsp;&nbsp;</p>

            <div id="tracklist" style="padding: 20px 0px">
                Чтобы увидеть список треков выберите код
            </div>
        </form>
    </div>
    <div id="samolet">
<!--         <div class="form-container">-->
<!--             <form method="post" style="width: 900px;padding: 0px 20px;background-color: #000000;">-->
<!--            <p></p>-->
<!--            <div class="table-responsive table-borderless">-->
<!--                <table class="table table-bordered" >-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <td style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">0% пути</td>-->
<!--                        <td class="text-left" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">25% пути</td>-->
<!--                        <td class="text-center" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">50% пути</td>-->
<!--                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">75% пути</td>-->
<!--                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;">100% пути</td>-->
<!--                    </tr>-->
<!--                   -->
<!--                   -->
<!--                    <tr>-->
<!--                        <td colspan="5" style="color: #ffffff;padding: 2px 0px; width: 100%">-->
<!--                        <table style="width: 100%;">-->
<!--                            <tbody>-->
<!--                            <tr style="width: 100%;">-->
<!--                                <td style="padding: 3px 0px;height: 10px;vertical-align: baseline;"><img src="/assets/img/Ellipse.png"></td>-->
<!--                                <td style="padding: 20px 10px;height: 10px; width: 100%; background-image: url('/assets/img/onedash2.png');-->
<!--                                background-repeat: repeat-x;"></td>-->
<!--                                <td style="padding: 3px 0px;height: 10px;vertical-align: baseline;"><img src="/assets/img/Ellipse.png"></td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Гуанчжоу</td>-->
<!--                        <td class="text-left" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Пхеньян</td>-->
<!--                        <td class="text-center" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Хабаровск</td>-->
<!--                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Казань</td>-->
<!--                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;">Москва</td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--            <img style="position: relative; top: -78px;left:630px" src="assets/img/plane.png">-->
        <!--  <img style="position: relative; top: -78px;left:630px" src="assets/img/delivery-truck.png">-->
<!--            </form>-->
<!--        </div>-->
    </div>
</div>

@endsection
