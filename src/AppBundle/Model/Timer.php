<?php
/**
 * Created by PhpStorm.
 * User: BPicharles
 * Date: 10/03/2017
 * Time: 11:24
 */

namespace AppBundle\Model;


class Timer
{
    private $start;

    private $end;

    private $duration;

    /**
     * Timer constructor.
     *
     * @param $start
     */
    public function __construct()
    {
        $this->start = new \DateTime();
    }

    public function end()
    {
        $this->end = new \DateTime();
        $interval = $this->start->diff($this->end);
        $this->duration = new \DateTime('T' . $interval->format("%H:%I:%S"));
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }
}