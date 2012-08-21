<?php

namespace Ajgl\Doctrine\DBAL\Types;

use Doctrine\DBAL\Types\Type;
use Doctrine\Tests\DBAL\Mocks\MockPlatform;

/**
 * Test class for LtreeType.
 * Generated by PHPUnit on 2012-07-18 at 09:03:09.
 */
class LtreeTypeTest
    extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MockPlatform
     */
    protected $platform;

    /**
     * @var LtreeType
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        if (!Type::hasType('ltree')) {
            Type::addType('ltree', 'Ajgl\Doctrine\DBAL\Types\LtreeType');
        } else {
            Type::overrideType('ltree', 'Ajgl\Doctrine\DBAL\Types\LtreeType');
        }
        $this->platform = new MockPlatform();
        $this->object = Type::getType('ltree');
    }

    /**
     * @covers Ajgl\Doctrine\DBAL\Types\LtreeType::getSqlDeclaration
     */
    public function testGetSqlDeclaration()
    {
        $this->assertEquals('LTREE', $this->object->getSqlDeclaration(array(), $this->platform));
        $this->assertEquals('LTREE', $this->object->getSqlDeclaration(array('length' => 5), $this->platform));
    }

    /**
     * @covers Ajgl\Doctrine\DBAL\Types\LtreeType::getName
     */
    public function testGetName()
    {
        $this->assertEquals(LtreeType::LTREE, $this->object->getName());
    }
}