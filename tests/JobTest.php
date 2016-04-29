<?php
/**
 * Created by PhpStorm.
 * User: Andrew C
 * Date: 20/04/2016
 * Time: 23:47
 */
namespace ItbTest;

use Itb\Model\Job;
use JsonSchema\Constraints\Object;
use Zend\I18n\Validator\DateTime;


class JobTest extends \PHPUnit_Framework_TestCase
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
        $qm = new Job();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testLocation()
    {
        // Arrange
        $qm = new Job();
        $expectedResult = null;

        // Act
        $result = $qm->getLocation();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testPosition()
    {
        // Arrange
        $qm = new Job();
        $expectedResult = null;

        // Act
        $result = $qm->getPosition();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testExpires()
    {
        // Arrange
        $qm = new Job();

        $dateTimeObject = new \DateTime();
        $dateTimeObject->setTimestamp($this->timestamp);

        $expectedResult = $dateTimeObject;
        // Act
        $result = $qm->getexpires();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }





}
