<?php
namespace ProcessingKz\Objects\Entity;

/**
 * Base class for all entities.
 */
abstract class Base
{
    /**
     * Get object converted to array.
     *
     * @return array
     */
    public function toArray()
    {
        $result = array();
        $fields = array_keys(get_class_vars(get_called_class()));

        foreach ($fields as $field) {
            $result[$field] = $this->{sprintf('get%s', ucfirst($field))}();
        }

        return $result;
    }

    /**
     * Get object converted to string.
     *
     * @return string
     */
    public function toString()
    {
        return json_encode($this->toArray());
    }
}