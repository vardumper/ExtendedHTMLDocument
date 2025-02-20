<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Canvas - The canvas element is used to draw graphics, on the fly, via scripting (usually JavaScript).
 *
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
 */

namespace Html\Element\Block;

use Html\Model\BlockElement;

final class Canvas extends BlockElement
{
    public static string $qualifiedName = 'canvas';

    /* Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;
}
