<?php

namespace Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Users\Models\Role;
use Modules\Users\Models\User;
use Illuminate\Http\Request;
use Modules\Categories\Models\Category;
use Modules\Users\Repositories\UserRepositoryInterface;


class UserController extends Controller
{
    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->getUsers();

        $columns = $this->repository->getColumns();

        $componentName = 'users::all-users-component';

        $categories = $this->repository->getAllCategories();

        $data = compact('users', 'columns');
            
        return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

    }

    /**
     * Display a listing of the users depending on the user role.
     *
     * @return \Illuminate\Http\Response
     */
    public function subCategoryIndex(Category $subCategory = null)
    {

        $users = $this->repository->getUsers($subCategory);

        $columns = $this->repository->getColumns();

        $componentName = 'users::' . $subCategory->slug . '-component';

        $categories = $this->repository->getAllCategories();

        $data = compact('users', 'columns');
            
        return view('layouts.admin-layout', compact('categories', 'componentName', 'data'));

    }


    /**
     * Check the user role.
     *
     * @return $roles
     */
    public function checkRoleByUserId(User $user)
    {
        $roles = $user->roles()->get();

        return $roles;
    }


    /**
     * Check if the user has role.
     *
     * @return boolean
     */
    public function hasRole(User $user, Role $role)
    {

        return $user->hasRole($role);

    }


    /**
     * Check if the user is Admin.
     *
     * @return boolean
     */
    public function isAdmin(User $user)
    {

        return $user->isAdmin();

    }


    /**
     * Get the user with certain id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function getUser($id) {

        // $user = User::find($id);

        $user = User::where('id', 1)->first();

        return $user;

    }

    /**
     * Get all users with certain role
     *
     * @param string $role
     * @return \Illuminate\Http\Response
     */
    public function getUserByRole(Role $role) {

        $users = User::findByRole($role);

        return $users;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\User\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\User\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showAll(User $user)
    {
        $users = $user->with('roles')->get();

        return $users;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\User\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function showAllTrainees(User $user)
    {
        $users = $user->whereHas('roles', function($query) {

                    $query->whereIn('name', ['trainee', 'guest']);

                })->get();

        $users = $users->toJson();

        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modules\User\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\User\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\User\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
