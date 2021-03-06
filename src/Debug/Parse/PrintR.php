<?php

declare(strict_types=1);

namespace LDG\Debug\Parse;

class PrintR implements ParseInterface
{
    public static function isSatisfiedBy($content): bool
    {
        return true;
    }

    public static function parse($content): string
    {
        ob_start();

        print_r($content);

        $content = ob_get_contents();

        ob_end_clean();

        return $content;
    }
}
