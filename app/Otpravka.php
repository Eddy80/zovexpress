<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otpravka extends Model
{
    protected $fillable = [
        'name', 'kod', 'sentfrom', 'sentdate',
        'receiveto', 'expectedreceivedate', 'type'
    ];



    public static function add($fields)
    {
        $otpravka = new static;
        $otpravka->fill($fields);
        $sentdate = $fields['sentdate'];
        $date = explode('/', $sentdate );
        $new_sentdate = $date[2].'-'.$date[1].'-'.$date[0];
        $otpravka->sentdate =  $new_sentdate;



        $expectedreceivedate = $fields['expectedreceivedate'];
        $date = explode('/',  $expectedreceivedate );
        $new_expectedreceivedate = $date[2].'-'.$date[1].'-'.$date[0];
        $otpravka->expectedreceivedate =  $new_expectedreceivedate;

        /*
                $characters = '0123456789';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < 13; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                $tracking->tracknumber = /*'1000000'.*//*$randomString;

*/
        $otpravka->save();

        return  $otpravka;
    }


    public  function edit($fields)
    {
        $this->fill($fields);
        $this->save();

        return $this;
    }
}
