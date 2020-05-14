<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Service\Direction\Response\Transit;

use Ivory\GoogleMap\Service\Base\Time;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class DirectionTransitDetails
{
    /**
     * @var DirectionTransitStop|null
     */
    private $departureStop;

    /**
     * @var DirectionTransitStop|null
     */
    private $arrivalStop;

    /**
     * @var Time|null
     */
    private $departureTime;

    /**
     * @var Time|null
     */
    private $arrivalTime;

    /**
     * @var string|null
     */
    private $headSign;

    /**
     * @var int|null
     */
    private $headWay;

    /**
     * @var DirectionTransitLine|null
     */
    private $line;

    /**
     * @var int|null
     */
    private $numStops;

    /**
     * @return bool
     */
    public function hasDepartureStop()
    {
        return null !== $this->departureStop;
    }

    /**
     * @return DirectionTransitStop|null
     */
    public function getDepartureStop()
    {
        return $this->departureStop;
    }

    public function setDepartureStop(DirectionTransitStop $departureStop = null)
    {
        $this->departureStop = $departureStop;
    }

    /**
     * @return bool
     */
    public function hasArrivalStop()
    {
        return null !== $this->arrivalStop;
    }

    /**
     * @return DirectionTransitStop|null
     */
    public function getArrivalStop()
    {
        return $this->arrivalStop;
    }

    public function setArrivalStop(DirectionTransitStop $arrivalStop = null)
    {
        $this->arrivalStop = $arrivalStop;
    }

    /**
     * @return bool
     */
    public function hasDepartureTime()
    {
        return null !== $this->departureTime;
    }

    /**
     * @return Time|null
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function setDepartureTime(Time $departureTime = null)
    {
        $this->departureTime = $departureTime;
    }

    /**
     * @return bool
     */
    public function hasArrivalTime()
    {
        return null !== $this->arrivalTime;
    }

    /**
     * @return Time|null
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime(Time $arrivalTime = null)
    {
        $this->arrivalTime = $arrivalTime;
    }

    /**
     * @return bool
     */
    public function hasHeadSign()
    {
        return null !== $this->headSign;
    }

    /**
     * @return string|null
     */
    public function getHeadSign()
    {
        return $this->headSign;
    }

    /**
     * @param string|null $headSign
     */
    public function setHeadSign($headSign)
    {
        $this->headSign = $headSign;
    }

    /**
     * @return bool
     */
    public function hasHeadWay()
    {
        return null !== $this->headWay;
    }

    /**
     * @return int|null
     */
    public function getHeadWay()
    {
        return $this->headWay;
    }

    /**
     * @param int|null $headWay
     */
    public function setHeadWay($headWay)
    {
        $this->headWay = $headWay;
    }

    /**
     * @return bool
     */
    public function hasLine()
    {
        return null !== $this->line;
    }

    /**
     * @return DirectionTransitLine|null
     */
    public function getLine()
    {
        return $this->line;
    }

    public function setLine(DirectionTransitLine $line = null)
    {
        $this->line = $line;
    }

    /**
     * @return bool
     */
    public function hasNumStops()
    {
        return null !== $this->numStops;
    }

    /**
     * @return int|null
     */
    public function getNumStops()
    {
        return $this->numStops;
    }

    /**
     * @param int|null $numStops
     */
    public function setNumStops($numStops)
    {
        $this->numStops = $numStops;
    }
}
