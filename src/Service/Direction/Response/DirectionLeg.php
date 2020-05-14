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
use Ivory\GoogleMap\Service\Base\Distance;
use Ivory\GoogleMap\Service\Base\Duration;
use Ivory\GoogleMap\Service\Base\Time;

/**
 * @see http://code.google.com/apis/maps/documentation/javascript/reference.html#DirectionLeg
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class DirectionLeg
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
     * @var Duration|null
     */
    private $durationInTraffic;

    /**
     * @var Time|null
     */
    private $arrivalTime;

    /**
     * @var Time|null
     */
    private $departureTime;

    /**
     * @var string|null
     */
    private $endAddress;

    /**
     * @var Coordinate|null
     */
    private $endLocation;

    /**
     * @var string|null
     */
    private $startAddress;

    /**
     * @var Coordinate|null
     */
    private $startLocation;

    /**
     * @var DirectionStep[]
     */
    private $steps = [];

    /**
     * @var DirectionWaypoint[]
     */
    private $viaWaypoints = [];

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
    public function hasEndAddress()
    {
        return null !== $this->endAddress;
    }

    /**
     * @return string|null
     */
    public function getEndAddress()
    {
        return $this->endAddress;
    }

    /**
     * @param string|null $endAddress
     */
    public function setEndAddress($endAddress = null)
    {
        $this->endAddress = $endAddress;
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
    public function hasStartAddress()
    {
        return null !== $this->startAddress;
    }

    /**
     * @return string|null
     */
    public function getStartAddress()
    {
        return $this->startAddress;
    }

    /**
     * @param string|null $startAddress
     */
    public function setStartAddress($startAddress = null)
    {
        $this->startAddress = $startAddress;
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
    public function hasSteps()
    {
        return !empty($this->steps);
    }

    /**
     * @return DirectionStep[]
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param DirectionStep[] $steps
     */
    public function setSteps(array $steps)
    {
        $this->steps = [];
        $this->addSteps($steps);
    }

    /**
     * @param DirectionStep[] $steps
     */
    public function addSteps(array $steps)
    {
        foreach ($steps as $step) {
            $this->addStep($step);
        }
    }

    /**
     * @return bool
     */
    public function hasStep(DirectionStep $step)
    {
        return in_array($step, $this->steps, true);
    }

    public function addStep(DirectionStep $step)
    {
        if (!$this->hasStep($step)) {
            $this->steps[] = $step;
        }
    }

    public function removeStep(DirectionStep $step)
    {
        unset($this->steps[array_search($step, $this->steps, true)]);
        $this->steps = empty($this->steps) ? [] : array_values($this->steps);
    }

    /**
     * @return bool
     */
    public function hasViaWaypoints()
    {
        return !empty($this->viaWaypoints);
    }

    /**
     * @return DirectionWaypoint[]
     */
    public function getViaWaypoints()
    {
        return $this->viaWaypoints;
    }

    /**
     * @param DirectionWaypoint[] $viaWaypoints
     */
    public function setViaWaypoints(array $viaWaypoints)
    {
        $this->viaWaypoints = [];
        $this->addViaWaypoints($viaWaypoints);
    }

    /**
     * @param DirectionWaypoint[] $viaWaypoints
     */
    public function addViaWaypoints(array $viaWaypoints)
    {
        foreach ($viaWaypoints as $viaWaypoint) {
            $this->addViaWaypoint($viaWaypoint);
        }
    }

    /**
     * @return bool
     */
    public function hasViaWaypoint(DirectionWaypoint $viaWaypoint)
    {
        return in_array($viaWaypoint, $this->viaWaypoints, true);
    }

    public function addViaWaypoint(DirectionWaypoint $viaWaypoint)
    {
        if (!$this->hasViaWaypoint($viaWaypoint)) {
            $this->viaWaypoints[] = $viaWaypoint;
        }
    }

    public function removeViaWaypoint(DirectionWaypoint $viaWaypoint)
    {
        unset($this->viaWaypoints[array_search($viaWaypoint, $this->viaWaypoints, true)]);
        $this->viaWaypoints = empty($this->viaWaypoints) ? [] : array_values($this->viaWaypoints);
    }
}
