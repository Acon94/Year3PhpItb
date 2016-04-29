<?php
namespace ItbTest;

use Itb\Model\PrivateMessage;

class PrivateMessageTest extends \PHPUnit_Framework_TestCase
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
        $qm = new PrivateMessage();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testText()
    {
        // Arrange
        $qm = new PrivateMessage();
        $expectedResult = null;

        // Act
        $result = $qm->getText();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testUser()
    {
        // Arrange
        $qm = new PrivateMessage();
        $expectedResult = null;

        // Act
        $result = $qm->getUser();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testTimeStamp()
    {
        // Arrange
        $qm = new PrivateMessage();

        $dateTimeObject = new \DateTime();
        $dateTimeObject->setTimestamp($this->timestamp);

        $expectedResult = $dateTimeObject;
        // Act
        $result = $qm->getTimestamp();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testReciver()
    {
        // Arrange
        $qm = new PrivateMessage();
        $expectedResult = null;
        // Act
        $result = $qm->getReciver();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetUser()
    {
        // Arrange
        $qm = new PrivateMessage();
        $expectedResult = 'paul';
        $user = 'paul';

        // Act
        $qm->setUser($user);
        $result = $qm->getUser();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetText()
    {
        // Arrange
        $qm = new PrivateMessage();
        $expectedResult = 'test text';
        $text = 'test text';
        // Act
        $qm->setText($text);
        $result = $qm->getText();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetTimeStamp()
    {

        // Arrange
        $qm = new PrivateMessage();
        $expectedResult = null;
        $expires = $qm->getTimestamp();

        // Act
        $result = $qm->setTimestamp($expires);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetReciver()
    {
        // Arrange
        $qm = new PrivateMessage();
        $expectedResult = 'reciver';
        $reciver = 'reciver';
        // Act
       $qm->setReciver($reciver);
       $result = $qm->getReciver();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


}
