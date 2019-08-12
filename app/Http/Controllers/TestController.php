<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;
use SoapClient;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $client = new SoapClient("http://www.dneonline.com/calculator.asmx?WSDL");
        } catch (\Throwable $th) {
            dd($th);
        }
        //dd($client->__getTypes());
        //$client->Add([3, 8]);
        dd($client->Divide(['intA'=>48, 'intB'=>8]));

        /*$opts = array(
            'ssl'=>array('ciphers'=>'RC4-SHA', 'verify_peer'=>false, 'verify_peer_name'=>false)  
        );
        $params= array('encoding'=>'UTF-8', 'verifypeer'=>false, 'verifyhost'=>false);
        $url = 'http://localhost/testsoap/producto.php?wsdl';
    
        try {
            $client = \SoapClient($url, $params);
            dd($client);
        } catch (\Throwable $th) {
        }*/

        return response()->json("asdasd");
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(test $test)
    {
        //
    }
}
