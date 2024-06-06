<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
#[\Attribute]
class NotEmail extends Constraint
{
    public $message = 'El email "{{ email }}" no puede ser "example@mail.com".';

    public function getTargets(): string
    {
        return self::PROPERTY_CONSTRAINT;
    }
}
