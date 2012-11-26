<?php

/*
 * This file is a part of the PHP Markdown library.
 *
 * (c) Dragonfly Development Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace brainsware\tests\markdown;

use brainsware\markdown\MarkdownExtraParser;

class MarkdownExtraParserTest extends MarkdownParserTest
{

    protected $configKeyTabWidth = \brainsware\markdown\MarkdownExtraParser::CONFIG_TAB_WIDTH;

    /**
     * Create a markdown parser.
     * @param array $configuration Optional configuration
     * @return \brainsware\markdown\IMarkdownParser
     */
    public function createParser($configuration = null)
    {
        if ($configuration !== null) {
            return new \brainsware\markdown\MarkdownExtraParser($configuration);
        }
        return new \brainsware\markdown\MarkdownExtraParser();
    }
    
}
