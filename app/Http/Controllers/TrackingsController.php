<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Codes;
use App\Trackings;


class TrackingsController extends Controller
{

    public  function getusercode(Request $request){

        $countryid = $request->get('countryid');
        $userid = $request->get('userid');

        if (strlen($countryid)==1)
            $countryid = '0'.$countryid;

        $code = 'ZOV-'.$this->generateRandomString2(1).$userid.$this->generateRandomString(4).$countryid;


       // dd(['userid'=>$userid, 'code'=>$code]);
        $request->request->add(['code'=>$code]);
      //  dd($request->all());
      // $createdcode = Codes::add(array('userid'=>$userid, 'code'=>$code));

        //dd($createdcode);
         $createdcode = Codes::add($request->all());



       /*
       $data = User::whereId($userid)->first();

        $data->update([
            'usercode' => $code
        ]);
       */


        return $code;
    }

    public  function getListByCodeIdAndUserId(Request $request){


        $myid = Auth::user()->id;
       // $codeid = $request->get('codeid');

       /* $trackings = Trackings::where('userid', "$myid")
            ->Where('usercode',  "$codeid")
            ->paginate(5);*/

        return $myid;

    }



//    public  function saveusercode(Request $request){
//
//        $code = $request->query('usercode');
//        //$userid = Auth::user()->id;
//
//        /*$this->validate($request,[
//            /*'usercode'=> 'required',
//            'firstname'=> 'required',
//            'lastname'=> 'required',
//            'email'=> 'required|email|unique:users',
//            'password'=> 'required'
//            //'avatar' => 'nullable|image'
//        ]);*/
//
//       //  $user = User::find($userid);
//
//       //  $user->edit($request->all());
//
//       // return redirect()->route('cab.members');
//
//        return $code;
//    }

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
