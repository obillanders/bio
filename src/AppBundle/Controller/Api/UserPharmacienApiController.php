<?php

namespace AppBundle\Controller\Api;

use AppBundle\Entity\Rdi;
use AppBundle\Exception\ApiException;
use AppBundle\Exception\ApiFormException;
use AppBundle\Model\Api\ApiResponse;
use AppBundle\Model\Api\PharmacienValidate;
use AppBundle\Model\Api\PharmacienChangeAccess;
use AppBundle\Model\Api\PharmacienRegister;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\Debug\Exception\ContextErrorException;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\PharmacienValidateType;
use AppBundle\Form\PharmacienChangeAccessType;
use AppBundle\Form\PharmacienRegisterType;
use Doctrine\ORM\ORMException;


/**
 * Class UserApiController
 * @package AppBundle\Controller\Api
 *
 * @Rest\RouteResource("pharmacien")
 *
 */
class UserPharmacienApiController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     section="Pharmacien",
     *     description="Active un pharmacien",
     *     resource=true,
     *     input= "AppBundle\Form\PharmacienValidateType",
     *     output="AppBundle\Model\Api\ApiResponse",
     *     statusCodes={
     *          0="Pharmacien 'ID_RDI' validé",
     *          402="Donnée non valide",
     *          404="Pharmacien non trouvée."
     *     }
     * )
     */
    public function postActivateAction(Request $request)
    {
        $pharmacienValidate = new PharmacienValidate();
        $form = $this->createForm(PharmacienValidateType::class, $pharmacienValidate);

        $form->handleRequest($request);

        if (!$form->isValid()) {
            throw new ApiFormException($form);
        }

        try {
            $user = $this->get('app.api')->activateUser($pharmacienValidate);
        } catch (\Exception $exception) {
            throw new ApiException($exception->getMessage(), $exception->getCode());
        }

        return ApiResponse::sucess('Pharmacien ‘' . $user->getPharmacien()->getNridInterlocuteur() . '’ validé');
    }

    /**
     * @ApiDoc(
     *     section="Pharmacien",
     *     description="Enregistre un pharmacien",
     *     resource=true,
     *     input= "AppBundle\Form\PharmacienRegisterType",
     *     output="AppBundle\Model\Api\ApiResponse",
     *     statusCodes={
     *          200="Pharmacien enregistré",
     *          402="Donnée non valid",
     *          404="Pharmacien non trouvée."
     *     }
     * )
     */
    public function postRegisterAction(Request $request)
    {
        $pharmacienRegister = new PharmacienRegister();
        $form = $this->createForm(PharmacienRegisterType::class, $pharmacienRegister);

        $form->handleRequest($request);

        if (!$form->isValid()) {
            throw new ApiFormException($form);
        }

        try {
            $user = $this->get('app.api')->registerUser($pharmacienRegister);
        } catch (\Exception $exception) {
            throw new ApiException($exception->getMessage(), $exception->getStatusCode());
        }

        return ApiResponse::sucess('Pharmacien ‘' . $user->getPharmacien()->getNridInterlocuteur() . '’ enregistré');
    }

    /**
     * @ApiDoc(
     *     section="Pharmacien",
     *     description="Changement des droits d’accès d’un pharmacien",
     *     resource=true,
     *     input= "AppBundle\Form\PharmacienChangeAccessType",
     *     output="AppBundle\Model\Api\ApiResponse",
     *     statusCodes={
     *          200="Pharmacien certifié",
     *          402="Donnée non valid",
     *          404="Pharmacien non trouvée."
     *     }
     * )
     */
    public function postChange_accessAction(Request $request)
    {
        $pharmacienChangeAccess = new PharmacienChangeAccess();
        $form = $this->createForm(PharmacienChangeAccessType::class, $pharmacienChangeAccess);
        $form->handleRequest($request);
        if (!$form->isValid()) {
            throw new ApiFormException($form);
        }
        
        try {
            $user = $this->get('app.api')->changeAccessUser($pharmacienChangeAccess);
        } catch(ORMException $exception){
            throw $exception;
        } catch (\Exception $exception) {
            throw new ApiException($exception->getMessage(), $exception->getCode());
        }

        return ApiResponse::sucess('Droits d’accès du pharmacien ‘' . $user->getPharmacien()->getNridInterlocuteur() . '’ modifiés"');

    }
}