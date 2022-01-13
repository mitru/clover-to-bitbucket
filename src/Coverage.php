<?php

namespace Kavinsky\CloverToBitbucket;

/**
 * Class Coverage
 *
 * @package Kavinsky\CloverToBitbucket
 */
class Coverage
{
    /**
     * @var array
     */
    public $files;

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param string $file
     */
    public function addFile($file)
    {
        $this->files[] = $file;
    }
}
