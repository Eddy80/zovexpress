@extends('layout')

@section('content')
<?php
use App\Http\Controllers\KuryerController;
use App\Http\Controllers\CountryController;
?>
<div class="team-grid nakladnaya">       
            
            
        
            <div class="container" style="background-color: #fff; box-shadow:0px 5px 5px 0px gray;">
                <div class="row" style="padding-left:0 auto; padding-left:8%; padding-right: 8%; padding-bottom:30px;">
                
               
                    <div class="col-md-12" style="margin-top:30px;">
                    <p><a href="/">Главная</a> > Список курьеров </p>
                    </div>
                    
                        <div class="col-md-7">Код отправки: &nbsp;  <strong>ZOV - 123 45 65 78 90 12 34 56 78 90</strong></div>
                        <div class="col-md-5">
                            <input style="width:78%;border-color: #D79729; border-width: 1px; border-radius: 5px 0px 0px 5px;  border-right-style: none; height:33px;" type="text" name="searchfield" value="" placeholder=" Поиск по коду или трэку">
                            <div class="searchorange"> Найти </div>
                        </div>
                    
                        <div class="col-md-12" style="background-color:gray; height:1px;width:100%;margin:30px 0px;"></div>
                    
                        <div class="col-md-12"></div>


                        <div class="col-md-4">Итоговый вес: &nbsp; <strong>8000кг.</strong></div>
                        <div class="col-md-3">Итоговый Куайди: </div>
                        <div class="col-md-5"></div>
                        

                        <div class="col-md-12">&nbsp;</div>
                        

                        <div class="col-md-4">Итоговая суммa: &nbsp; <strong>9. 000. 000. 000$</strong></div>
                        <div class="col-md-3">Итоговая Страховка:</div>
                        <div class="col-md-5"></div>
                        
                        <div class="col-md-12">&nbsp;</div>
                        <div class="col-md-12">&nbsp;</div>

                         
                        <div  class="col-md-12 mytable" style="overflow-x:auto; width:100%;">
                            <table style = "border-collapse: collapse; border-spacing: 0; width: 100%;  border: 1px solid #ddd;">
                                <tr style="background-color:#D79729;  color: #fff;">
                                <th>#</th>
                                <th>Страна</th>
                                <th>Код клиента</th>
                                <th>Трэк посылки</th>
                                <th>Линк товара</th>
                                <th>Вес, кг.</th>
                                <th>За кг.</th>
                                <th>Цвет</th>
                                <th>Кол-во</th>
                                <th>Сумма</th>
                                <th>Куайди</th>
                                <th>Страховка</th>
                                <th>Итого$</th>
                                </tr>
                                @if ( Auth::check())
                                <?php   $couriers = KuryerController::getListbyuserid(); $i=0; ?>
                                @foreach($couriers as $courier)
                                <?php 
                                $i++;
                                $countryname = CountryController::getNameById($courier->countryid); 
                                //{{$countryname->nameru}}
                                ?>
                                <tr>
                                <td>{{$i}}</td>    
                                <td></td>
                                <td>{{$courier->personalcode}}</td>
                                <td></td>
                                <td>{{$courier->count}}</td>
                                <td>{{$courier->count}}</td>
                                <td>2</td>
                                <td>{{$courier->count}}</td>
                                <td>{{$courier->count}}</td>
                                <td>{{$courier->count}}</td>
                                <th>0</th>
                                <th>0</th>
                                <th>{{$courier->count}}</th>
                                </tr>
                                @endforeach
                                @endif
                            </table>
                            </div>
                            

                   
                </div>
            </div>
           
            

            
                
            </div>    
    </div>

    </form>
@endsection
