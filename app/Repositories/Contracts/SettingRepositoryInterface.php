<?php

namespace App\Repositories\Contracts;

interface SettingRepositoryInterface
{
    /**
     * get seo fields of settings
     * @param  integer $id     setting id
     * @param  array  $fields fields we need for seo
     * @return Setting object
     */
    public function getSeo($id, $fields = []);
}
