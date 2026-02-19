<?php

namespace App\Services\Hrms;

class JabatanService extends BaseHrmsService
{
    public function all()
    {
        return $this->request('/jabatans');
    }
}
