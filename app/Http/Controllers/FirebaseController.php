<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;

class FirebaseController extends Controller
{
    protected $auth, $database;

    public function __construct()
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/monitoring-kolam.json')
        ->withDatabaseUri('https://monitoring-kolam-6febd-default-rtdb.firebaseio.com');

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    public function signUp()
    {
        $email = "angelicdemon@gmail.com";
        $pass = "anya123";

        try {
            $newUser = $this->auth->createUserWithEmailAndPassword($email, $pass);
            dd($newUser);
        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'The email address is already in use by another account.':
                    dd("Email sudah digunakan.");
                    break;
                case 'A password must be a string with at least 6 characters.':
                    dd("Kata sandi minimal 6 karakter.");
                    break;
                default:
                    dd($e->getMessage());
                    break;
            }
        }
    }

    public function signIn()
    {
        $email = "angelicdemon@gmail.com";
        $pass = "anya123";

        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($email, $pass);
            // dump($signInResult->data());

            Session::put('firebaseUserId', $signInResult->firebaseUserId());
            Session::put('idToken', $signInResult->idToken());
            Session::save();

            dd($signInResult);
        } catch (\Throwable $e) {
            switch ($e->getMessage()) {
                case 'INVALID_PASSWORD':
                    dd("Kata sandi salah!.");
                    break;
                case 'EMAIL_NOT_FOUND':
                    dd("Email tidak ditemukan.");
                    break;
                default:
                    dd($e->getMessage());
                    break;
            }
        }
    }

    public function signOut()
    {
        if (Session::has('firebaseUserId') && Session::has('idToken')) {
            // dd("User masih login.");
            $this->auth->revokeRefreshTokens(Session::get('firebaseUserId'));
            Session::forget('firebaseUserId');
            Session::forget('idToken');
            Session::save();
            dd("User berhasil logout.");
        } else {
            dd("User belum login.");
        }
    }

    public function userCheck()
    {
        // $idToken = "";

        // $this->auth->revokeRefreshTokens("");

        // if (Session::has('firebaseUserId') && Session::has('idToken')) {
        //     dd("User masih login.");
        // } else {
        //     dd("User sudah logout.");
        // }

        try {
            $verifiedIdToken = $this->auth->verifyIdToken($idToken, $checkIfRevoked = true);
            dump($verifiedIdToken);
            dump($verifiedIdToken->claims()->get('sub')); // uid
            dump($this->auth->getUser($verifiedIdToken->claims()->get('sub')));
        } catch (\Throwable $e) {
            dd($e->getMessage());
        }

        // try {
        //     $verifiedIdToken = $this->auth->verifyIdToken(Session::get('idToken'), $checkIfRevoked = true);
        //     $response = "valid";
        //     // dd("Valid");
        //     // $uid = $verifiedIdToken->getClaim('sub');
        //     // $user = $auth->getUser($uid);
        //     // dump($uid);
        //     // dump($user);
        // } catch (\InvalidArgumentException $e) {
        //     // dd('The token could not be parsed: '.$e->getMessage());
        //     $response = "The token could not be parsed: " . $e->getMessage();
        // } catch (InvalidToken $e) {
        //     // dd('The token is invalid: '.$e->getMessage());
        //     $response = "The token is invalid: " . $e->getMessage();
        // } catch (RevokedIdToken $e) {
        //     $response = "revoked";
        // } catch (\Throwable $e) {
        //     if (substr(
        //         $e->getMessage(),
        //         0,
        //         21
        //     ) == "This token is expired") {
        //         $response = "expired";
        //     } else {
        //         $response = "something_wrong";
        //     }
        // }
        // return $response;
    }

    public function read()
    {
        $ref = $this->database->getReference('monitoring')->getValue();
        dump($ref);
    }

    public function update(Request $request)
    {
        // before
        $refData = $this->database->getReference('monitoring/'.$request->kodeKolam)->getValue();
        $ref = $this->database->getReference('monitoring/'.$request->kodeKolam)
        ->update([
            
                "diameter" => $request->diameter,
                "ketinggian" => $request->ketinggian,
                "namaKolam" => $request->namaKolam,
                "oxygen" => $refData['oxygen'],
                "ph" => $refData['ph'],
                "temp" => $refData['temp'],
                "turbidity" => $refData['turbidity'],
            
        ]);

        return redirect('read');
    }

    public function set(Request $request)
    {
        // set data
        $ref = $this->database->getReference('monitoring/'.$request->kodeKolam)
        ->set([
            
                "diameter" => $request->diameter,
                "ketinggian" => $request->ketinggian,
                "namaKolam" => $request->namaKolam,
                "oxygen" => 0,
                "ph" => 0,
                "temp" => 0,
                "turbidity" => 0,
            
        ]);
        

        // after
        $ref = $this->database->getReference('/monitoring')->getValue();
        dump($ref);
    }
    
    public function delete($kodeKolam)
    {
        $ref = $this->database->getReference('monitoring/'.$kodeKolam)->remove();
        return redirect('read');
    }

    public function create()
    {
        return view('backend.createKolam');
    }

    public function detail($kodeKolam)
    {
        $ref = $this->database->getReference('monitoring/'.$kodeKolam)->getValue();
        dd($ref);
    }
    public function edit($kodeKolam)
    {
        $kode = $kodeKolam;
        $ref = $this->database->getReference('monitoring/'.$kodeKolam)->getValue();
        return view('backend.editKolam',compact('ref','kodeKolam'));
    }
        
}