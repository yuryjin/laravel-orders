<?php

namespace App\Http\Controllers;

//use App\Contact;
//use App\Models\Contact;
//use App\Models\Contact;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Username;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function users() {
        $users = new Username();
        return view('users', ['users' => $users->all()]);
    }

    public function orders() {
        $orders = new Order();
        return view('orders', ['orders' => $orders->all()]);
    }

    public function createuser() {
        return view('createuser');
    }

    public function createorder() {
        return view('createorder');
    }


    public function createorder_creation(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'username' => 'required|min:4|max:100',
            'order' => 'required|min:4|max:500',
        ]);

        $createorder = new Order();
        $createorder->email = $request->input('email');
        $createorder->username = $request->input('username');
        $createorder->order = $request->input('order');

        $createorder->save();

        return redirect()->route('createorder');

    }

    public function createuser_creation(Request $request) {
        $valid = $request->validate([
            'username' => 'required|min:4|max:100',
            'number' => 'required|min:4|max:500',
        ]);
        $createuser = new Username();
        $createuser->username = $request->input('username');
        $createuser->number = $request->input('number');

        $createuser->save();

        return redirect()->route('createuser');

    }

    public function delete($id)
    {
        DB::table('usernames')->where('id', $id)->delete();
        return redirect('/users');
    }

    public function deleteorder($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect('/orders');
    }

    /*
    public function deleteUser($id)
    {
        $user = Username::find($id);
        $user->delete();
        return redirect()->route('users');
    }
    */

    /*
    public function destroy($id)
    {
        $user = Username::find($id);
        $user->delete();
    }
    */
}
