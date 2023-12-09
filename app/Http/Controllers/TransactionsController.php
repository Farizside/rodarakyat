<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Models\Cars;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TransactionsController extends Controller
{
    Public function index(){
        $transactions = Transactions::join('cars', 'cars.id', '=', 'transactions.car_id')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->get(['transactions.id', 'users.name', 'cars.license_plate', 'cars.car_type', 'transactions.status','transactions.duration', 'transactions.time_start', 'transactions.time_end', 'transactions.total', 'transactions.payment_proof'])
            ->where('status', '=', 'Finished');
            return view('admin.transactions', compact(['transactions']));
    }

    Public function create($id){
        $cars = Cars::find($id);
        return view('rent', compact(['cars']));
    }

    Public function store(Request $request, $id){
        $cars = Cars::find($id);
        $request->validate([
            'duration' => 'required|integer',
            'payment_proof' => 'required|string',
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'car_id' => $cars->id,
            'license_plate' => $cars->license_plate,
            'car_type' => $cars->car_type,
            'duration' => $request->duration,
            'total' => $cars->price * $request->duration,
            'payment_proof' => $request->payment_proof
        ];

        return view('rentDetail', compact(['data']));
    }

    public function detail(Request $data, $id){
        $transactions = Transactions::create([
            'user_id' => Auth::user()->id,
            'car_id' => $data['car_id'],
            'duration' => $data['duration'],
            'total' => $data['total'],
            'payment_proof' => $data['payment_proof']
        ]);
        return redirect('/home')->with('success', 'Your Request to Rent Car is Success, Wait for Admin Acception');
    }

    Public function update($id){
        $transactions = Transactions::find($id);
        $cars = Cars::find($transactions->car_id);
        if ($transactions -> status == 'Pending') {
            $carbonDate = Carbon::now();
            $dateTime = $carbonDate->toDateTime();
            $transactions->update([
                'status' => 'Unfinished',
                'time_start' => $dateTime
            ]);
            $cars->update([
                'status' => 'Not Ready'
            ]);
        }else if ($transactions -> status == 'Unfinished'){
            $carbonDate = Carbon::now();
            $dateTime = $carbonDate->toDateTime();
            $transactions->update([
                'status' => 'Finished',
                'time_end' => $dateTime
            ]);
            $cars->update([
                'status' => 'Ready'
            ]);
        }
        
        return redirect('/admin/home')->with('success', 'Success updated car');
    }
}
