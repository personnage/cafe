<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use App\Models\Role;
use App\Repositories\UserRepository;

class DashboardController extends Controller
{
    /**
     * The user repository instance.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return view('admin.dashboard.index', [
            'users' => $this->users->latest(),
            'usersCount' => $this->users->totalUsers(),
            'rolesCount' => Role::count(),
            'permissionsCount' => Permission::count(),
        ]);
    }
}
