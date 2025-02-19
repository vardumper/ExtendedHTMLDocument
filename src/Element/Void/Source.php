<?php
/**
 * Source - The source element allows authors to specify multiple media resources for media elements. It is an empty element. It is commonly used within the picture element.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
 */
namespace Html\Element\Void;

use Html\Enum\TypeEnum;
use Html\Model\VoidElement;

final class Source extends VoidElement
{
    public static string $qualifiedName = 'source';

    /* Specifies the media type for which the linked resource or style sheet is intended. */
    public ?string $media;

    /* Specifies the sizes of the images or icons for different display/window sizes. */
    public ?string $sizes;

    /* 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;

    /* Specifies the media type of the linked resource. */
    public ?TypeEnum $type;


    public function __construct()
    {

    }


}