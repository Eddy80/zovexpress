@extends('layout')

@section('content')
<?php
use App\Http\Controllers\PriceController;
use App\Http\Controllers\CountryController;
?>
<div class="register-photo" style="background-color: rgb(255,255,255);padding: 20px 0px;">
    <div class="table-responsive table-borderless">
        <table class="table table-bordered">
            <thead>
            <tr></tr>
            </thead>
            <tbody>
            <tr>
                <td style="padding: 0px;">
                    <h2 class="text-center" style="font-size: 16px;margin: 0px 8px 0px;"><strong>КАЛЬКУЛЯТОР</strong></h2>
                </td>
            </tr>
            <tr>
                <td class="text-center" style="padding: 0px;"><img src="assets/img/underline.png"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-container">
        <div class="image-holder" style="height: 200px;">
            <div class="table-responsive table-borderless border-white">
                <table class="table table-bordered">
                    <thead>
                    <tr></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-right" style="font-size: 14px;">Страна отправитель:</td>
                        <td class="border-white">
                            <div class="dropdown" style="font-size: 14px;color: #da9904;">
                                <button class="btn btn-primary dropdown-toggle text-dark bg-white border rounded border-warning" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: #ffffff;color: #da9904;font-size: 13px;">Azerbaijan </button>
                                <div class="dropdown-menu" role="menu">

                                    <?php   $countries = CountryController::getList(); ?>

                                    @foreach($countries as $country)
                                    <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>
                                    @endforeach

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" style="font-size: 14px;">Страна получатель:</td>
                        <td>
                            <div class="dropdown" style="font-size: 14px;color: #da9904;"><button class="btn btn-primary dropdown-toggle text-dark bg-white border rounded border-warning" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: #ffffff;color: #da9904;font-size: 13px;">Dropdown </button>
                                <div class="dropdown-menu" role="menu">
                                    <?php   $countries = CountryController::getList(); ?>

                                    @foreach($countries as $country)
                                    <a class="dropdown-item" role="presentation" href="#">{{$country->nameru}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" style="font-size: 14px;">Кол-во посылок:</td>
                        <td><input class="border rounded border-warning" type="number" style="width: 101px;height: 33px;"></td>
                    </tr>
                    <tr>
                        <td class="text-right" style="font-size: 14px;">Общий вес:</td>
                        <td><input class="border rounded border-warning" type="number" style="width: 101px;height: 33px;"></td>
                    </tr>
                    <tr>
                        <td class="text-right"><button class="btn btn-primary text-right border rounded border-warning" type="button" style="background-color: #da9904;height: 30px;padding: 0px 25px;font-size: 14px;margin: 0px 0px;"><strong>Посчитать</strong></button></td>
                        <td><label style="font-size: 14px;margin: 0px 5px 0px 0px;"><strong>Итого:</strong></label><label style="color: #da9904;margin: 0px 5px 0px 0px;font-size: 14px;"><strong>45.00m</strong></label></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <form method="post" style="width: 600px;padding: 10px 20px;">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Вес</th>
                        <?php   $prices = PriceController::getList(); ?>

                        @foreach($prices as $price)

                        <?php
                        $countryid =  $price->to_country_id;
                        $countryflag = CountryController::getFlag($countryid);
                       // dd($countryflag->all());
                        ?>

                        <th><img src="<?php echo 'assets/img/'.$countryflag; ?>" /></th>

                        @endforeach

                    </tr>
                    </thead>
                    <tbody>




                    <tr>
                        <td style="width: 180px;font-size: 14px;height: 40px;padding: 12px 12px;">0,10 kq-a qədər</td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*0.1}} $</td>
                        @endforeach

                    </tr>


                    <tr>
                        <td style="font-size: 14px;width: 200px;">0,10 kq-dan - 0.25 kq dək</td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*0.25}} $</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="font-size: 14px;height: 46px;">0,25 kq-dan - 0.5 kq dək</td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*0.5}} $</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="font-size: 14px;height: 46px;">0,50 kq-dan - 0.75 kq dək<br></td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*0.75}} $</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">0,75 kq-dan - 1 kq dək<br></td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*1}} $</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">1 kq-dan - 2 kq dək<br></td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*1.2}} $</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">2 kq-dan - 5 kq dək<br></td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*1.5}} $</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">5 kq-dan - 10 kq dək<br></td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*2}} $</td>
                        @endforeach
                    </tr>
                    <tr>
                        <td style="font-size: 14px;">10 kq-dan yuxarı</td>
                        @foreach($prices as $price)
                        <td style="font-size: 14px;">{{$price->price_usd*3}} $</td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>

@endsection
