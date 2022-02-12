<?php

namespace App\Tests;

use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\isNull;

class UserTest extends TestCase
{
    public function testSetIsTrue()
    {
        $user = new User();
        $datetime = new DateTime();

        $user->setEmail('email@test.com')
             ->setFirstName('firstname')
             ->setLastName('lastname')
             ->setPassword('password')
             ->setPhoneNumber('0610101010')
             ->setBirthDate($datetime);

        $this->assertTrue($user->getEmail() === 'email@test.com');
        $this->assertTrue($user->getFirstName() === 'firstname');
        $this->assertTrue($user->getLastName() === 'lastname');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getPhoneNumber() === '0610101010');
        $this->assertTrue($user->getBirthDate() == $datetime);
        
    }

    public function testSetIsFalse()
    {
        $user = new User();
        $datetime = new DateTime();

        $user->setEmail('email@test.com')
             ->setFirstName('firstname')
             ->setLastName('lastname')
             ->setPassword('password')
             ->setPhoneNumber('0610101010')
             ->setBirthDate($datetime);

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getFirstName() === 'firstnamefalse');
        $this->assertFalse($user->getLastName() === 'lastnamefalse');
        $this->assertFalse($user->getPassword() === 'passwordfalse');
        $this->assertFalse($user->getPhoneNumber() === '0620202020');
        $this->assertFalse($user->getBirthDate() === new DateTime());
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFirstName());
        $this->assertEmpty($user->getLastName());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getPhoneNumber());
        $this->assertEmpty($user->getBirthDate());
    }


}
