<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Helper;

use Ivory\GoogleMap\Helper\Event\MapEvent;
use Ivory\GoogleMap\Helper\Event\MapEvents;
use Ivory\GoogleMap\Map;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class MapHelper extends AbstractHelper
{
    /**
     * @return string
     */
    public function render(Map $map)
    {
        return $this->renderHtml($map).$this->renderStylesheet($map).$this->renderJavascript($map);
    }

    /**
     * @return string
     */
    public function renderHtml(Map $map)
    {
        return $this->doRender($map, MapEvents::HTML);
    }

    /**
     * @return string
     */
    public function renderStylesheet(Map $map)
    {
        return $this->doRender($map, MapEvents::STYLESHEET);
    }

    /**
     * @return string
     */
    public function renderJavascript(Map $map)
    {
        return $this->doRender($map, MapEvents::JAVASCRIPT);
    }

    /**
     * @param string $eventName
     *
     * @return string
     */
    private function doRender(Map $map, $eventName)
    {
        $this->getEventDispatcher()->dispatch($eventName, $event = new MapEvent($map));

        return $event->getCode();
    }
}
