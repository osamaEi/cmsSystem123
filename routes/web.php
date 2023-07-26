<?php

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\PaymentController;




Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/post/{post}', [PostController::class, 'show'])->name('post');

Route::middleware('auth')->group(function(){
    
   
Route::get('/admin', [AdminsController::class, 'index'])->name('admin.index');

      Route::get('/admin/posts/', [PostController::class, 'index'])->name('post.index');
    
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('post.create');
    
    Route::post('/admin/posts/', [PostController::class, 'store'])->name('post.store');
    
       Route::delete('/admin/posts/{post}/delete', [APostController::class, 'destroy'])->name('post.destroy');
    
  Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

        Route::patch('/admin/posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    
    
    Route::get('admin/users/{user}/profile',[App\Http\Controllers\UserController::class,'show'])->name('user.show');
    
        
    Route::put('admin/users/{user}/update',[App\Http\Controllers\UserController::class,'update'])->name('user.profile.update');
    
        
  
    
    
    
      Route::delete('/admin/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
}); 


Route::middleware('auth')->group(function(){
    
    
    
    

            Route::get('/admin/users/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    

    
});



Route::middleware(['auth'])->group(function(){
    
    
    Route::get('admin/users/{user}/profile',[App\Http\Controllers\UserController::class,'show'])->name('user.show');
    
        
    
    Route::put('/users/{user}/attach',[App\Http\Controllers\UserController::class, 'attach'])->name('user.role.attach');
    
    
    
    
    Route::put('/users/{user}/detach',[App\Http\Controllers\UserController::class, 'detach'])->name('user.role.detach');
});







Route::get('/roles',[App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');


Route::post('/roles',[App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');


Route::delete('/roles/{role}/delete',[App\Http\Controllers\RoleController::class, 'destory'])->name('roles.destroy');

Route::get('/roles/{role}/edit',[App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');


Route::put('/roles/{role}/update',[App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');




Route::get('/permissions',[App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');

  Route::put('/roles/{role}/attach',[App\Http\Controllers\RoleController::class, 'attach'])->name('role.permission.attach');
    

 Route::put('/roles/{role}/detac',[App\Http\Controllers\RoleController::class, 'detach'])->name('role.permission.detach');
    
Route::post('/permission',[App\Http\Controllers\PermissionController::class, 'store'])->name('permissions.store');

Route::get('/permissions/{permission}/edit',[App\Http\Controllers\PermissionController::class, 'edit'])->name('permissions.edit');

Route::delete('/permissions/{permission}/delete',[App\Http\Controllers\PermissionController::class, 'destroy_permission'])->name('permissions.destroy_permission');

Route::put('/permissions/{permission}/update',[App\Http\Controllers\PermissionController::class, 'update_permission'])->name('permissions.update_permission');


Route::post('pay',[PaymentController::class,'pay'])->name('payment');




