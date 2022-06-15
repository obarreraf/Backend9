<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    public function index()
    {

        $permissions = Permission::paginate(1)->through(function ($permissions) {
            return [
                'id' => $permissions->id,
                'name' => $permissions->name,
            ];
        });
        
        return Inertia::render('Security/Permissions', ['permissions' => $permissions]);
    }
}
