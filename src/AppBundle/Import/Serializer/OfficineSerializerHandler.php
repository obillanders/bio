<?php

namespace AppBundle\Import\Serializer;

use AppBundle\Entity\Officine;
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
class OfficineSerializerHandler implements SubscribingHandlerInterface
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
                'type' => 'NRIDOfficine',
                'method' => 'deserializeOfficineFromJson',
            ),
        );
    }

    /**
     * @param JsonDeserializationVisitor $visitor
     * @param $data
     * @param array $type
     * @param DeserializationContext $context
     * @return Officine
     * @throws \Exception
     */
    public function deserializeOfficineFromJson(JsonDeserializationVisitor $visitor, $data, array $type, DeserializationContext $context)
    {
        if (!preg_match('#[0-9]+#', $data)) {
            throw new \Exception(sprintf('Value %s of column NRIDOFF is not NRID', $data));
        }
        $nrid = (int) $data;
        $officine = new Officine();
        $officine->setNridPharmacie($nrid);
        return $officine;
    }
}