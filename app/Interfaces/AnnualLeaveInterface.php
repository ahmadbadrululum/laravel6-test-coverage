<?php

namespace App\Interfaces;

interface AnnualLeaveInterface
{
    public function createAnnualLeave(array $data);
    public function getAnnualLeaveById($id);
    public function getAllAnnualLeaves();
}

interface UserRepositoryInterface
{
    public function getUserById($id);
}
