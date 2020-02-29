<?php

namespace App\Http\Controllers;

use App\Otpravka;
use Illuminate\Http\Request;

class OtpravkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){



        Otpravka::add($request->all());

        // return view('root.tracklist');
        return redirect('/otpravkalist');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Otpravka  $otpravka
     * @return \Illuminate\Http\Response
     */
    public function show(Otpravka $otpravka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Otpravka  $otpravka
     * @return \Illuminate\Http\Response
     */
    public function edit(Otpravka $otpravka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Otpravka  $otpravka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Otpravka $otpravka)
    {
        // return dd($request);

        $otpravka = Otpravka::findOrFail($request->id);



        $otpravka->edit($request->all());
        /*
                return response()->json([
                    'data' => [
                        'success' => $user->save(),
                    ]
                ]);*/
        //  return redirect('/tracklist');

        return view('root.otpravkalist');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Otpravka  $otpravka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Otpravka $otpravka)
    {
        //
    }

    public static function getList()
    {
        return Otpravka::all();
    }

    public static function getNameById($id)
    {
        $otpravka = Otpravka::where('id', $id)->get();
        return $otpravka;

    }

    public function viewforeditotpravka(Request $request, $id){



        $otpravka = Otpravka::find($id);
        //return $member->firstname;

        return view('root.otpravkadetails')->with('otpravka', $otpravka);
    }
}
