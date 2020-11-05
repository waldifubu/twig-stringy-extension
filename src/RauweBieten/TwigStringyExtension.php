<?php

namespace RauweBieten;

use Stringy\StaticStringy;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigStringyExtension extends AbstractExtension
{
    private static $methods = [
        'append',
        'at',
        'between',
        'camelize',
        'chars',
        'collapseWhitespace',
        'contains',
        'containsAll',
        'containsAny',
        'countSubstr',
        'dasherize',
        'delimit',
        'endsWith',
        'endsWithAny',
        'ensureLeft',
        'ensureRight',
        'first',
        'getEncoding',
        'hasLowerCase',
        'hasUpperCase',
        'htmlDecode',
        'htmlEncode',
        'humanize',
        'indexOf',
        'indexOfLast',
        'insert',
        'isAlpha',
        'isAlphanumeric',
        'isBase64',
        'isBlank',
        'isHexadecimal',
        'isJson',
        'isLowerCase',
        'isSerialized',
        'isUpperCase',
        'last',
        'length',
        'lines',
        'longestCommonPrefix',
        'longestCommonSuffix',
        'longestCommonSubstring',
        'lowerCaseFirst',
        'pad',
        'padBoth',
        'padLeft',
        'padRight',
        'prepend',
        'regexReplace',
        'removeLeft',
        'removeRight',
        'repeat',
        'replace',
        'reverse',
        'safeTruncate',
        'shuffle',
        'slugify',
        'slice',
        'split',
        'startsWith',
        'startsWithAny',
        'stripWhitespace',
        'substr',
        'surround',
        'swapCase',
        'tidy',
        'titleize',
        'toAscii',
        'toBoolean',
        'toLowerCase',
        'toSpaces',
        'toTabs',
        'toTitleCase',
        'toUpperCase',
        'trim',
        'trimLeft',
        'trimRight',
        'truncate',
        'underscored',
        'upperCamelize',
        'upperCaseFirst',
    ];

    private static $prefix = 'stringy_';

    public function getFilters()
    {
        return array_map(function ($method) {
            $filterName = StaticStringy::underscored(self::$prefix . $method);
            return new TwigFilter($filterName, [StaticStringy::class, $method]);
        }, self::$methods);
    }
}
