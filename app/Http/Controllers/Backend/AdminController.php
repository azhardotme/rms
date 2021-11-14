<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function user()
    {
        $users = User::get();
        return view('backend.admin.user', compact('users'));
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    public function foodmenu()
    {
        return view('backend.admin.foodmenu');
    }

    public function uploadfood(Request $request)
    {

        $data = new Food;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }

    public function showmenu()
    {
        $allmenu = Food::simplePaginate(3);
        return view('backend.admin.showmenu', compact('allmenu'));
    }



    public function deletemenu($id)
    {
        $menu = Food::find($id);
        $menu->delete();
        return redirect()->back();
    }

    public function updatemenu($id)
    {

        $data = Food::find($id);
        return view('backend.admin.updatemenu', compact('data',));
    }

    public function update(Request $request, $id)
    {

        $data = Food::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }

    public function reservation(Request $request)
    {


        $data = new Reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();

        return redirect()->back();
    }

    public function showreservation()
    {
        if (Auth::id()) {

            $allreser = Reservation::all();
            return view('backend.admin.showreservation', compact('allreser'));
        } else {
            return redirect('/login');
        }
    }

    public function addchef()
    {
        return view('backend.admin.addchef');
    }

    public function createchef(Request $request)
    {

        $data = new Foodchef;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();

        return redirect()->back();
    }

    public function showchef()
    {
        $chefs = Foodchef::all();
        return view('backend.admin.showchef', compact('chefs'));
    }

    public function deletechef($id)
    {
        $dat = Foodchef::find($id);
        $dat->delete();
        return redirect()->back();
    }


    public function upchef($id)
    {

        $data = Foodchef::find($id);
        return view('backend.admin.updatechefs', compact('data'));
    }

    public function updatechef(Request $request, $id)
    {

        $data = Foodchef::find($id);
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();

        return redirect()->back();
    }

    public function orders()
    {
        if (Auth::id()) {
            $orders = Order::all();
            return view('backend.admin.orders', compact('orders'));
        } else {
            return redirect('/login');
        }
    }


    public function search(Request $request)
    {
        $search = $request->search;

        $orders = Order::where('name', 'Like', '%' . $search . '%')->get();
        return view('backend.admin.orders', compact('orders'));
    }
}
