<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tmovie;
use App\Models\movies;
use Session;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // 
    public function index()
    {
    	$data['result']=User::all();
    	return view('view',$data);

    }
    public function regview()
    {
    	return view('welcome');
    }
    public function register(Request $req)
    {
    	$data = new User;
    	$data->name=$req->input('name');
    	$data->email=$req->input('email');
    	$data->mobile=$req->input('mobile');
    	$data->password=$req->input('password');
    	$data->save();
    	return response()->json($data);
    }
    public function loginview()
    {
        return view('login');
    }
    public function login(Request $req)
    {
      
       
        $email=$req->input('email');
        $password=$req->input('password');
      $checkUser = User::where('email',$email)->where('password',$password)->first();
         if (isset($checkUser)){
        Session::put('sessid',$checkUser->id);   //Update
            $data=['email'=>$checkUser->email,
                    'id'=>$checkUser->id,
                    'message'=>"Login Successfull"];
                    return response()->json($data);
            }
            else
            {
            $data=['message'=>"Login Unsuccessfull"];
              return response()->json($data);
          }
          }
       
               
    public function addt()
    {
        $data['result']=tmovie::all();
        return view('tmovie',$data);
    }
    public function getmovie($id)
    {
        $data=movies::getmovies('movies',$id);
            foreach ($data as  $value) {

            ?>
        <option value="<?php echo $value->id;?>"><?php echo $value->mname;?></option>
       <?php }
    }

}
