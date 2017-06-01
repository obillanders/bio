<?php
/**
 * Created by PhpStorm.
 * User: bpicharles
 * Date: 12/04/2017
 * Time: 18:48
 */

namespace AppBundle\EventListener;


use AppBundle\Exception\ApiException;
use AppBundle\Model\Api\ApiResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;

class ApiExceptionListener
{
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();

        if ( ! $exception instanceof ApiException) {
            return;
        }


        $responseData = ApiResponse::fail( $exception->getCode(), $exception->getMessage());

        $event->setResponse(new JsonResponse($responseData, $exception->getCode()));
    }
}