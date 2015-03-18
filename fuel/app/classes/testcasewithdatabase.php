<?php

use Fuel\Core;

abstract class TestCaseWithDatabase extends \PHPUnit_Extensions_Database_TestCase
{
    static public $pdo = null;
    public $conn = null;

    final public function getConnection()
    {
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO( $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'] );
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, $GLOBALS['DB_DBNAME']);
        }

        return $this->conn;
    }

    public function getDataSet()
    {
        $compositeDs = new PHPUnit_Extensions_Database_DataSet_CompositeDataSet([]);

        // fixture配下の.xmlファイルをすべて読み込んでデータセットしてる
        $dir = APPPATH . '/tests/fixtures';
        $fh  = opendir($dir);

        while ($file = readdir($fh)) {
            if ( preg_match('/^\./', $file) ) {
                continue;
            }
            if ( preg_match('/\.xml$/', $file) ) {
                $ds = $this->createMySQLXMLDataSet("$dir/$file");
                $compositeDs->addDataSet($ds);
            }
        }

        return $compositeDs;
    }
}
