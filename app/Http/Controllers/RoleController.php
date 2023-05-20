<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\Permission;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    
    
    public function index() {
        
        return view('admin.roles.index',[
            
            'roles' =>Role::all()
            
            
        ]);
        
    }
    
    
    
    public function store() {
        
        Role::create([
            'name'=>request('name'),
            'slug'=>Str::lower(request('name'))
        ]);
       
        return back();
        
        
        
    }
    
    
    public function destory (Role $role) {
        
        
        $role->delete();
        
        session()->flash('role-deleted','role has deleted',$role->name);
        
        return back();
        
        
    }
    
    public function edit(Role $role) {
        
        return view('admin.roles.edit',
  ['role' => $role,
   'permissions' => Permission::all()
 ]);
        
        
        
    }
    
    
        public function update(Role $role) {
        
       
           $role->update([
            'name'=>request('name'),
            'slug'=>Str::lower(request('name'))
        ]);
       
  
        
            
         return back();
        
        
    }
        public function attach(Role $role) {
        
        $role->permission()->attach(request('permission'));
        
        return back();
        
    }
    
    
    
        
          public function detach(Role $role) {
        
        $role->permission()->detach(request('permission'));
        
        return back();
        
    }
    
    
    
    
}
