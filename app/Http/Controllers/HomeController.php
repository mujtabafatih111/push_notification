<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function master()
    {
        return view('master');
    }
    public function view()
    {
        return view('view');
    }
    public function index()
    {
        return view('home');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function saveToken(Request $request)
    {

        auth()->user()->update(['device_token'=>$request->token]);
        return response()->json(['token saved successfully.']);
    }

    /**
     * Write code on Method
     * @return response()
     */
    public function sendNotification(Request $request)
    {
        $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();

        $SERVER_API_KEY = 'AAAAIkKYe5c:APA91bFoZH2_3jGHEBrvdkUtjx1GCvs1TJZJwmC0jshUJhoBbiBSVGyJ-ObcfC0Vx8msatNoEKPQ-aOKpXHu3xnCSLb9aO6-qOmBm9nYBBdWsNTywridt1T90KDYpeKk6TKgQWavP4Dq';

        // $SERVER_API_KEY = 'AAAAIkKYe5c:APA91bFoZH2_3jGHEBrvdkUtjx1GCvs1TJZJwmC0jshUJhoBbiBSVGyJ-ObcfC0Vx8msatNoEKPQ-aOKpXHu3xnCSLb9aO6-qOmBm9nYBBdWsNTywridt1T90KDYpeKk6TKgQWavP4Dq';
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,
            ]
        ];
        $dataString = json_encode($data);
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);
dd($response);
        $response = curl_exec($ch);
        return response()->json([
            'server_api_key'=>$SERVER_API_KEY,
            'status'=>200,
            'success'=> "Notification Sent Successfully!" ,
        ]);
    }
}
