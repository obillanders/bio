<?php

namespace AppBundle\Rdi;

use AppBundle\Entity\Rdi;
use GuzzleHttp\Client;
use JMS\Serializer\SerializationContext;
use AppBundle\Exception\RdiException;
use JMS\Serializer\Serializer;

class RdiApiHandler implements RdiHandlerInterface
{
    private $serializer;

    /**
     * RdiApiHandler constructor.
     * @param $serializer
     */
    public function __construct(Serializer $serializer, Client $client)
    {
        $this->serializer = $serializer;
        $this->client = $client;
    }


    public function handle(Rdi $rdi)
    {
        $rdiJson = $this->serializer->serialize(array("CONTENT" => $rdi), 'json', SerializationContext::create()->setSerializeNull(true));

        //@TODO configure Guzzle
        //$response = $this->client->get('/api/users');
        //$response = $this->client->post('/api/biogaran/rdi', ["body" => $rdiJson]);
        $biogaranResponse = json_encode(['CONTROL' => ['CODE' => 201, 'MESSAGE' => 'La RDI '.$rdi->getId().' est validée']]);

        $response = json_decode($biogaranResponse, true);
        $rdi->setCodeReturn($response['CONTROL']['CODE']);
        $rdi->setMessageReturn($response['CONTROL']['MESSAGE']);

        if ($rdi->getCodeReturn() == 201) {
            return $rdi;
        } else {
            throw new RdiException('Api', $rdi, $rdi->getMessageReturn(), $rdi->getCodeReturn());
        }
    }
}