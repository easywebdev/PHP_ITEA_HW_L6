<?php
use App\User

class CreateUserTask extends Tasks
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}