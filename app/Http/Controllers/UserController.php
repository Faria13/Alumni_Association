<?php
namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Models\Department;
use App\Models\Batch;
use Session;
use Auth;
use Redirect;
use Storage;
session_start();
class UserController extends Controller{

    public function user_registration(Request $request){

        $this->validation($request);
        $user = new User;
        $user->full_name = $request->full_name;
        $user->email=$request->email;
        $user->session=$request->session;
        $user->password = bcrypt($request->password);
        $user->role_type_id = 2;
        $user->department_id = $request->department_id;
        $user->batch_id = $request->batch_id; 
        $user->save();
        return Redirect('/user_login')->with('message','User registration Successfully');
        
    }
    public function validation($request){

        return $this->validate($request, [
            'full_name'    =>'required|unique:users|min:4',
            'email'        =>'required|string|email|unique:users|max:255',
            'password'     =>'required|string|confirmed|min:7',
        ]);
    }

    public function user_login(Request $request){

        $email     = $request->email;
        $password  = $request->password;
       
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
           
            return redirect()->route('user_profile');
        }

        Session::flash('message','Email Or Password Is Incorrect');
        return redirect()->back();
    }


    public function reset_password(){
        return view('new_password');
    }

    public function change_password(){
        return view('change_password');
    }
    public function user_logout(){
        Auth::logout();
        return Redirect('/');
    }
    public function user_profile(Request $request){

        $user_id = Auth::user()->id;
        $user =  User::find($user_id);

        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/images');
            $image->move($location, $filename);
            $user->avatar = $filename;
         }
        $user->save();
        return Redirect('/user_profile')->with('message','Profile picture added Successfully');
    }
    public function user_introduction(Request $request){
       $user_id = Auth::user()->id;
       $user =  User::find($user_id);
       $user->about = $request->about;
       $user->save();
       return Redirect('/user_profile')->with('message','Introductuion added Successfully');
    }
    public function alumni_profile($request){

        $user = User::where('id', $request)->get();
        return view('/alumni_profile')->withUser($user);
     }
    public function edit_profile(){
        $user_id = Auth::user()->id;
        $user =  User::find($user_id);
        $user->avatar = $image->getFilename().'.'.$extension;
        $user->save();
        return Redirect('/user_profile')->with('message','Profile picture added Successfully!');
    }
    public function job_post(Request $request){
        return Redirect('/');
    }
    public function public_post(){
        return view('jobs');
    }
    public function photo_gallery(){
        return view('photo_gallery');
    }
}