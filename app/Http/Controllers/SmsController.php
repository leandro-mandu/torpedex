<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaSms;
use App\Models\Sms;
use Config;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  return Sms::get();
      //return view('index');
      //return config('services.semysms.url');
      //dd(config('mandu_config.sms_url'));
      var_dump(config('mandu_config.sms_url'));
      var_dump(config('mandu_config.sms_device'));
      var_dump(config('mandu_config.sms_token'));
      //var_dump($_ENV);
      //var_dump(env("APP_NAME"));
      //var_dump(env("DB_HOST", "somedefaultvalue"));
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
/*
      $insert = $categoria->create($request->all());
      if ($insert)
        return redirect()->route('categoria.index')->with('success', 'Categoria inserida com sucesso!');
      return redirect()->back()->with('error', 'Falha ao inserir');
*/
      $url = config('mandu_config.sms_url'); //Url address for sending SMS
      $phone = '+55'.$request->number_ddd.$request->number; // Phone number
      $msg = 'de '.$request->name.': '.$request->content;  // Message
      $device = config('mandu_config.sms_device');  //  Device code
      $token = config('mandu_config.sms_token');  //  Your token (secret)

      $data = array(
             "phone" => $phone,
             "msg" => $msg,
             "device" => $device,
             "token" => $token
         );

         $curl = curl_init($url);
         curl_setopt($curl, CURLOPT_POST, true);
         curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
         $output = curl_exec($curl);
         curl_close($curl);
         $json = json_decode($output, true);
//      return $output;
//        return $json["id"];
$dataInsert = $request->all();
$dataInsert['status'] = $json["code"];
//dd($dataInsert);
$insert = Sms::create($dataInsert);
return $insert;
//$request->status($json["code"]);
//Sms::create($request->all());

        //return $json;
//        return response()->json($output);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $sms = Sms::findOrFail($id);
      return view('sms.show', compact('sms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
