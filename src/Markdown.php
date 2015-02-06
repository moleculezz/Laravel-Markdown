<?php

/*
 * This file is part of Laravel Markdown.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Markdown;

use League\CommonMark\CommonMarkConverter as MD;

/**
 * This is the markdown class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class Markdown
{
    /**
     * The MD instance.
     *
     * @var \MD
     */
    protected $md;

    /**
     * Create a new instance.
     *
     * @param \MD $md
     *
     * @return void
     */
    public function __construct(MD $md)
    {
        $this->md = $md;
    }

    /**
     * Get the parsed markdown.
     *
     * @param string $value
     *
     * @return string
     */
    public function render($value)
    {
        return $this->md->convertToHtml($value);
    }

    /**
     * Return the MD instance.
     *
     * @return \MD
     */
    public function getParsedown()
    {
        return $this->md;
    }
}
