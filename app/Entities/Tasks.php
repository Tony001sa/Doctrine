<?php

namespace App\Entities;

/**
 * Tasks
 */
class Tasks
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var int
     */
    private $id;


    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Tasks
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
