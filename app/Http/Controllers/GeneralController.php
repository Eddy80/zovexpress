<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function pageload($pageid)
    {
        $page = General::find($pageid);
        return view('root.editor')->with('page', $page);
    }

    public function getPageAbout()
    {
        $page = General::find(23);
        return view('page')->with('page', $page);
    }

    public function getPageAgreement()
    {
        $page = General::find(22);
        return view('page')->with('page', $page);
    }

    public function getPageInfoSending()
    {
        $page = General::find(13);
        return view('page')->with('page', $page);
    }

    public function getPageInfoForbidden()
    {
        $page = General::find(14);
        return view('page')->with('page', $page);
    }

    public function getPageInfoTracking()
    {
        $page = General::find(15);
        return view('page')->with('page', $page);
    }

    public function getPageTasco()
    {
        $page = General::find(12);
        return view('page')->with('page', $page);
    }

    public static function getAddress()
    {
        $page = General::find(16);
        return $page->textru;
    }

    public static function getLinks()
    {
        $page = General::find(24);
        return $page->textru;
    }


    public function pagestore(Request $request)
    {
        $id = $request->all('id');
        General::whereId($id)->update($request->all('shortname','shortnameru','shortnameen','text','textru','texten' ));
        return view('root.editor')->with('page', $request);
    }

}
