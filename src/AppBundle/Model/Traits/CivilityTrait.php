<?php

namespace AppBundle\Model\Traits;

use Symfony\Component\Validator\Constraints as Assert;

trait CivilityTrait
{
    public static $civilityChoices = array(
        'mr' => 'Mr',
        'mme' => 'Mme',
        'other' => 'Autre',
    );

    /**
     * @Assert\NotBlank(message="Veuillez sélectionner une valeur")
     * @Assert\Choice({"mr", "mme", "other"})
     */
    protected $civility;

    public function getCivilityLabel()
    {
        return !empty($this->civility) ? self::$civilityChoices[$this->civility] : $this->civility;
    }

    /**
     * @return mixed
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * @param mixed $civilite
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;
    }
}
