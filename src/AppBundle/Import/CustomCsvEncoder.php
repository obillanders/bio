<?php

namespace AppBundle\Import;

/**
 * Class CustomCsvEncoder
 * @package AppBundle\Import
 */
class CustomCsvEncoder implements CustomEncoderInterface
{
    const DELIMITER = ';';

    private $errors = array();

    /**
     * {@inheritdoc}
     */
    public function decode($data, $format, array $context = array())
    {
        $this->errors = array();

        $handle = fopen('php://temp', 'r+');
        fwrite($handle, $data);
        rewind($handle);

        $headers = null;
        $nbHeaders = 0;
        $result = array();

        while (false !== ($line = fgets($handle))) {

            $line = preg_replace('#[\r\n]$#', '', $line);

            $cols = explode(self::DELIMITER, $line);

            $nbCols = count($cols);

            if (null === $headers) {
                $nbHeaders = $nbCols;

                foreach ($cols as $col) {
                    $headers[] = $col;
                }

                continue;
            }

            if ($nbCols !== $nbHeaders) {
                $this->errors[$cols[0]] = 'Too much semicolons in row';
                continue;
            } else {
                $item = array();
                for ($i = 0; ($i < $nbCols) && ($i < $nbHeaders); ++$i) {
                    $item[$headers[$i]] = $cols[$i];
                }
            }

            $result[] = $item;
        }
        fclose($handle);

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDecoding($format)
    {
        return 'csv';
    }

    /**
     * {@inheritdoc}
     */
    public function getErrors()
    {
        return $this->errors;
    }
}