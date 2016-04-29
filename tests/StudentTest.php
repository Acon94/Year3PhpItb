<?php
/**
 * Created by PhpStorm.
 * User: Andrew C
 * Date: 20/04/2016
 * Time: 23:47
 */
namespace ItbTest;

use Itb\Model\Student;

use JsonSchema\Constraints\Object;
use Zend\I18n\Validator\DateTime;


class StudentTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testFirst()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = null;

        // Act
        $result = $qm->getFirst();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSurname()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = null;

        // Act
        $result = $qm->getSurname();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testAge()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = null;

        // Act
        $result = $qm->getAge();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGpa()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = null;

        // Act
        $result = $qm->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testStatus()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = null;

        // Act
        $result = $qm->getStatus();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function testSetId()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = 1;
		$Id = 1;


		// Act
		$qm->setId($Id);
		$result =$qm->getId();


        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetFirst()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = 'Paul';
		$first = 'Paul';

		$qm->setFirst($first);
        $result =$qm->getFirst();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetSurname()
    {
        // Arrange
        $qm = new Student();
    	$expectedResult = 'Bloggs';
		$surname = 'Bloggs';

        // Act
	    $qm->setSurname($surname);
        $result = $qm->getSurname($surname);

    	// Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAge()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = 23;
		$age = 23;

		        // Act
		$qm->setAge($age);
        $result = $qm->getAge();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetStatus()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = 'unemployed';
        $status = 'unemployed';
        // Act
        $qm->setStatus($status);
        $result =  $qm->getStatus();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetGpa()
    {
        // Arrange
        $qm = new Student();
        $expectedResult = 4.0;
        $gpa = 4.0;

        // Act
        $qm->setGpa($gpa);
        $result = $qm->getGpa();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }
}
