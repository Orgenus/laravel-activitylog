<?php

namespace Spatie\Activitylog\Messages;

class ActivityMessage
{
    public $activtyData;
    public $appName;

    /**
     * @return mixed
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * @param mixed $appName
     */
    public function setAppName($appName): void
    {
        $this->appName = $appName;
    }



    /**
     * @return mixed
     */
    public function getActivtyData()
    {
        return $this->activtyData;
    }

    /**
     * @param mixed $activtyData
     */
    public function setActivtyData($activtyData): void
    {
        $this->activtyData = $activtyData;
    }


}
