<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @copyright 2010-2014 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Transformer\Router\UrlGenerator\Standard;

use phpDocumentor\Descriptor;
use phpDocumentor\Transformer\Router\UrlGenerator\UrlGeneratorInterface;

/**
 * Generates a relative URL with methods for use in the generated HTML documentation.
 */
class MethodDescriptor implements UrlGeneratorInterface
{
    /**
     * Generates a URL from the given node or returns false if unable.
     *
     * @param string|Descriptor\MethodDescriptor $node
     *
     * @return string|false
     */
    public function __invoke($node)
    {
        $className = $node->getParent()->getFullyQualifiedStructuralElementName();
        $name = $node->getName();

        return '/classes/' . str_replace('\\', '.', ltrim($className, '\\')).'.html#method_' . $name;
    }
}
