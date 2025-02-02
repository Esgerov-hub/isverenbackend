<?php

namespace App\Contracts;

interface JobTypeRepository
{
    public function create(array $data);
    public function update($id, array $data);
    public function getAll();
}
