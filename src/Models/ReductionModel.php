<?php

namespace BolRetailerAPI\Models;

use Carbon\Carbon;


class ReductionModel extends BaseModel
{
    /**
     * @var Carbon\Carbon
     */
    public $startDate;

    /**
     * @var Carbon\Carbon
     */
    public $endDate;

    /**
     * @var string
     */
    public $ean;

    /**
     * @var float
     */
    public $maximumPrice;

    /**
     * @var float
     */
    public $costReduction;

    /**
     * Validate this model, assert that all required values are set.
     */
    public function validate(): void
    {
        $this->assertType($this->startDate, 'string');
        $this->assertType($this->endDate, 'string');
        
        // When parsing a csv we don't know whether these are doubles or ints
        // $this->assertType($this->maximumPrice, 'double');
        // $this->assertType($this->costReduction, 'double');

        $this->startDate = Carbon::parse($this->startDate);
        $this->endDate = Carbon::parse($this->endDate);
    }
}