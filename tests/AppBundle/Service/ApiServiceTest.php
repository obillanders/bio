<?php

namespace Tests\Service;

use AppBundle\Entity\Pharmacien;
use AppBundle\Entity\Rdi;
use AppBundle\Entity\User;
use AppBundle\Manager\PharmacienManager;
use AppBundle\Manager\RdiManager;
use AppBundle\Manager\UserManager;
use AppBundle\Model\Api\PharmacienChangeAccess;
use AppBundle\Model\Api\PharmacienValidate;
use AppBundle\Service\ApiService;

class ApiServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ApiService
     */
    private $apiService;
    private $pharmacienManager;
    private $userManager;
    private $rdiManager;

    public function setUp()
    {
        $this->pharmacienManager = \Phake::mock(PharmacienManager::class);
        $this->userManager = \Phake::mock(UserManager::class);
        $this->rdiManager = \Phake::mock(RdiManager::class);

        $this->apiService = new ApiService($this->pharmacienManager, $this->userManager, $this->rdiManager);
    }

    public function testActiveUserWhenUserIsNotEnabledAndIsNotPharmacien()
    {
        $pharmacienValidate = \Phake::mock(PharmacienValidate::class);
        \Phake::when($pharmacienValidate)->getNrid()->thenReturn('12345678910112');
        \Phake::when($pharmacienValidate)->getIdRdi()->thenReturn('99990000009874');

        $pharmacien = \Phake::mock(Pharmacien::class);
        \Phake::when($this->pharmacienManager)->find('12345678910112')->thenReturn($pharmacien);

        $rdi = \Phake::mock(Rdi::class);
        \Phake::when($this->rdiManager)->find->thenReturn($rdi);
        \Phake::when($rdi)->getExtraData->thenReturn(['user' => '1']);

        $user = \Phake::mock(User::class);
        \Phake::when($user)->isEnabled()->thenReturn(false);

        \Phake::when($this->userManager)->findUserBy(['id' => 1])->thenReturn($user);
        \Phake::when($this->userManager)->findUserBy(['pharmacien' => '12345678910112'])->thenReturn(null);

        $result = $this->apiService->activateUser($pharmacienValidate);

        \Phake::verify($this->userManager)->activatePharmacien($user, $pharmacien);
        $this->assertEquals($user, $result);
    }

    public function testActiveUserWhenPharmacienNridNotFound()
    {

        $this->expectException(\Exception::class);

        $pharmacienValidate = \Phake::mock(PharmacienValidate::class);
        \Phake::when($pharmacienValidate)->getNrid()->thenReturn(null);

        $this->apiService->activateUser($pharmacienValidate);

    }

    public function testActiveUserWhenIdRdiNotFound()
    {

        $this->expectException(\Exception::class);

        $pharmacienValidate = \Phake::mock(PharmacienValidate::class);
        \Phake::when($pharmacienValidate)->getNrid()->thenReturn('12345678910112');
        \Phake::when($pharmacienValidate)->getIdRdi()->thenReturn(null);

        $this->apiService->activateUser($pharmacienValidate);

    }

    public function testActiveUserWhenConflictEmail()
    {

        $this->expectException(\Exception::class);

        $pharmacienValidate = \Phake::mock(PharmacienValidate::class);
        \Phake::when($pharmacienValidate)->getNrid()->thenReturn('12345678910112');
        \Phake::when($pharmacienValidate)->getIdRdi()->thenReturn('99990000009874');

        $pharmacien = \Phake::mock(Pharmacien::class);
        \Phake::when($this->pharmacienManager)->find('12345678910112')->thenReturn($pharmacien);

        $rdi = \Phake::mock(Rdi::class);
        \Phake::when($this->rdiManager)->find->thenReturn($rdi);
        \Phake::when($rdi)->getExtraData->thenReturn(['user' => '1']);

        $user = \Phake::mock(User::class);
        \Phake::when($user)->isEnabled()->thenReturn(true);
        \Phake::when($this->userManager)->findUserBy(['id' => 1])->thenReturn($user);

        $this->apiService->activateUser($pharmacienValidate);

    }


    public function testChangeAccessUserFullAccess()
    {
        $data = $this->changeAccessUser('FULL');
        $result = $this->apiService->changeAccessUser($data['pharmacienChangeAccess']);

        \Phake::verify($this->userManager)->setAccessFullPharmacien($data['user']);
        $this->assertEquals($data['user'], $result);
    }

    public function testChangeAccessUserDenied()
    {
        $data = $this->changeAccessUser('DENIED');
        $result = $this->apiService->changeAccessUser($data['pharmacienChangeAccess']);

        \Phake::verify($this->userManager)->denyUser($data['user']);
        $this->assertEquals($data['user'], $result);
    }

    public function testChangeAccessUserStandard()
    {
        $data = $this->changeAccessUser('STANDARD');
        $result = $this->apiService->changeAccessUser($data['pharmacienChangeAccess']);

        \Phake::verify($this->userManager)->setAccessStandardPharmacien($data['user']);
        $this->assertEquals($data['user'], $result);
    }

    public function testChangeAccessUserWherePharmacienIsNotFound()
    {
        $this->expectException(\Exception::class);

        $pharmacienChangeAccess = \Phake::mock(PharmacienChangeAccess::class);
        $this->apiService->changeAccessUser($pharmacienChangeAccess);
    }

    private function changeAccessUser($access)
    {
        $pharmacienChangeAccess = \Phake::mock(PharmacienChangeAccess::class);
        \Phake::when($pharmacienChangeAccess)->getNrid()->thenReturn('12345678910112');

        $pharmacien = \Phake::mock(Pharmacien::class);
        \Phake::when($this->pharmacienManager)->find('12345678910112')->thenReturn($pharmacien);

        \Phake::when($pharmacienChangeAccess)->getAccess()->thenReturn($access);

        $user = \Phake::mock(User::class);
        \Phake::when($this->userManager)->findUserBy(array('pharmacien'=> $pharmacien))->thenReturn($user);

        return [
            'user' => $user,
            'pharmacienChangeAccess' => $pharmacienChangeAccess
        ];
    }
}
