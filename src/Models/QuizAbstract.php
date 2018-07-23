<?php

namespace App\Models;

use URLify;

abstract class QuizAbstract {
    public $name;

    public function getName()
    {
        return $this->name;
    }

    /**
     * Generates a slug based on the Quiz's name.
     */
    public function getSlug()
    {
        return URLify::filter($this->name);
    }
}