<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Codes;
use App\Trackings;
use App\Country;
use Auth;
use Response;
use Illuminate\Support\Facades\DB;

class TrackingsController extends Controller
{
    public  function getCountryInfo(Request $request){



         $countryid = $request->get('countryid');

        $target = Country::where('id', $countryid)->take(1)->get();

            return $target[0]->inforu;


        //return Country::all()->find('id', $countryid)->get('inforu');
    }

    public static function getCountryInfoByCountryId(Request $request)
    {
       $countryid = $request->get('countryid');

        $info =   DB::table('countriesinfo')
                    ->where('countryid',$countryid)
                    ->get();

        return $info->all();

    }

    public  function getusercode(Request $request){

        $info = 1;$infoletter = 'S';



        $countryid = $request->get('countryid');
        $userid = $request->get('userid');

        $countryinfo = $request->get('countryinfo');


            $info = $countryinfo;

        //if ($info == -1)
          //  $info = $countryinfoid;
        //return $info;
        if ($info==1)
            $infoletter = 'S';
        if ($info==2)
            $infoletter = 'A';
        //else return '';

        $leftCode = $infoletter.$countryid.'-';

        //if (strlen($countryid)==1)
          //  $countryid = '0'.$countryid;

        $maxid = DB::table('codes')->max('id');

       /* $characters = '0123456789'; // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
       */
        $randomString = 4000+$maxid+1;
/*
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString2 = '';
        for ($i = 0; $i < 1; $i++) {
            $randomString2 .= $characters[rand(0, $charactersLength - 1)];
        }
*/
        //$code = 'ZOV-'.$randomString2.''.$randomString.''.$countryid;
        $code = $leftCode.$randomString;
       // $request->add(['code'=>$code]);
/*        array_push($request, [
            'code'   => $code
        ]);*/

       // $request += ['code'=>$code];
        array_merge($request->all(), ['code'=>$code]);

        //$createdcode = Codes::add($request->all());



        return $code;
    }

    public  function setusercode(Request $request){

        $createdcode = Codes::add($request->all());
        //return 0;
        return view('cabcodelist');
    }


    public  function getSamoletByTrackNumber(Request $request){
        $myid = Auth::user()->id;
        $tracknumber= $request->get('tracknumber');

        $vehicle = 'plane';
        $top=78;

        $samolet = Trackings::where('userid', $myid)
            ->where('tracknumber',  $tracknumber)
            ->get();

        foreach($samolet as $values) {
          //  return $values->nowpercent;

        if ($values->tracktype==0) {
            $vehicle = 'plane';
            $top=78;
        }
        else {
            $vehicle = 'truckk';
            $top = 90;
        }

        $left = 30;
        if ($values->nowpercent >=0 && $values->nowpercent < 25)
            $left = 10;
        elseif ($values->nowpercent >=25 && $values->nowpercent < 50)
            $left = 170;
        elseif ($values->nowpercent >=50 && $values->nowpercent < 75)
            $left = 400;
        elseif ($values->nowpercent >=75 && $values->nowpercent < 100)
            $left = 600;
        else
            $left = 830;

        $resultstring = '';
        if (count($samolet)==0)
            $resultstring = '';
        else
            $resultstring .='<div class="form-container">
             <form method="post" style="width: 900px;padding: 0px 20px;background-color: #000000;">
            <p></p>
            <div class="table-responsive table-borderless">
                <table class="table table-bordered" >
                    <tbody>
                    <tr>
                        <td style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">0% пути</td>
                        <td class="text-left" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">25% пути</td>
                        <td class="text-center" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">50% пути</td>
                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">75% пути</td>
                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;">100% пути</td>
                    </tr>
                   
                   
                    <tr>
                        <td colspan="5" style="color: #ffffff;padding: 2px 0px; width: 100%">
                        <table style="width: 100%;">
                            <tbody>
                            <tr style="width: 100%;">
                                <td style="padding: 3px 0px;height: 10px;vertical-align: baseline;"><img src="/assets/img/Ellipse.png"></td>
                                <td style="padding: 20px 10px;height: 10px; width: 100%; background-image: url(\'/assets/img/onedash2.png\');
                                background-repeat: repeat-x;"></td>
                                <td style="padding: 3px 0px;height: 10px;vertical-align: baseline;"><img src="/assets/img/Ellipse.png"></td>
                            </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Гуанчжоу</td>
                        <td class="text-left" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Пхеньян</td>
                        <td class="text-center" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Хабаровск</td>
                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;widtd: 169px;">Казань</td>
                        <td class="text-right" style="padding: 2px 0px;font-size: 10px;color: #ffffff;">Москва</td>
                    </tr>
                    </tbody>
                </table>
            </div>';

            $resultstring .= '<img style="position: relative; top: -'.$top.'px;left:';
            $resultstring .= $left;
            $resultstring .= 'px;" src="assets/img/'.$vehicle.'.png">'.'</form></div>';

        }
        return  $resultstring;
    }

