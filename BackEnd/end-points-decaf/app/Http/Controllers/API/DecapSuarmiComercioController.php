<?php

namespace App\Http\Controllers;

use App\Models\DecapSuarmiComercio;
use Illuminate\Http\Request;

class DecapSuarmiComercioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DecapSuarmiComercio $decapSuarmiComercio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DecapSuarmiComercio $decapSuarmiComercio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DecapSuarmiComercio $decapSuarmiComercio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DecapSuarmiComercio $decapSuarmiComercio)
    {
        //
    }

    public function conversorsuarmi(Request $request){
        
        $response = Http::withBasicAuth(
            'usuarioAPIKey','pswAPIKey'
            )->get('https://www.suarmi.com/api/v1/quote', [
            'from_currency' => 'SOL',
            'to_currency' => 'MXN',
            'from_amount' => $request->amount,
            'network' => 'SOL'
        ]);

        $jsonData = $response->json();
        return response()->json($jsonData, 200);
    }

    public function createUsuarioSuarmi($id_usuario){
        //Se busca el usuario para crear cuenta en Suarmi en nuestra base de datos
        $comercios = DB::table('decap_suarmi_usuarios')
        ->select('*')
        ->where('id',$id_usuario)
        ->get();

        $metodoResultado=json_decode($comercios);
        
                    
        //Se envia la creación de usuario a suarmi por medio de su API
        $response = Http::withBasicAuth(
            'usuarioAPIKey','pswAPIKey'
            )->post('https://www.suarmi.com/api/v1/user', [
            'email' => $metodoResultado[0]->email,
            'birthdate' => $metodoResultado[0]->fechaNacimiento,
            'fname' => $metodoResultado[0]->nombre,
            "mname" => $metodoResultado[0]->segundoNombre,
            'lname' => $metodoResultado[0]->apellidoPaterno,
            'slname' => $metodoResultado[0]->apellidoMaterno,
            'profession' => $metodoResultado[0]->ocupacion,
            'nationality' => "MX",
            'phone_code' => "MX",
            'phone_number' => $metodoResultado[0]->telefono,
            'street' => $metodoResultado[0]->calleAvenida,
            'colonia' => $metodoResultado[0]->colonia,
            'ext-num' => $metodoResultado[0]->noExterior,
            'int-num' => $metodoResultado[0]->noExterior,
            'state' => $metodoResultado[0]->estado,
            'zip' => $metodoResultado[0]->cp,
            'curp' => $metodoResultado[0]->curpRfc,
            'id-number' =>$metodoResultado[0]->inePasaporte,
        ]);

        $jsonData = $response->json();

        //dd($response->json());
        
        return response()->json($jsonData, 200);
    }

    public function envioSolana(Request $request){
        /**
         *Se realiza el envio de SOL a la cuenta que nos genera Suarmi para poder obtener nuestro Sol a MXN
         */
        $curl = curl_init();

        $payload = array(
        "from" => "accountFrom",
        "to" => $request->toAcount,
        "amount" => "0.5",
        "fromPrivateKey" => "privateKeyAccount"
        );

        curl_setopt_array($curl, [
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "x-api-key: d39abdaf-e627-4d4c-aa3f-4a897d849886"
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_URL => "https://api.tatum.io/v3/solana/transaction",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
        echo "cURL Error #:" . $error;
        } else {
        echo $response;
        }
    }

    public function createOrder(Request $request){
      //Se crea la orden para poder indicarle a suarmi que queremos hacer una conversión de Sol a MXN  
        $response = Http::withBasicAuth(
            'usuarioAPIKey','pswAPIKey'
            )->post('https://www.suarmi.com/api/v1/order', [
            'user' => $request->email,
            'from_currency' => $request->fromCurrency,
            'from_amount' => $request->fromAmount,
            "to_currency" => $request->toCurrency,
            'to_address' => $request->toAddres,
            'network' => $request->network
        ]);

        
        $jsonData = $response->json();
        return response()->json($jsonData, 200);
    }

    public function getUsuarios(){
        $comercios = DB::table('decap_suarmi_usuarios')
        ->select('*')
        ->get();
        return response()->json($comercios);
    }

    public function getComercios(){
        $comercios = DB::table('decap_suarmi_comercios')
        ->select('*')
        ->get();
        return response()->json($comercios);
    }
}
