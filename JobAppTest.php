<?php
/**
 * Created by PhpStorm.
 * User: Andrew C
 * Date: 20/04/2016
 * Time: 23:47
 */
namespace ItbTest;


use Itb\Model\JobApp;
use JsonSchema\Constraints\Object;
use Zend\I18n\Validator\DateTime;


class JobAppTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testFirst()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getFirst();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSurname()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getSurname();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testAge()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getAge();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testAddress()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getAddress();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testExperience()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getExperience();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testGender()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getGender();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testPosition()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getPosition();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testImage()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = null;

        // Act
        $result = $qm->getImage();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetId()
    {
        // Arrange
        $qm = new JobApp();
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
        $qm = new JobApp();
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
        $qm = new JobApp();
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
        $qm = new JobApp();
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
        $qm = new JobApp();
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
        $qm = new JobApp();
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
        $qm = new JobApp();
        $expectedResult = 'Barman';
        $experience = 'Barman';

        // Act
        $qm->setExperience($experience);
        $result = $qm->getExperience();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetPosition()
    {
        // Arrange
        $qm = new JobApp();
        $expectedResult = 'Dalkey';
        $position = 'Dalkey';

        // Act
        $qm->setPosition($position);
        $result =$qm->getPosition();


        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetImage()
    {
        // Arrange
        $qm = new  JobApp();
        $expectedResult = 'paige.jpg';
        $image = 'paige.jpg';

        // Act
        $qm->setImage($image);
        $result = $qm->getImage();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


}
