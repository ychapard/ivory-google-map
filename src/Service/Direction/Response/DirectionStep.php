<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Service\Direction\Response;

use Ivory\GoogleMap\Base\Coordinate;
use Ivory\GoogleMap\Overlay\EncodedPolyline;
use Ivory\GoogleMap\Service\Base\Distance;
use Ivory\GoogleMap\Service\Base\Duration;
use Ivory\GoogleMap\Service\Direction\Response\Transit\DirectionTransitDetails;

/**
 * @see http://code.google.com/apis/maps/documentation/javascript/reference.html#DirectionStep
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class DirectionStep
{
    /**
     * @var Distance|null
     */
    private $distance;

    /**
     * @var Duration|null
     */
    private $duration;

    /**
     * @var Coordinate|null
     */
    private $endLocation;

    /**
     * @var string|null
     */
    private $instructions;

    /**
     * @var EncodedPolyline|null
     */
    private $encodedPolyline;

    /**
     * @var Coordinate|null
     */
    private $startLocation;

    /**
     * @var string|null
     */
    private $travelMode;

    /**
     * @var DirectionTransitDetails|null
     */
    private $transitDetails;

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
    public function hasEndLocation()
    {
        return null !== $this->endLocation;
    }

    /**
     * @return Coordinate|null
     */
    public function getEndLocation()
    {
        return $this->endLocation;
    }

    public function setEndLocation(Coordinate $endLocation = null)
    {
        $this->endLocation = $endLocation;
    }

    /**
     * @return bool
     */
    public function hasInstructions()
    {
        return null !== $this->instructions;
    }

    /**
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * @param string|null $instructions
     */
    public function setInstructions($instructions = null)
    {
        $this->instructions = $instructions;
    }

    /**
     * @return bool
     */
    public function hasEncodedPolyline()
    {
        return null !== $this->encodedPolyline;
    }

    /**
     * @return EncodedPolyline|null
     */
    public function getEncodedPolyline()
    {
        return $this->encodedPolyline;
    }

    public function setEncodedPolyline(EncodedPolyline $encodedPolyline = null)
    {
        $this->encodedPolyline = $encodedPolyline;
    }

    /**
     * @return bool
     */
    public function hasStartLocation()
    {
        return null !== $this->startLocation;
    }

    /**
     * @return Coordinate|null
     */
    public function getStartLocation()
    {
        return $this->startLocation;
    }

    public function setStartLocation(Coordinate $startLocation = null)
    {
        $this->startLocation = $startLocation;
    }

    /**
     * @return bool
     */
    public function hasTravelMode()
    {
        return null !== $this->travelMode;
    }

    /**
     * @return string|null
     */
    public function getTravelMode()
    {
        return $this->travelMode;
    }

    /**
     * @param string|null $travelMode
     */
    public function setTravelMode($travelMode = null)
    {
        $this->travelMode = $travelMode;
    }

    /**
     * @return bool
     */
    public function hasTransitDetails()
    {
        return null !== $this->transitDetails;
    }

    /**
     * @return DirectionTransitDetails|null
     */
    public function getTransitDetails()
    {
        return $this->transitDetails;
    }

    public function setTransitDetails(DirectionTransitDetails $transitDetails = null)
    {
        $this->transitDetails = $transitDetails;
    }
}
