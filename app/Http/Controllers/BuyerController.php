<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class BuyerController extends Controller
{
	public function list()
	{
       //$buyers = Buyer::all();
      $buyers =  Buyer::search('emantrigo')->get();
       foreach ($buyers as $buyer){
            echo $buyer;
       }
       return;

	}

    public function search(Request $r){

    }

    public function toggleAdmin(Request $r){
       $buyer = Buyer::find($r->input('id'));
        $buyer->update(['isadmin' => !$buyer->isadmin]);
        echo($buyer);

       // var_dump($r);


    }


    public function show(Request $request ,String $id)
	{
        $buyer = Buyer::find($id);
        echo $buyer;
       return;

	}

    public function loginregedit(Request $request, String $id)
	{
        $buyer = Buyer::find($id);

        return view('loginreg-edit', ['buyer' => $buyer]);
	}


    public function check_login (Request $request){

        $user = Buyer::find($request->input('name'));

        echo $user->name;

        return;
    }

    public function editaddress (Request $request){

        $address = new Address();
        $address->city = $request->input('city');
        $address->postalcard = $request->input('postalcard');
        $address->door = $request->input('door');
        $address->address = $request->input('address');

        $address->save();

        echo $address->city;

        return;
    }

    public function editcinfo (Request $request){

        $paymentMethod = new PaymentMethod();
        $paymentMethod->cardNumber = $request->input('cardNumber');
        $paymentMethod->securityCode = $request->input('securityCode');
        $paymentMethod->expirationDate = $request->input('expirationDate');

        $paymentMethod->save();

        echo $paymentMethod->cardNumber;

        return;
    }


	public function create(Request $request)
	{
        $buyer = new Buyer();
        $buyer->name = $request->input('name');
        $buyer->email = $request->input('email');
        $buyer->phonenumber = $request->input('phonenumber');
        $buyer->password = Hash::make($request->input('password')) ;

        $buyer->save();

        return redirect('/');

	}


	public function edit(Buyer $Buyer)
	{
    	// display edit form
	}

	public function update(Request $request, Buyer $Buyer)
	{
    	//
	}

	public function destroy(Request $r,String $id)
	{
        $buyer = Buyer::find($id);
        $buyer->delete();

        return $buyer;


	}
}
