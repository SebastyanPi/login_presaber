<?php

namespace App\Http\Controllers;
use App\Models\school;
use Illuminate\Http\Request;
use App\Models\User;


class RoutesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function login(Request $request)
    {
        $item = User::where('nit',$request->nit)->where('password_other',$request->password)->first();
        $i = User::where('nit',$request->nit)->where('password_other',$request->password)->count();
        if($i == 1){
            $domainname   = 'https://aula.institutointesa.edu.co';
            $functionname = 'auth_userkey_request_login_url';
            $param = Array(
                'user' => Array(
                    'username'     => $item->nit,
                )
            );

            $ch = curl_init($domainname.'/webservice/rest/server.php?wstoken='.$item->token.'&wsfunction='.$functionname.'&moodlewsrestformat=json');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
            $result = json_decode(curl_exec($ch));
            //dd($result);
            $loginurl = $result->loginurl;  
            return redirect($loginurl);
        }else{
            return redirect()->route('login');
        }
        //return view('auth.add',compact('school'));
    }

    public function register()
    {
        $school = school::all();
        return view('auth.add',compact('school'));
    }
}
