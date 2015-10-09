<?php 

class BadilDateTimer extends DateTime
{
    public $format;
    /**
     * Instance of class.
     *
     * @param string $date
     */
    public function __construct($date = '')
    {
        parent::__construct($date);
        $this->format = "d M Y H:i:s";
    }

    /**
     * Add days to date.
     *
     * @param int $days
     * @return $this
     */
    public function addDays($days = 1)
    {
        $this->add( DateInterval::createFromDateString($days . ' days') );

        return $this;
    }

    /**
     * Add hours to date.
     *
     * @param int $hours
     * @return $this
     */
    public function addHours($hours = 1)
    {
        $this->add( DateInterval::createFromDateString($hours. ' hours') );

        return $this;
    }

    /**
     * Add minutes to date.
     *
     * @param int $minutes
     * @return $this
     */
    public function addMinutes($minutes = 1)
    {
        $this->add( DateInterval::createFromDateString($minutes. ' minutes') );

        return $this;
    }

    /**
     * Add months to date.
     *
     * @param int $months
     * @return $this
     */
    public function addMonths($months = 1)
    {
        $this->add( DateInterval::createFromDateString($hours. ' months') );

        return $this;
    }

    /**
     * Add years to date.
     *
     * @param int $months
     * @return $this
     */
    public function addYears($years = 1)
    {
        $this->add( DateInterval::createFromDateString($hours. ' years') );

        return $this;
    }

    /**
     * Add seconds to date.
     *
     * @param int $seconds
     * @return $this
     */
    public function addSeconds($seconds = 1)
    {
        $this->add( DateInterval::createFromDateString($seconds. ' years') );

        return $this;
    }

    /**
     * Compare range with given date.
     *
     * @return int
     */
    public function hourRangeWith($otherDate)
    {
        if (! $otherDate instanceof BadilDateTimer)
        {
            if ($otherDate instanceof DateTime) $otherDate = $otherDate->format('Y-m-d H:i:s');

            $otherDate = new BadilDateTimer($otherDate);
        }

        $time = $otherDate->toTime() - $this->toTime();

        return round($time / 3600);
    }

    /**
     * Convert to time.
     *
     * @return int
     */
    public function toTime()
    {
        return strtotime( $this->format('Y-m-d H:i:s') );
    }

    /**
     * @return int
     */
    public function dayRangeWith($otherDate)
    {
        if (! $otherDate instanceof BadilDateTimer)
        {
            if ($otherDate instanceof DateTime) $otherDate = $otherDate->format('Y-m-d H:i:s');

            $otherDate = new BadilDateTimer($otherDate);
        }

        $time = $otherDate->toTime() - $this->toTime();

        return round($time / (3600 * 24));
    }

}
