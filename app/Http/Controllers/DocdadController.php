<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Docdad;
use App\Models\Category;
use App\Models\Visibility;
use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use App\Models\User;
use App\Models\Stat;
use DB;
use Hash;
use Illuminate\Support\Arr;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class DocdadController extends Controller
{
    use UploadTrait;
    //
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store', 'userindex','adminlire','edituser']]);
         $this->middleware('permission:role-create', ['only' => ['create','store', 'userindex', 'adminlire','edituser',]]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update', 'userindex','adminlire', 'edituser']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy', 'userindex','adminlire','edituser']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chart_options = [
            'chart_title' => 'Views by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Stat',
            'group_by_field' => 'updated_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
        ];  
        $chart1 = new LaravelChart($chart_options);
        
      $visibilities = Visibility::all();
      $categories= Category::all();
      
      $docdads=Docdad::where([
         ['title', '!=', null],
          [function ($query) use ($request){
                 if(($term =$request->term)){
                     $query->orWhere('title', 'LIKE','%'.$term.'%')->get();

                 }


          
        }]
        ])
          ->orderBy("id", "desc")
          ->paginate(10);
       //$docdads = Docdad::orderBy('id','DESC')->paginate(5);
        return view('admin.docdad.index',compact('docdads','visibilities', 'categories', 'chart1'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $visibilities = Visibility::all();
      $categories= Category::all();
      $documents= Docdad::all();
        return view('admin.docdad.create',compact('visibilities', 'categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'auteur' => 'required',
            //'name' => 'required',
            //'slug' => 'required',
            'description' => 'required',
            'fichier.*' => 'required|file|mimes:pdf|max:5000',
            'tags' => 'required',
        ]);
        $docdad= new Docdad;
        $input = $request->all();
        
        $docdad->title=$request->input('title');
        $docdad->auteur=$request->input('auteur');
        $docdad->name=Str::slug($request->input('title')).'_'.time();
        $docdad->description=$request->input('description');
        
        $docdad->category_id=$request->input('category_id');
        $cat_id=$request->input('category_id');
        $cat=Category::find( $cat_id);
        $docdad->references=$cat->name;
        
        $docdad->visibility_id=$request->input('visibility_id');
        //$docdad->name=
        $image = $request->file('fichier');
        // Make a image name based on user name and current timestamp
        $name = Str::slug($request->input('title')).'_'.time();
        // Define folder path
        $folder = '/uploads/dad_dedras_docs/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        // Upload image
        $this->uploadOne($image, $folder, 'public', $name);
        // Set user profile image path in database to filePath
        $docdad->fichier = $filePath;
        //$docdad = Docdad::create($input);
        $tags = explode(", ", $request->input('tags'));
        $docdad->slug=Str::slug($request->input('title')).md5(rand(1, 10) . microtime());

    
        $docdad->save();
        $docdad->tag($tags);
        $docdad->save();


        //return back()->with('success','Document enregistrer avec succès.');
        return redirect()->back()->with(['success' => 'Document enregistré avec succès.']);
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $visibilities = Visibility::all();
         $categories= Category::all();
         $doc=Docdad::find($id);
         
        return view('admin.docdad.docdadedit',compact('doc','visibilities', 'categories'));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edituser($id)
    {
         $visibilities = Visibility::all();
         $categories= Category::all();
        
       $user = User::find($id);
       $roles = Role::pluck('name','name')->all();
          $userRole = $user->roles->pluck('name','name')->all();
         
        return view('users.edit',compact('user','roles','userRole','visibilities', 'categories'));

    }

    /**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function updateuser(Request $request, $id)
{
$this->validate($request, [
/*'firstname'=> 'required',
'lastname'=> 'required',*/
/*'pays'=> 'required',
'numTel'=> 'required|string|min:8|max:11',
'email' => 'required|email|unique:users,email,'.$id,*/
'password' => 'same:confirm-password',
'roles' => 'required'
]);
$input = $request->all();
if(!empty($input['password'])){ 
$input['password'] = Hash::make($input['password']);
}else{
$input = Arr::except($input,array('password'));    
}

$user = User::find($id);
if ($request->has('visibility_id') ){
    $user->visibility_id=$request->input('visibility_id');
 }


$user->update($input);
DB::table('model_has_roles')->where('model_id',$id)->delete();
$user->assignRole($request->input('roles'));
return redirect()->route('admin.userslist')
->with('success','User updated successfully');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $visibilities = Visibility::all();
         $categories= Category::all();
         $doc=Docdad::find($id);
         
        return view('admin.docdad.docdadshow',compact('doc','visibilities', 'categories'));

    }
      /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userindex()
    {
         $visibilities = Visibility::all();
         $categories= Category::all();
         $users=User::orderBy('id', 'ASC')->paginate(10);
         
         
        return view('admin.docdad.usersgest',compact('users','visibilities', 'categories'));

    }

    public function adminlire($id){
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



public function updateDoc(Request $request, $id)
{
    // Form validation
    $request->validate([ 
    'title' => 'required',
    'auteur' => 'required',
    //'name' => 'required',
    //'slug' => 'required',
    'description' => 'required',
    //'fichier.*' => 'required|file|mimes:pdf|max:5000',
    //'tags' => 'required',
    ]);

    // Get current user
    $docdad =Docdad::findOrFail($id);
    // Set user name
    $docdad->title = $request->input('title');
    $docdad->auteur= $request->input('auteur');
    $docdad->description = $request->input('description');
    

    if ($request->has('category_id') ){
       $docdad->category_id=$request->input('category_id');
       $cat_id=$request->input('category_id');
       $cat=Category::find( $cat_id);
       $docdad->references=$cat->name;
    }
    if ($request->has('visibility_id') ){
        $docdad->visibility_id=$request->input('visibility_id');
     }
    // Persist user record to database
    $docdad->save();

    // Return user back and show a flash message
    return redirect()->route('listDocs')
    ->with('success','Document modifié avec succès');
}
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rolesindex()
    {
         $visibilities = Visibility::all();
         $categories= Category::all();
         
        $roles = Role::orderBy('id','DESC')->paginate(5);
         
        return view('admin.docdad.rolesgest',compact('roles','visibilities', 'categories'));

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
    
        return view('roles.edit',compact('role','permission','rolePermissions'));
    }*/
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
    }*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("docdads")->where('id',$id)->delete();
        return redirect()->route('listDocs')
                        ->with('success','Document supprimé avec succès');
    }

    /***CATERGOYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY
     * 
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryindex(Request $request)
    {
        
      $visibilities = Visibility::all();
      $categories= Category::all();
      
      $docdads=Category::where([
         ['name', '!=', null],
          [function ($query) use ($request){
                 if(($term =$request->term)){
                     $query->orWhere('name', 'LIKE','%'.$term.'%')->get();

                 }


          
        }]
        ])
          ->orderBy("id", "desc")
          ->paginate(10);
       //$docdads = Docdad::orderBy('id','DESC')->paginate(5);
        return view('admin.docdad.categoryindex',compact('docdads','visibilities', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categorycreate()
    {
        $visibilities = Visibility::all();
        $categories= Category::all();
       
        return view('categorycreate',compact('visibilities','categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categorystore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
           
        ]);
    
        $cat= new Category;
        
        $cat->name=$request->input('name');
        $cat->slug=Str::slug($request->input('name')).'_'.time();
        $cat->save();
       
    
        return redirect()->route('indexCat')
                        ->with('success','Role created successfully');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function catedit($id)
    {
         $visibilities = Visibility::all();
         $categories= Category::all();
         $cat=Category::find($id);
         
         return view('admin.docdad.categoryedit',compact('cat','visibilities', 'categories'));

    }
    public function updatecategory(Request $request, $id)
   {
    // Form validation
    
    $this->validate($request, [
        'name' => 'required',
    ]);

    $category = Category::find($id);
    $category->name = $request->input('name');
    $category->save();



    // Return user back and show a flash message
    return redirect()->route('indexCat')
    ->with('success','Catégorie modifiée avec succès');
}

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categorydestroy($id)
    {
        DB::table("categories")->where('id',$id)->delete();
        return redirect()->route('indexCat')
                        ->with('success','Catégorie supprimé avec succès');
    }





        /***ACCREDITATIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
     * 
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visibilityindex(Request $request)
    {
        
      $visibilities = Visibility::all();
      $categories= Category::all();
      
      $visibilitys=Visibility::where([
         ['name', '!=', null],
          [function ($query) use ($request){
                 if(($term =$request->term)){
                     $query->orWhere('name', 'LIKE','%'.$term.'%')->get();

                 }


          
        }]
        ])
          ->orderBy("id", "desc")
          ->paginate(10);
       //$docdads = Docdad::orderBy('id','DESC')->paginate(5);
        return view('admin.docdad.visibilityindex',compact('visibilitys','visibilities', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visibilitycreate()
    {
        $visibilities = Visibility::all();
        $categories= Category::all();
       
        return view('visibilitycreate',compact('visibilities','categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function visibilitystore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
           
        ]);
    
        $cat= new Visibility;
        /*$cat->id=3;*/
        $cat->name=$request->input('name');
        $cat->slug=Str::slug($request->input('name')).'_'.time();
        $cat->save();
       
    
        return redirect()->route('indexVis')
                        ->with('success','Accréditation créé avec succès');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function visedit($id)
    {
         $visibilities = Visibility::all();
         $categories= Category::all();
         $vis=Visibility::find($id);
         
        return view('admin.docdad.visibilityedit',compact('vis','visibilities', 'categories'));

    }
    public function updatevisibility(Request $request, $id)
   {
    // Form validation
    
    $this->validate($request, [
        'name' => 'required',
    ]);

    $visibility = Visibility::find($id);
    $visibility->name = $request->input('name');
    $visibility->save();

    // Return user back and show a flash message
    return redirect()->route('indexCat')
    ->with('success','Accreditation modifiée avec succès');
}

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function visibilitydestroy($id)
    {
        DB::table("visibilities")->where('id',$id)->delete();
        return redirect()->route('indexVis')
                        ->with('success','Accreditation supprimée avec succès');
    }



    
}
