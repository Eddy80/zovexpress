<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trackings extends Model
{

    protected $fillable = [
        'otpravkaid','usercode', 'userid','tracknumber',
        'kq', 'naimenovanie', 'zakq', 'summa', 'sf', 'straxovka', 'itoqodollar', 'som','dostavka', 'itoqo'
        //'sentfrom',
        //'sentdate',
        //'receiveto',
        // 'receivedate',
        // 'tracktype'
    ];



    public static function add($fields)
    {
        $tracking = new static;
        $tracking->fill($fields);
        //$sentdate = $fields['sentdate'];
        //$date = explode('/', $sentdate );
       // $new_sentdate = $date[2].'-'.$date[1].'-'.$date[0];
        //$tracking->sentdate =  $new_sentdate;



        //$expectedreceivedate = $fields['expectedreceivedate'];
        //$date = explode('/',  $expectedreceivedate );
        //$new_expectedreceivedate = $date[2].'-'.$date[1].'-'.$date[0];
        //$tracking->expectedreceivedate =  $new_expectedreceivedate;

/*
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 13; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $tracking->tracknumber = /*'1000000'.*//*$randomString;

*/
        $tracking->save();

        return  $tracking;
    }


    public  function edit($fields)
    {
        $this->fill($fields);
        $this->save();

        return $this;
    }


}
