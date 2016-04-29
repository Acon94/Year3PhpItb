<?php
namespace ItbTest;

use Itb\Model\User;


class UserTest extends \PHPUnit_Framework_TestCase
{


    public function testGetId()
    {
        // Arrange
        $qm = new User();
        $expectedResult = 0;

        // Act
        $result = $qm->getId();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testUsername()
    {
        // Arrange
        $qm = new User();
        $expectedResult = null;

        // Act
        $result = $qm->getUsername();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testPassword()
    {
        // Arrange
        $qm = new User();
        $expectedResult = null;

        // Act
        $result = $qm->getPassword();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testRole()
    {
        // Arrange
        $qm = new User();
        $expectedResult = null;


        // Act
        $result = $qm->getRole();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetId()
    {
        // Arrange
        $qm = new User();
        $expectedResult = 1;
        $Id = 1;


        // Act
        $qm->setId($Id);
        $result =$qm->getId();


        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetUsername()
    {
        // Arrange
        $qm = new User();
        $expectedResult = 'Paul';
        $username = 'Paul';

        $qm->setUsername($username);
        $result =$qm->getUsername();




        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testSetpassword()
    {
        // Arrange
        $st = new User();
        $password = "password";
        $expectedResult = $password;

        $st->setPassword($expectedResult);

        // Act
        $result = $st->getPassword();
        $bool = password_verify("password", $result);
        // Assert
        $this->assertTrue($bool);
    }

    public function testSetRole()
    {
        // Arrange
        $st = new User();
        $role = 2;
        $expectedResult = $role;

        $st->setRole($expectedResult);

        // Act
        $result = $st->getRole();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testCheckRole()
    {
        // Arrange
        $qm = new User();
        $expectedResult = 0;
        $username = $qm->getUsername();


        // Act
        $result = $qm->checkRole($username);

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testRetrieveId()
    {
        // Arrange
        $qm = new User();
        $expectedResult = 0;
        $username = $qm->getUsername();

        // Act
        $result = $qm->retrieveID($username);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function testcanFindMatchingUsernameAndPassword()
    {
        // Arrange
        $qm = new User();

        $password = "password";
        $username = "username";
        $expectedResult = $password;

        $qm->setPassword($expectedResult);
        $qm->setUsername($username);

        // Act
        $result = $qm->getPassword();
        $bool = password_verify("password", $result);
        // Assert
        $this->assertTrue($bool);
    }

    public function testGetOneByUsername()
    {
        // Arrange
        $qm = new User();
        $expectedResult = 0;
        $username = $qm->getUsername();


        // Act
        if ($expectedResult != null) {
            $result = $qm->getOneByUsername($username);
        }
        $result = $qm->getOneByUsername($username);
        // Assert
        $this->assertEquals($expectedResult, $result);
    }

}
