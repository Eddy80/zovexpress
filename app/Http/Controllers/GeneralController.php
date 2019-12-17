<?php

namespace App\Http\Controllers;

use App\General;



class GeneralController extends Controller
{

    public static function getList()
    {
        return General::all();
    }

    public static function getName($type, $categoryid, $languageid)
    {
        $target = General::where('type', $type)->where('categoryid', $categoryid)->take(1)->get();
        if ($languageid == 0) {
            return $target[0]->textru;
        }
        else if ($languageid==1) {
            return $target[0]->text;
        }
        else {
            return $target[0]->texten;
        }
    }

    public static function getShortName($type, $categoryid, $languageid)
    {
        $target = General::where('type', $type)->where('categoryid', $categoryid)->take(1)->get();
        if ($languageid == 0) {
            return $target[0]->shortnameru;
        }
        else if ($languageid==1) {
            return $target[0]->shortnameaz;
        }
        else {
            return $target[0]->shortnameen;
        }

    }
}
