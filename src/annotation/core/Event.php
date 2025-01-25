<?php

namespace Luoyue\WebmanMvcCore\annotation\core;

use LinFly\Annotation\AbstractAnnotationAttribute;
use Luoyue\WebmanMvcCore\annotation\core\parser\EventParser;

#[\Attribute(\Attribute::TARGET_METHOD)]
class Event extends AbstractAnnotationAttribute
{
    public function __construct(string $name)
    {
        $this->setArguments(\func_get_args());
    }

    public static function getParser(): string|array
    {
        return EventParser::class;
    }
}
