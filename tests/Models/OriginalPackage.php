<?php

namespace Awobaz\Compoships\Tests\Models;

use Awobaz\Compoships\Compoships;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $name
 * @property int    $allocation_id
 * @property-read Allocation $allocation
 *
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OriginalPackage extends Model
{
    use Compoships;

    public $timestamps = false;

    /**
     * @return \Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo
     */
    public function allocation()
    {
        return $this->belongsTo(Allocation::class);
    }
}
