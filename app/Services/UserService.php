<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{
    public function __construct(
        protected UserRepositoryInterface $users
    ) {
    }

    public function paginate()
    {
        return $this->users->paginate();
    }
}