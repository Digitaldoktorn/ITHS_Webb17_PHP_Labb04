<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller {
    // public function index() {
    //     $users = User::all();
    //     return view('users.index', compact('users'));
    // }

    // Only logged in users can see quries. Pagination added.
    public function loggedIn() {
        if (Gate::allows('logged-in-only', auth()->user())){
            $users  = User::orderBy('name', 'asc')->paginate(20);
            return view('users.index', [
                'users' => $users
            ]);
        }
        return view ('login');
    }
}

