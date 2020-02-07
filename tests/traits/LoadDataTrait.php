<?php

namespace app\tests\traits;

trait LoadDataTrait
{
    /**
     * @param string $filepath
     *
     * @return false|string
     */
    public function loadData($filepath)
    {
        return file_get_contents($filepath);
    }
}
