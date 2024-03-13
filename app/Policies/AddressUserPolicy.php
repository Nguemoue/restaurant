<?php

namespace App\Policies;

use App\Models\AddressUser;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddressUserPolicy
{
    use HandlesAuthorization;


	public function viewAny(User $user): bool
    {
    	return true;
    }

    public function view(User $user, AddressUser $addressUser): bool
    {
    	return true;
    }

    public function create(User $user): bool
    {
		 return true;
	 }

    public function update(User $user, AddressUser $addressUser): bool
    {
		 return true;

	 }

    public function delete(User $user, AddressUser $addressUser): bool
    {
		 return true;

	 }

    public function restore(User $user, AddressUser $addressUser): bool
    {
		 return true;

	 }

    public function forceDelete(User $user, AddressUser $addressUser): bool
    {
		 return true;

	 }
}
