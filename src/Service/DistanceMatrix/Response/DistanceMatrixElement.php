<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Service\DistanceMatrix\Response;

use Ivory\GoogleMap\Service\Base\Distance;
use Ivory\GoogleMap\Service\Base\Duration;
use Ivory\GoogleMap\Service\Base\Fare;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class DistanceMatrixElement
{
    /**
     * @var string|null
     */
    private $status;

    /**
     * @var Distance|null
     */
    private $distance;

    /**
     * @var Duration|null
     */
    private $duration;

    /**
     * @var Duration|null
     */
    private $durationInTraffic;

    /**
     * @var Fare|null
     */
    private $fare;

    /**
     * @return bool
     */
    public function hasStatus()
    {
        return  null !== $this->status;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function hasDistance()
    {
        return null !== $this->distance;
    }

    /**
     * @return Distance|null
     */
    public function getDistance()
    {
        return $this->distance;
    }

    public function setDistance(Distance $distance = null)
    {
        $this->distance = $distance;
    }

    /**
     * @return bool
     */
    public function hasDuration()
    {
        return null !== $this->duration;
    }

    /**
     * @return Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration(Duration $duration = null)
    {
        $this->duration = $duration;
    }

    /**
     * @return bool
     */
    public function hasDurationInTraffic()
    {
        return null !== $this->durationInTraffic;
    }

    /**
     * @return Duration|null
     */
    public function getDurationInTraffic()
    {
        return $this->durationInTraffic;
    }

    public function setDurationInTraffic(Duration $durationInTraffic = null)
    {
        $this->durationInTraffic = $durationInTraffic;
    }

    /**
     * @return bool
     */
    public function hasFare()
    {
        return null !== $this->fare;
    }

    /**
     * @return Fare|null
     */
    public function getFare()
    {
        return $this->fare;
    }

    public function setFare(Fare $fare = null)
    {
        $this->fare = $fare;
    }
}
