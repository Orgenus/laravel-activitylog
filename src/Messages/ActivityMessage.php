<?php

namespace Spatie\Activitylog\Messages;

class ActivityMessage
{
    public mixed $activtyData;
    public mixed $appName;
    public mixed $subjectData;

    /**
     * @return mixed
     */
    public function getSubjectData(): mixed
    {
        return $this->subjectData;
    }

    /**
     * @param mixed $subjectData
     */
    public function setSubjectData(mixed $subjectData): void
    {
        $this->subjectData = $subjectData;
    }


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
