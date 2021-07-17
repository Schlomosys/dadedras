<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcomebis');
});
/*Route::get('/home', function () {
    return view('home');
});*/

//route notice email verif
Route::get('/reloadcaptcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha'])->name('reloadcap');
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');   
//email verification handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
//resending email verification

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/homebisone', [App\Http\Controllers\HomeController::class, 'homebisone']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/read/{id}', [App\Http\Controllers\HomeController::class, 'publiclire'])->name('read');

Route::get('/download/{id}', [App\Http\Controllers\HomeController::class, 'downloaddoc'])->name('downl');

Route::get('/projets', function () {
    return view('projets');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
  
//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('login/{provider}', [App\Http\Controllers\SocialController::class,'redirect'])->name('sociallogin');
Route::get('login/{provider}/callback',[App\Http\Controllers\SocialController::class,'Callback']);

  
Route::group(['middleware' => ['auth']], function() {
    Route::any ( '/search', function () {
        $q = input::get ( 'q' );
        $docdads = Docdad::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'name', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $docdads ) > 0)
            return view ( 'admin.docdad.index' )->withDetails ( $docdads )->withQuery ( $q );
        else
            return view ( 'admin.docdad.index' )->withMessage ( 'No Details found. Try to search again !' );
    } )->name('search');
   /***GOOGLE DRIVEEEE */
    Route::get('test', function() {
        Storage::disk('google')->put('test.txt', 'Hello World Schallom');
    })->name('drivetest');

    Route::get('down', function() {
        $filename = 'testa.pdf';
    
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
    
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!
    
        //return $file; // array with file info
        //error_log('message here.');
       // var_dump("ESA");
    
        $rawData = Storage::cloud()->get($file['path']);
       // console.log($rawData);
    
        return response($rawData, 200)
            ->header('ContentType', $file['mimetype'])
            ->header('Content-Disposition', "attachment; filename='$filename'");
    })->name('downdrive');
   /*** GOOGLE DRIVE */
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    
    Route::get('/editer', [App\Http\Controllers\UserController::class, 'editer'])->name('users.editer');
    
    Route::get('utilisateurs', [App\Http\Controllers\HomeController::class, 'users'])->name('utilisateurs');
    Route::get('utilisateurs/{id}', [App\Http\Controllers\HomeController::class, 'user'])->name('utilisateurs.view');
    /*Route::post('folow', [App\Http\Controllers\HomeController::class, 'follwUserRequest'])->name('folow');*/
    Route::post('like', [App\Http\Controllers\HomeController::class, 'LikesUserRequest'])->name('like');
    Route::post('updateProfile/{id}', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('user.updateprofile');
    
   
    // FOLLOWS __NOTIFICATION
    Route::get('myusers', [App\Http\Controllers\UserController::class, 'index'])->name('myusers');
    
    Route::post('/activation', [App\Http\Controllers\UserController::class, 'activation'])->name('activation');
    
    Route::post('/accreditation', [App\Http\Controllers\UserController::class, 'accreditation'])->name('accreditation');
   /*Route::post('users/{user}/follow', [App\Http\Controllers\UserController::class, 'follow'])->name('tofollow');
    Route::delete('users/{user}/unfollow', [App\Http\Controllers\UserController::class, 'unfollow'])->name('toUnfollow');
    Route::get('/notifications', [App\Http\Controllers\UserController::class, 'notifications'])->name('notifications');
    Route::get('/getNotifs/{id}', [App\Http\Controllers\UserController::class, 'getNotifs'])->name('getNotifs');
    Route::get('/myusers/{notification}', [App\Http\Controllers\UserController::class, 'updateNotifs'])->name('updateNotifs');*/
    



    //POSTER ROUTE
    
    Route::get('/admin/read/{id}', [App\Http\Controllers\DocdadController::class, 'adminlire'])->name('adminread');
    Route::get('/account/read/{id}', [App\Http\Controllers\UserController::class, 'accountlire'])->name('accountread');
    Route::get('/account/{user:pseudo}', [App\Http\Controllers\UserController::class, 'account'])->name('user.account');//->middleware('verified');
    Route::get('/addPost/{id}', [App\Http\Controllers\UserController::class, 'addPost'])->name('user.addPost');
    Route::get('/postesList/{user:pseudo}', [App\Http\Controllers\UserController::class, 'postLists'])->name('user.postLists');

     Route::get('/parametres', [App\Http\Controllers\UserController::class, 'parametres'])->name('parametres');
     Route::get('/aide', [App\Http\Controllers\UserController::class, 'aide'])->name('aide');
    Route::get('/postesFav/{user:pseudo}', [App\Http\Controllers\UserController::class, 'favoritepost'])->name('favorites');
    Route::get('/historique/{user:pseudo}', [App\Http\Controllers\UserController::class, 'historique'])->name('historique');
   
   
    Route::put('/savepost/{id}', [App\Http\Controllers\UserController::class, 'savePost'])->name('user.savePost');
    Route::get('/deletepost/{id}', [App\Http\Controllers\UserController::class, 'deletepost'])->name('user.deletepost');

    Route::post('save-likedislike',[App\Http\Controllers\PostController::class, 'save_likedislike'])->name('post.likeDislike');

    
    Route::get('/article/{post:slug}', [App\Http\Controllers\UserController::class, 'onepostshow'])->name('post.show');
    Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');
    Route::post('/reply/store', [App\Http\Controllers\CommentController::class, 'replyStore'])->name('reply.add');

    //FILES ROUTES
    Route::get('/filesIndex/{id}', [App\Http\Controllers\UserController::class, 'filesIndex'])->name('file.index');
    Route::put('/savefile/{id}', [App\Http\Controllers\UserController::class, 'saveFile'])->name('file.saveFile');
    Route::get('/voirfile/{id}', [App\Http\Controllers\UserController::class, 'voirfile'])->name('voirfile.index');
    Route::get('/deletefile/{id}', [App\Http\Controllers\UserController::class, 'deletefile'])->name('file.deletefile');
    
    //DOCUMENTS ROUTES
   // Route::get('/addDoc', [App\Http\Controllers\DocdadController::class, 'create'])->name('createDoc');
    Route::get('/docsList', [App\Http\Controllers\DocdadController::class, 'index'])->name('listDocs');
    Route::get('/sersList', [App\Http\Controllers\DocdadController::class, 'userindex'])->name('admin.userslist');
    
    Route::get('/rolList', [App\Http\Controllers\DocdadController::class, 'rolesindex'])->name('admin.rolist');
    Route::put('/saveDoc', [App\Http\Controllers\DocdadController::class, 'store'])->name('storeDoc');
    Route::get('/editdoc/{id}', [App\Http\Controllers\DocdadController::class, 'edit'])->name('editdoc');
    
    Route::get('/edituser/{id}', [App\Http\Controllers\DocdadController::class, 'edituser'])->name('edituser');
    Route::put('/updateDoc/{id}', [App\Http\Controllers\DocdadController::class, 'updateDoc'])->name('updateDoc');
    
    Route::patch('/updateUser/{id}', [App\Http\Controllers\DocdadController::class, 'updateuser'])->name('updateuser');
    
    Route::delete('/deleteDoc/{id}', [App\Http\Controllers\DocdadController::class, 'destroy'])->name('deleteDoc');
    Route::get('/showdoc/{id}', [App\Http\Controllers\DocdadController::class, 'show'])->name('admin.docshow');
    Route::get('/addDoc/{id}', [App\Http\Controllers\DocdadController::class, 'edit'])->name('editDoc');
   // Route::get('/addDoc/{id}', [App\Http\Controllers\DocdadController::class, 'update'])->name('updateDoc');
   //Category
   Route::get('/indexCat', [App\Http\Controllers\DocdadController::class, 'categoryindex'])->name('indexCat');
   Route::get('/createcat', [App\Http\Controllers\DocdadController::class, 'categorycreate'])->name('createCat');
   Route::put('/storeCat', [App\Http\Controllers\DocdadController::class, 'categorystore'])->name('storeCat');
   
   Route::get('/editCat/{id}', [App\Http\Controllers\DocdadController::class, 'catedit'])->name('editCat');
   Route::put('/updateCat/{id}', [App\Http\Controllers\DocdadController::class, 'updatecategory'])->name('updateCat');
   Route::delete('/destroyCat/{id}', [App\Http\Controllers\DocdadController::class, 'categorydestroy'])->name('destroyCat');
    //ACCREDITATIONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
    
   Route::get('/indexVis', [App\Http\Controllers\DocdadController::class, 'visibilityindex'])->name('indexVis');
   Route::get('/createVis', [App\Http\Controllers\DocdadController::class, 'visibilitycreate'])->name('createVis');
   Route::put('/storeVis', [App\Http\Controllers\DocdadController::class, 'visibilitystore'])->name('storeVis');
   
   Route::get('/editVis/{id}', [App\Http\Controllers\DocdadController::class, 'visedit'])->name('editVis');
   Route::get('/updateVis/{id}', [App\Http\Controllers\DocdadController::class, 'updatevisibility'])->name('updateVis');
   Route::delete('/destroyVis/{id}', [App\Http\Controllers\DocdadController::class, 'visibilitydestroy'])->name('destroyVis');


        // FOLLOWS __NOTIFICATION
    Route::get('myusers', [App\Http\Controllers\UserController::class, 'index'])->name('myusers');
    Route::post('users/{user}/follow', [App\Http\Controllers\UserController::class, 'follow'])->name('tofollow');
    Route::delete('users/{user}/unfollow', [App\Http\Controllers\UserController::class, 'unfollow'])->name('toUnfollow');
    Route::get('/notifications', [App\Http\Controllers\UserController::class, 'notifications'])->name('notifications');
    Route::get('/getNotifs/{id}', [App\Http\Controllers\UserController::class, 'getNotifs'])->name('getNotifs');
    Route::get('/myusers/{notification}', [App\Http\Controllers\UserController::class, 'updateNotifs'])->name('updateNotifs');




    

});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
