<?php

namespace Luoyue\WebmanMvcCore\annotation\core;

use LinFly\Annotation\AbstractAnnotationAttribute;
use Luoyue\WebmanMvcCore\annotation\core\parser\ServiceParser;

/**
 * Service注解
 * 告诉容器，这个类是服务层，
 * 然后他会根据这个类的interface实例化，并注入到容器中.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Service extends AbstractAnnotationAttribute
{
    public function __construct(string $name = '')
    {
        $this->setArguments(\func_get_args());
    }

    public static function getParser(): string|array
    {
        return ServiceParser::class;
    }
}
