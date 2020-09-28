<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use Auth;

class InvoiceController extends Controller
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
    public function createForm()
    {
        return view('nakladnaya');
    }

    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request);


      $data = $request->all();
      if ( !isset($data['isexpress']) )
        $data['isexpress'] = 0;  
      else 
        $data['isexpress'] = 1;

        $data['userid'] = Auth::user()->id;

   /*
    $newdata = array('userid'=>Auth::user()->id);
    array_push($data, $newdata);

var_dump($data);
dd($data);
*/
        Invoice::add($data);

        return redirect('/invoiceslist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }


    public static function getList()
    {
        return Invoice::all();
    }

    public static function getListbyuserid()
    {
        return Invoice::all()->where('userid' , '=', Auth::user()->id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        $otpravka = Invoice::findOrFail($request->id);



        $invoice->edit($request->all());
  
        return view('root.invoicelist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }

    public function viewforeditinvoice(Request $request, $id){



        $invoice = Invoice::find($id);
        //return $member->firstname;

        return view('root.invoicedetails')->with('invoice', $invoice);
    }
}
