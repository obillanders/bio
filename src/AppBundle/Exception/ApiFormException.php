<?php

namespace AppBundle\Exception;


use Symfony\Component\Form\Form;

class ApiFormException extends ApiException
{
    public function __construct(Form $form)
    {
        $errors = $form->getErrors();
        $firstErrorStatusCode = $errors[0]->getCause()->getConstraint()->payload['statusCode'];

        parent::__construct((string) $errors, $firstErrorStatusCode);
    }
}