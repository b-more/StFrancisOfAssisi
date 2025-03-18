<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file_attachment',
        'assigned_by',
        'grade',
        'subject_id',
        'due_date',
        'status',
        'notify_parents',
        'sms_message',
    ];

    protected $casts = [
        'due_date' => 'date',
        'notify_parents' => 'boolean',
    ];

    public function assignedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'assigned_by');
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(HomeworkSubmission::class);
    }

    /**
     * Get the SMS logs associated with this homework.
     */
    public function smsLogs(): HasMany
    {
        return $this->hasMany(SmsLog::class, 'reference_id')
            ->where('message_type', 'homework_notification');
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // When a new homework is created, send SMS notifications if enabled
        static::created(function ($homework) {
            if ($homework->notify_parents) {
                \App\Filament\Resources\HomeworkResource::sendSmsNotifications($homework);
            }
        });
    }
}
