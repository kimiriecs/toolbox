<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\User  $user
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
