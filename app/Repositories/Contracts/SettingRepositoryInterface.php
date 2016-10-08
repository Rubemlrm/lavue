<?php

namespace App\Repositories\Contracts;

interface SettingRepositoryInterface
{
    /**
     * Search settings by id
     *
     * @param  integer $id settting id
     * @return Setting object
     */
    public function find($id);

    /**
     * get seo fields of settings
     * @param  integer $id     setting id
     * @param  array  $fields fields we need for seo
     * @return Setting object
     */
    public function getSeo($id, $fields = []);
}
