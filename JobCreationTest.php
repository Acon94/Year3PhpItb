<?php
/**
 * Created by PhpStorm.
 * User: Andrew C
 * Date: 20/04/2016
 * Time: 23:47
 */
namespace ItbTest;

use Itb\Model\JobCreation;
use JsonSchema\Constraints\Object;
use Zend\I18n\Validator\DateTime;


class JobCreationTest extends \PHPUnit_Framework_TestCase
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
        $qm = new JobCreation();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testLocation()
    {
        // Arrange
        $qm = new JobCreation();
        $expectedResult = null;

        // Act
        $result = $qm->getLocation();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testPosition()
    {
        // Arrange
        $qm = new JobCreation();
        $expectedResult = null;

        // Act
        $result = $qm->getPosition();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testCreated()
    {
        // Arrange
        $qm = new JobCreation();

        $expectedResult = null;
        // Act
        $result = $qm->getCreated();
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testExpires()
    {
        // Arrange
        $qm = new JobCreation();

        $dateTimeObject = new \DateTime();
        $dateTimeObject->setTimestamp($this->timestamp);

        $expectedResult = null;
        // Act
        $result = $qm->getexpires();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetPosition()
    {
        // Arrange
        $qm = new JobCreation();
        $expectedResult = null;
        $position = $qm->getPosition();

        // Act
        $result = $qm->setPosition($position);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetLocation()
    {
        // Arrange
        $qm = new JobCreation();
        $expectedResult = null;
        $location = $qm->getLocation();

        // Act
        $result = $qm->setLocation($location);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testUser()
    {
        // Arrange
        $qm = new JobCreation();

        $expectedResult = null;
        // Act
        $result = $qm->getuser();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetUser()
    {
        // Arrange
        $qm = new JobCreation();
        $expectedResult = 'Paul';
        $user = 'Paul';

        // Act
        $qm->setUser($user);
        $result = $qm->getUser();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetExpires()
    {
        // Arrange
        $qm = new JobCreation();
        $expectedResult = '28/09/2016';
        $expires = '28/09/2016';

        // Act
        $qm->setExpires($expires);
        $result = $qm->getExpires();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetCreated()
    {
        // Arrange
        $qm = new JobCreation();
        $expectedResult = '28/09/2016';
		$created = '28/09/2016';

		// Act
		$qm->setCreated($created);
        $result = $qm->getCreated();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

}
