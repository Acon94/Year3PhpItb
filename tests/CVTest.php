<?php
/**
 * Created by PhpStorm.
 * User: Andrew C
 * Date: 20/04/2016
 * Time: 23:47
 */
namespace ItbTest;

use Itb\Model\CV;
use Itb\Model\Job;
use JsonSchema\Constraints\Object;
use Zend\I18n\Validator\DateTime;


class CVTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testFirst()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = null;

        // Act
        $result = $qm->getFirst();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSurname()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = null;

        // Act
        $result = $qm->getSurname();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testAge()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = null;

        // Act
        $result = $qm->getAge();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testAddress()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = null;

        // Act
        $result = $qm->getAddress();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testExperience()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = null;

        // Act
        $result = $qm->getExperience();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGender()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = null;

        // Act
        $result = $qm->getGender();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testImage()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = null;

        // Act
        $result = $qm->getImage();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetId()
	    {
	        // Arrange
	        $qm = new CV();
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
        $qm = new CV();
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
        $qm = new CV();
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
        $qm = new CV();
        $expectedResult = 23;
        $age = 23;

        // Act
        $qm->setAge($age);
        $result = $qm->getAge();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetGender()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = 'Male';
        $gender = 'Male';

        // Act
        $qm->setGender($gender);
        $result =  $qm->getGender();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetAddress()
    {
        // Arrange
        $qm = new CV();
        $expectedResult = 'ITB';
        $address = 'ITB';
        // Act
        $qm->setAddress($address);
		$result = $qm->getAddress();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

     public function testSetExperience()
      {
          // Arrange
          $qm = new CV();
          $expectedResult = 'Barman';
          $experience = 'Barman';

          // Act
          $qm->setExperience($experience);
          $result = $qm->getExperience();

          // Assert
          $this->assertEquals($expectedResult, $result);
    }

  public function testSetImage()
    {
        // Arrange
        $qm = new  CV();
        $expectedResult = 'paige.jpg';
        $image = 'paige.jpg';

        // Act
        $qm->setImage($image);
        $result = $qm->getImage();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


}
