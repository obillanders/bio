<?php

namespace AppBundle\Model\Api;


class ApiResponse implements \JsonSerializable
{
    /**
     * Generate success response model.
     *
     * @param $messageSuccess
     *
     * @return array
     */
    public static function sucess($messageSuccess)
    {
        return self::basicResponse(0, $messageSuccess);
    }

    /**
     * Generate error response model
     *
     * @param $codeError
     * @param $messageError
     *
     * @return array
     */
    public static function fail($codeError, $messageError)
    {
        return self::basicResponse($codeError, $messageError);
    }

    /**
     * Generate response model.
     *
     * @param integer $code
     * @param string $message
     *
     * @return array
     */
    private static function basicResponse($code, $message)
    {
        return [
            'CONTROL' => [
                'CODE' => $code,
                'MESSAGE' => $message
            ]
        ];
    }

    public function jsonSerialize()
    {
        return [
            'CONTROL' => [
                'CODE' => 200,
                'MESSAGE' => "message type pour réponse api",
            ]
        ];
    }
}