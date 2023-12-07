<?php
  
namespace App\Http\Controllers;
 
use App\Models\Transactions;
use App\Models\Cars;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
  
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
    public function index(): View
    {   
        $cars = Cars::where('status', 'Ready')->get();
        return view('home', compact(['cars']));
    } 

    public function rent(){
        return view('rent');
    }

    public function cart(){
        $transactions = Transactions::join('cars', 'cars.id', '=', 'transactions.car_id')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->get(['transactions.id', 'users.name', 'cars.license_plate', 'cars.car_type', 'transactions.user_id','transactions.status','transactions.duration', 'transactions.time_start', 'transactions.time_end', 'transactions.total', 'transactions.payment_proof'])
            ->where('status', '=', 'Pending')
            ->where('user_id', '=', Auth::user()->id);
        return view('cart', compact(['transactions']));
    }

    public function finished(){
        $transactions = Transactions::join('cars', 'cars.id', '=', 'transactions.car_id')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->get(['transactions.id', 'users.name', 'cars.license_plate', 'cars.car_type', 'transactions.user_id', 'transactions.status','transactions.duration', 'transactions.time_start', 'transactions.time_end', 'transactions.total', 'transactions.payment_proof'])
            ->where('status', '=', 'Finished')
            ->where('user_id', '=', Auth::user()->id);
        return view('finished', compact(['transactions']));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        $transactions = Transactions::join('cars', 'cars.id', '=', 'transactions.car_id')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->get(['transactions.id', 'users.name', 'cars.license_plate', 'cars.car_type', 'transactions.status','transactions.duration', 'transactions.time_start', 'transactions.time_end', 'transactions.total', 'transactions.payment_proof'])
            ->where('status', '!=', 'Finished');

        $total = Transactions::where('status', '=', 'Finished')
            ->sum('total');

        $ReadyCars = Cars::where('status', '=', 'Ready')
            ->count();

        $NotReadyCars = Cars::where('status', '=', 'Not Ready')
            ->count();

        $user = User::where('type', '=', 'User')
            ->count();

            return view('admin.home', compact(['transactions', 'total', 'ReadyCars', 'NotReadyCars', 'user']));
    }
}