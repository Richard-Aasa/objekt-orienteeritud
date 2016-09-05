<?php
class DatabaseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;
    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE hello (what VARCHAR(50) NOT NULL)");
    }
    public function tearDown()
    {
        $this->pdo->query("DROP TABLE hello");
    }
    public function testDatabase()
    {
        $database = new Database($this->pdo);
        $this->assertEquals('Hello World', $database->hello());
    }
    public function testHello()
    {
        $database = new Database($this->pdo);
        $this->assertEquals('Hello Bar', $database->hello('Bar'));
    }
    public function testWhat()
    {
        $database = new Database($this->pdo);
        $this->assertFalse($database->what());
        $database->hello('Bar');
        $this->assertEquals('Bar', $database->what());
    }
}
