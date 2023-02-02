<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Carbon;
use Route;
use App\Models\Teams;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
class TeamsLoginController extends Controller
{
   
    public function __construct()
    {
      $this->middleware('guest:team', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
      return view('auth.teams_login');
    }
    public function showRegisterForm()
    {
      return view('auth.teams_register');
    }
    public function register(Request $request){
   Teams::insert(
                    [
                    'teamname' => $request->name,
                    'university' => $request->university,
                    'city' => $request->city,
                    //'score'=> $request->email,
                    'password'=> Hash::make($request->password),
                    'created_at'=> Carbon::Now(),]

    );
    return redirect('challenges');
    }
   
    public function login(Request $request)
    {
      // Validate the form data
     $this->validate($request, [
        'teamname'   => 'required|email',
        'password' => 'required|min:6'
      ]);
      $credentials = $request->only('teamname', 'password');

      // Attempt to log the user in
    /*if (Auth::guard('team')->attempt(['teamname' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        return redirect('/plateform');//->intended(route('/plateform'));
      } 
      // if unsuccessful, then redirect back to the login with the form data*/
    if(Auth::guard('team')->attempt($credentials)) {return redirect('/');}//->intended('/');}
      return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    
    public function logout()
    {
        Auth::guard('team')->logout();
        return redirect('/teams');
    }
}