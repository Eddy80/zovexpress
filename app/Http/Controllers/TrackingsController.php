<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Codes;
use App\Trackings;
use Auth;
use Response;

class TrackingsController extends Controller
{

    public  function getusercode(Request $request){

        $countryid = $request->get('countryid');
        $userid = $request->get('userid');

        if (strlen($countryid)==1)
            $countryid = '0'.$countryid;

        $code = 'ZOV-'.$this->generateRandomString2(1).$userid.$this->generateRandomString(4).$countryid;

        $request->request->add(['code'=>$code]);
        $createdcode = Codes::add($request->all());

        return $code;
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
                                    <button class="btn btn-primary border rounded border-warning" type="button" style="background-color: #ffffff;margin: 0px 5px 0px;height: 35px;padding: 0px 10px;width: 200px;color: #000000;">
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
