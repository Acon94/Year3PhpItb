<?php
namespace ItbTest;

use Itb\Model\Message;

class MessageTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * date of jobs
     * @var string
     */

    private $timestamp;


    public function testGetId()
    {
        // Arrange
        $qm = new Message();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testText()
    {
        // Arrange
        $qm = new Message();
        $expectedResult = null;

        // Act
        $result = $qm->getText();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testUser()
    {
        // Arrange
        $qm = new Message();
        $expectedResult = null;

        // Act
        $result = $qm->getUser();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testTimeStamp()
    {
        // Arrange
        $qm = new Message();

        $dateTimeObject = new \DateTime();
        $dateTimeObject->setTimestamp($this->timestamp);

        $expectedResult = $dateTimeObject;
        // Act
        $result = $qm->getTimestamp();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetUser()
    {
        // Arrange
        $qm = new Message();
        $expectedResult = 'user';
        $user = 'user';

        // Act
        $qm->setUser($user);
        $result = $qm->getUser();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetText()
    {
        // Arrange
        $qm = new Message();
        $expectedResult = 'This IS A test';
        $text = 'This IS A test';
        // Act
        $qm->setText($text);
        $result = $qm->getText();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetTimeStamp()
    {

        // Arrange
        $qm = new Message();
        $expectedResult = null;
        $expires = $qm->getTimestamp();

        // Act
        $result = $qm->setTimestamp($expires);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }



}
