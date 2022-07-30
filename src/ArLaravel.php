<?php

namespace AlazziAz\ArLaravel;

use ArPHP\I18N\Arabic;

class ArLaravel
{
    public function __construct(protected Arabic $arabic)
    {
        //
    }



    public function getArabic(): Arabic
    {
        return $this->arabic;
    }

    public function adjustContent($html)
    {
        if (!$this->isArabic($html))
            return $html;


        $offset = $this->arabic->arIdentify($html);

        for ($i = count($offset) - 1; $i >= 0; $i -= 2) {
            $utf8ar = $this->arabic->utf8Glyphs(substr($html, $offset[$i - 1], $offset[$i] - $offset[$i - 1]));
            $html = substr_replace($html, $utf8ar, $offset[$i - 1], $offset[$i] - $offset[$i - 1]);
        }

        return $html;
    }

    public function isArabic($text): bool
    {
        return $this->arabic->isArabic($text);
    }


}
