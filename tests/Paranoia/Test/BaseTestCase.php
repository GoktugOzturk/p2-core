<?php
namespace Paranoia\Test;

abstract class BaseTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @param null $suffix
     * @return string
     */
    protected function getMockDataFile($suffix = null)
    {
        $filePath = dirname(__FILE__);
        $rootPath = substr($filePath,0, strpos($filePath, 'paranoia2/tests', 0)+9);
        $dataPath = implode(
            DIRECTORY_SEPARATOR,
            array($rootPath,'resources', 'data', str_replace('\\', DIRECTORY_SEPARATOR, get_class($this)))
        );
        if($suffix) {
            return $dataPath . '_' . $suffix . '.xml';
        }
        return $dataPath . '.xml';
    }
}