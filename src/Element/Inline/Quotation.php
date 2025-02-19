<?php
/**
 * Quotation - The q element represents some phrasing content quoted from another source.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Quotation extends InlineElement
{
    public static string $qualifiedName = 'q';

    /* Specifies the URL of the cited work or the name of the cited creative work. */
    public ?string $cite;


    public function __construct()
    {

    }


}