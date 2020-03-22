<?php

namespace Intervention\Validation\Rules;

use Intervention\Validation\AbstractRegexRule;

class LowerCase extends AbstractRegexRule
{
    /**
     * Regular expression pattern for lower case string
     *
     * @var string
     */
    protected $pattern = "/^\p{Ll}+$/u";
}