    public  function getListByCodeIdAndUserId(Request $request){

        $myid = Auth::user()->id;
        $codeid = $request->get('codeid');

        $trackings = Trackings::where('userid', $myid)
            ->where('usercode',  $codeid)
            ->get();

        if (count($trackings)==0)
            $resultstring = '0 треков';
        else
        $resultstring = '<ul class="list-group">';
            foreach($trackings as $values)
            {
                $resultstring.=
                '<li class="list-group-item" style="height: 62px;">
                    <div class="table-responsive" style="">
                        <table class="table">
                            <thead>
                            <tr></tr>
                            </thead>
                            <tbody>
                            <tr></tr>
                            <tr >
                                <td class="border-white" style="padding: 0px;">
                                    <button class="btn btn-primary border rounded border-warning" type="button" style="background-color: #ffffff;margin: 0px 5px 0px;height: 35px;padding: 0px 10px;width: 200px;color: #000000;" onclick="getSamolet('.$values->tracknumber.');">
                                    '.$values->tracknumber.'
                                    </button>
                                </td>
                                <td style="padding: 0px;">
                                    <div class="table-responsive table-borderless border-white" style="text-align:left;height: 50px;width:400px;padding-left: 40px;padding-top: 2px;padding-right: 20px;">
                                        <table class="table table-bordered" >
                                            <thead>
                                            <tr></tr>
                                            </thead>
                                            <tbody class="border-warning">
                                            <tr>
                                                <td class="border-warning" style="padding: 0px 5px;font-size: 10px;background-color: #d79827;color: #ffffff;width: 50%;">
                                                Дата отправлки: '.$values->sentdate.'&nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-warning" style="height: 16px;padding: 0px 5px;font-size: 10px;background-color: #d79827;color: #ffffff;margin: 0px;">';
                                                    if ($values->status==1)
                                                        $resultstring .= 'Дата получения: '.$values->receivedate;
                                                    else
                                                        $resultstring .= 'Ожидаемаема дата получения: '.$values->expectedreceivedate;

                                               $resultstring .= ' </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                                <td style=" width: 200px; padding: 0px 0px 0px 10px;height: 15px;">
                                <label style="margin: 0px 10px;font-size: 14px;">
                                Статус:
                                </label>
                                <label style="font-size: 12px;">
                                <strong><em>';
                                    if ($values->status==1)
                                        $resultstring .= 'доставлено';
                                    else
                                        $resultstring .= 'в пути';
                                $resultstring .= '</em></strong>
                                </label>
                                </td>
                            </tr>
                           
                            </tbody>
                        </table>
                    </div>
                </li>';
            }
        $resultstring .= '</ul>';

    return  $resultstring;
    }



    public function trackstore(Request $request){



        Trackings::add($request->all());

           // return view('root.tracklist');
        return redirect('/tracklist');

    }

    public static function getList()
    {
        return Trackings::all();
    }

    public static function getCount()
    {

        // return User::all();
        return Trackings::count();
    }


    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789'; // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomString2($length = 10)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


}
