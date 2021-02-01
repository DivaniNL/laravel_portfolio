<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
class AuthController extends Controller
{
    public function index()
    {
            return view('login');
    }
    public function view()
    {
        $users = User::all();
        if(Auth::check()){
            return view('users.index', compact('users'));
        }
        return Redirect::to("login")->withSuccess('Oops! You have entered invalid credentials');
    }

    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        //
        $request->validate([ 
            'name'=>'required', 
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = new User([
            'name'=> $request->get('name'), 
            'email'=> $request->get('email'),
            'password'=> Hash::make($request->get('password')),
        ]);
        $user->save();
        return redirect('/users')->with('success', 'Werk opgeslagen!');
    }



    public function postLogin(Request $request)
    {
        request()->validate([
            'email'     => 'required',
            'password'     => 'required',
        ]);

        $credentials = $request->only('email', 'password');
            
        if (Auth::attempt($credentials)) {
            var_dump($credentials);
            return redirect('/werken');
        }
        
        return Redirect::to("login")->with('message', 'You  have entered the wrong credentials.'."<br>".'Please Try again.');
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
            'name'     => 'required|min:2',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return Redirect::to('werken')->withSuccess("You logged in succesfully!");
        
    }

    public function projects()
    {
        if(Auth::check()){
            return view('werken');
        }

        return view('login')->withSuccess('You do not have access!');
    }

    // public function create(array $data)
    // {
    //     return User::create([
    //         'name'      => $data['name'],
    //         'email'     => $data['email'],
    //         'password'  => Hash::make($data['password'])
    //     ]);
    // }
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id) {
        {
        $request->validate([
            'name'=>'required', 
            'email'=>'required', 
            'password', 
        ]);       
        $user = User::find($id);
        $user->name = $request->get('name'); 
        $user->email = $request->get('email'); 
        $user->password = Hash::make($request->get('password'));

        
        $user->save();
        return redirect('/users/index')->with('success', 'Werk deleted!');
        }
    }
    public function destroy($id)
    {
        {
            $user = User::find($id); $user->delete();
            return redirect('/users/index')->with('success', 'Werk deleted!');
        }
    }
    public function show($id)
    {
        return __METHOD__ . ':' . $id;
    } 
    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

}
