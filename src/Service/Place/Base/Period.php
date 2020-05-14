<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Service\Place\Base;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class Period
{
    /**
     * @var OpenClosePeriod|null
     */
    private $open;

    /**
     * @var OpenClosePeriod|null
     */
    private $close;

    /**
     * @return bool
     */
    public function hasOpen()
    {
        return null !== $this->open;
    }

    /**
     * @return OpenClosePeriod|null
     */
    public function getOpen()
    {
        return $this->open;
    }

    public function setOpen(OpenClosePeriod $open = null)
    {
        $this->open = $open;
    }

    /**
     * @return bool
     */
    public function hasClose()
    {
        return null !== $this->close;
    }

    /**
     * @return OpenClosePeriod|null
     */
    public function getClose()
    {
        return $this->close;
    }

    public function setClose(OpenClosePeriod $close = null)
    {
        $this->close = $close;
    }
}
