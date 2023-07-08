<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

return [
    new FlarumLang\Utils\Extend\LanguagePackWithVariants([
        'label' => 'Preferencia',
        'variants' => [
            'informal' => 'Informal',
            'formal' => 'Formal',
        ],
        'defaultVariant' => 'informal',
    ]),
];
