<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\General;



class GeneralController extends Controller
{

    public static function getList()
    {
        return General::all();
    }

    public static function getReviewsList()
    {
        return Comment::all()->where('allow', 1);
    }

    public  function addressstore(Request $request){

        //dd($request);

        //Trackings::add($request->all());

        // return view('root.tracklist');
        //return redirect('/contacts');

        $Name = 'Обращение с сайта'; //senders name

        $email="info@zovexpress.com";

        //$email="surat@surat.az";



        $recipient = 'elshadaziz@yandex.ru, elshad.azizov@gmail.com'; //$_POST["email"]; //recipient

        $mail_body =$request->get('text').
            /*"Salam, <b>Tebriz qaqa</b>.<br/>

                        <br>Bilet sifarish etmek isteyen var: \r\n ".*/

           " <br>Имя : <b>". $request->get('name')."</b>\r\n".

            "<br>Телефон : <b>". $request->get('phone')."</b>\r\n".

            "<br>Email  : <b>". $request->get('email')."</b>\r\n"; //mail body */

        $subject = "Обращение с сайта - ".$request->get('email'); //subject

        $header = "From: ". $request->get('name') . " <" . $request->get('email') . ">\r\n"; //optional headerfields

        $header .= "Reply-To: ". $request->get('name') . " <" . $request->get('email') . ">\r\n"; //optional headerfields

        $header .= "MIME-Version: 1.0\r\n";

        $header .= "Content-Type: text/html; charset=utf-8\r\n";



       // mail($recipient, $subject, $mail_body, $header); //mail command :)


       return redirect()->back()->with('status', 'Сообщение отправлено');

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

    public function pageaddressload()
    {
        $page = General::find(16);
        return view('root.editor')->with('page', $page);
    }

    public function pagelinksload()
    {
        $page = General::find(24);
        return view('root.editor')->with('page', $page);
    }

    public function getPageAbout()
    {
        $page = General::find(23);
        return view('page')->with('page', $page);
    }

    public function getPageUnder()
    {
        $page = General::find(25);
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
