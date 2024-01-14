<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Concerns\Activity\Activityable;
class Image extends Model {
    use HasFactory, Activityable;
    protected $fillable = [
          'filename',
           'type',
            'photo_status',
            'photo_type',
            'reject_reson',
            'imageable_type',
            'imageable_id',

            'created_by_callcenter_id',
            'updated_by_callcenter_id',
            'created_at_callcenter',
            'updated_at_callcenter',

    ];
    public $timestamps = false;
    public function imageable(): MorphTo {
        return $this->morphTo();
    }

    protected function getImageType($column) {
        return $this->type;
    }
    
    public function captainProfile() {
        return $this->belongsTo(CaptainProfile::class, 'imageable_id');
    }

    public function createdByCallcenter() {
        return $this->belongsTo(Callcenter::class, 'created_by_callcenter_id');
    }
    
    public function updatedByCallcenter() {
        return $this->belongsTo(Callcenter::class, 'updated_by_callcenter_id');
    }
}