<?php

namespace AppBundle\Import\Serializer;

use AppBundle\Entity\Pharmacien;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\DeserializationContext;

/**
 * Class OfficineSerializerHandler
 * @package AppBundle\Import\Serializer
 *
 * @TODO : test
 */
class PharmacienSerializerHandler implements SubscribingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'NRIDPharmacien',
                'method' => 'deserializePharmacienFromJson',
            ),
        );
    }

    /**
     * @param JsonDeserializationVisitor $visitor
     * @param $data
     * @param array $type
     * @param DeserializationContext $context
     * @return Pharmacien
     * @throws \Exception
     */
    public function deserializePharmacienFromJson(JsonDeserializationVisitor $visitor, $data, array $type, DeserializationContext $context)
    {
        if (!preg_match('#[0-9]+#', $data)) {
            throw new \Exception(sprintf('Value %s of column NRIDINT is not NRID', $data));
        }
        $nrid = (int) $data;
        $pharmacien = new Pharmacien();
        $pharmacien->setNridInterlocuteur($nrid);
        return $pharmacien;
    }
}