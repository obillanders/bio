<?php

namespace AppBundle\Import;

/**
 * Class ImportMode
 * @package AppBundle\Import
 */
class ImportMode
{
    const DIFF_WITH_DELETE = 'DIFF_WITH_DELETE';
    const DIFF_WITHOUT_DELETE = 'DIFF_WITHOUT_DELETE';
    const REPLACE_ALL = 'REPLACE_ALL';
}