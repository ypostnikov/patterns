<?php

namespace App\Foundation\DatabaseHelper;

/**
 * Class DataBaseHelper
 * @package App\Foundation\DatabaseHelper
 */
class DataBaseHelper
{

    /**
     * @param array $fields
     * @return string|null
     */
    public function getSqlPlace(array $fields): ?string
    {
        if (!empty($fields)) {
            $placeFields = join(',', array_fill(0, count($fields), '?'));
        }
        return $placeFields ?? null;
    }

    /**
     * @param array $fields
     * @return string
     */
    public function getSqlFields(array $fields): ?string
    {
        if (!empty($fields)) {
            $placeFields = join(',', $fields);
        }
        return $placeFields ?? null;
    }

}
