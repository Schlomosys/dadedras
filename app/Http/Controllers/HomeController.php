<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Post;
use App\Models\Docdad;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $docdads=Docdad::where([
            ['title', '!=', null],
             [function ($query) use ($request){
                    if(($term =$request->term)){
                        $query->orWhere('title', 'ilike',"{$term}%")->orWhere('title', 'ilike',"%{$term}%")->orWhere('references', 'ilike',"%{$term}%")->get();
   
                    }
   
   
             
           }]
           ])
             ->orderBy("id", "desc")
             ->paginate(3);
          
             return view('home',compact('docdads',))
            ->with('i', ($request->input('page', 1) - 1) * 1);

       
    }
    public function projets()
    {
        return view('projets');
    }
    public function apropos()
    {
        return view('apropos');
    }
    public function contact()
    {
        return view('contact');
    }
    public function homebisone(Request $request)
    {
        $docdads=Docdad::where([
            ['title', '!=', null],
             [function ($query) use ($request){
                    if(($term =$request->term)){
                        $query->orWhere('title', 'ilike',"{$term}%")->orWhere('title', 'ilike',"%{$term}%")->orWhere('references', 'ilike',"%{$term}%")->get();
   
                    }
   
   
             
           }]
           ])
             ->orderBy("id", "desc")
             ->paginate(5);
          
             return view('homebisone',compact('docdads',))
            ->with('i', ($request->input('page', 1) - 1) * 1);


    }



    // voir un fichier telechargé 
public function publiclire($id){
    /*$filename = 'testa.pdf';
    
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(\Storage::cloud()->listContents($dir, $recursive));
    
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first();
        $filepath=$file['path'];    
    $user = User::findOrFail(auth()->user()->id);
    $file = File::find($id);*/
    $docdad=Docdad::find($id);
    /*return view('liredoc',compact('user', 'file', 'filepath'));*/
    return view('liredoc',compact('docdad'));
  }
  public function downloaddoc($id)
{
    $docdad=Docdad::find($id);
    $file_path = storage_path( $docdad->fichier);
    /*return Response::download($file_path);*/
    return response()->download("http://dadedras.herokuapp.com".$docdad->fichier);
}
    public function users()
    {
        $users = User::get();
        return view('users.users', compact('users'));
    }

    public function user($id)
    {
        $user = User::find($id);
        return view('users.usersView', compact('user'));
    }

    public function follwUserRequest(Request $request){


        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);
        //Si toogleFolllow return null
        if($response==null){
            return response()->json(['success'=>false]);

        }
         else{return response()->json(['success'=>$response]);}

        
    } 
    public function LikesUserRequest(Request $request){


        $user = User::find($request->user_id);
        $post=Post::find($request->id);
        $response = auth()->user()->toggleLike($post);
        //Si toogleFolllow return null
        if($response==null){
            return response()->json(['success'=>false]);

        }
         else{return response()->json(['success'=>true]);}

        
    } 
}
