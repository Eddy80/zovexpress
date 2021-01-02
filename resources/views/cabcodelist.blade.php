
@extends('cabhome')

@section('cabcontent')
<?php
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\CountryController;
$user = UsersController::getUserFLNames(Auth::user()->id);
?>
            <div class="col-sm-6 col-md-9 item" style="width: 750px;padding: 10px 20px;"><a href="#"></a>
                <ul class="list-group">
                    <?php   $codes = CodesController::getListByUserId(); ?>

                    @foreach($codes as $code)

                    <li class="list-group-item" style="height: 58px;">
                        <div class="table-responsive" style="height: 75px;">
                            <table class="table">
                                <thead>
                                <tr></tr>
                                </thead>
                                <tbody>
                                <tr></tr>
                                <tr >
                                    <td class="border-white" style="padding: 0px;">
                                        <button class="btn btn-primary border rounded border-warning" type="button" style="background-color: #ffffff;margin: 0px 5px 0px;padding: 0px 10px;width: 200px;color: #000000;">
                                            {{$code->code}}
                                        </button>
                                    </td>
                                    <td style="padding: 2px 0px;">
                                        <div class="table-responsive table-borderless border-white">
                                            <table class="table">
                                                <?php   $countryname = CountryController::getNameById($code->countryid); ?>

                                                <tr>
                                                    <td style="text-align:center;height: 25px; padding: 3px 5px;font-size: 10px;background-color: #d79827;color: #ffffff;width: 200px;">
                                                        {{$countryname->nameru}}
                                                    </td>
                                                </tr>


                                            </table>
                                        </div>
                                    </td>
                                    <td class="border-white" style="padding: 0px;height: 48px;"><label style="font-size: 12px;"><strong><em>&nbsp;</em></strong></label></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
</div>
@endsection
