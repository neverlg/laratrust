<?php

namespace Laratrust\Contracts;

/**
 * This file is part of Laratrust,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Laratrust
 */

interface LaratrustRoleInterface
{
    /**
     * Morph by Many relationship between the role and the one of the possible user models
     *
     * @param  string $relationship
     * @return Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function getMorphedUserRelation($relationship);
    
    /**
     * Many-to-Many relations with the permission model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions();
    
    /**
     * Save the inputted permissions.
     *
     * @param mixed $permissions
     *
     * @return void
     */
    public function syncPermissions($permissions);
    
     /**
     * Attach permission to current role.
     *
     * @param object|array $permission
     *
     * @return void
     */
    public function attachPermission($permission);
    
    /**
     * Detach permission form current role.
     *
     * @param object|array $permission
     *
     * @return void
     */
    public function detachPermission($permission);
    
    /**
     * Attach multiple permissions to current role.
     *
     * @param mixed $permissions
     *
     * @return void
     */
    public function attachPermissions($permissions);
    
    /**
     * Detach multiple permissions from current role
     *
     * @param mixed $permissions
     *
     * @return void
     */
    public function detachPermissions($permissions);
}
