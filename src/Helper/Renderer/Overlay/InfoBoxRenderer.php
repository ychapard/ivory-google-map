<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Helper\Renderer\Overlay;

use Ivory\GoogleMap\Helper\Formatter\Formatter;
use Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer;
use Ivory\JsonBuilder\JsonBuilder;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class InfoBoxRenderer extends AbstractInfoWindowRenderer
{
    /**
     * @var RequirementRenderer
     */
    private $requirementRenderer;

    public function __construct(
        Formatter $formatter,
        JsonBuilder $jsonBuilder,
        RequirementRenderer $requirementRenderer
    ) {
        parent::__construct($formatter, $jsonBuilder);

        $this->setRequirementRenderer($requirementRenderer);
    }

    /**
     * @return RequirementRenderer
     */
    public function getRequirementRenderer()
    {
        return $this->requirementRenderer;
    }

    public function setRequirementRenderer(RequirementRenderer $requirementRenderer)
    {
        $this->requirementRenderer = $requirementRenderer;
    }

    /**
     * @return string
     */
    public function renderSource()
    {
        return 'https://cdn.rawgit.com/googlemaps/v3-utility-library/infobox/1.1.13/src/infobox_packed.js';
    }

    /**
     * @return string
     */
    public function renderRequirement()
    {
        return $this->requirementRenderer->render($this->getClass());
    }

    /**
     * {@inheritdoc}
     */
    protected function getClass()
    {
        return 'InfoBox';
    }

    /**
     * {@inheritdoc}
     */
    protected function getNamespace()
    {
        return false;
    }
}
