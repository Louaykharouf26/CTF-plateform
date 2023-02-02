<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TeamsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '../../../../resources/views/createjoinbtn.blade.php';
    public function __construct()
    {
        $this->middleware('auth:team');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
}