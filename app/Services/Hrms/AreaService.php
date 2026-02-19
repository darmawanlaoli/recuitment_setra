<?php

namespace App\Services\Hrms;

class AreaService extends BaseHrmsService
{
    public function all()
    {
        return $this->request('/areas');
    }
}
