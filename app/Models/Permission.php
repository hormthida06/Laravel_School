<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['permission_name' , 'slug', 'permission_group'];
    
    public static function getAllPermissions(){
        $arrayOfPermissionsGroups = [];
        $permissionsGroups = Permission::groupBy('permission_group')->get();
        foreach($permissionsGroups as $permissionsGroup){
            $permissionsInAGroup = Permission::where('permission_group' ,'=' ,$permissionsGroup->permission_group)->get();
            $arrayOfPermissionsGroups[$permissionsGroup->permission_name] = $permissionsInAGroup;
        }
        return $arrayOfPermissionsGroups;
    }
}
