<?php

namespace AppBundle\Rdi;

use AppBundle\Entity\Rdi;

interface RdiHandlerInterface
{
    public function handle(Rdi $rdi);
}