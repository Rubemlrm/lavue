<?php

namespace App\Repositories;

use App\Models\Setting;
use App\Repositores\Contracts\SettingRepositoryInterface;

class SettingRepository implements SettingRepositoryInterface
{

    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    /**
     * Search settings by id
     *
     * @param  integer $id settting id
     * @return Setting object
     */
    public function find($id)
    {
        return $this->setting->find($id);
    }

    /**
     * get seo fields of settings
     * @param  integer $id     setting id
     * @param  array  $fields fields we need for seo
     * @return Setting object
     */
    public function getSeo($id, $fields = [])
    {
        return $this->setting->find($id)->get($fields);
    }
}
