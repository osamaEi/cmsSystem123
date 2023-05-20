<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

use Illuminate\Support\Str;

class PermissionController extends Controller
{
     public function index() {
        
        return view('admin.permissions.index',
                    
                    ['permissions'=>Permission::all()
                    
                    
                    
                    ]);
        
    }
    
    
    public function store() {
        
        Permission::create(['name'=>request('name'),
                           'slug'=>Str::of(Str::lower(request('name')))->slug('-')
                          ]);
        
        
             return back();
    }
    
    public function edit(Permission $permission) {
        
        return view('admin.permissions.edit',['permission'=>$permission]);
        
    }
    
    public function destroy_permission (Permission $permission) {
        
        $permission->delete();
        
        return back();
        
    }
    
    public function update_permission(Permission $permission) {
        
              $permission->update([
            'name'=>request('name'),
            'slug'=>Str::lower(request('name'))
        ]);
       
        return back();
    }
    
}
