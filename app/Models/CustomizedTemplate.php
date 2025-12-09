<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CustomizedTemplate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'template',
        'slug',
        'pin',
        'recipient_name',
        'status',
        'heading',
        'subheading',
        'message',
        'from',
        'section1_title',
        'section1_content',
        'section2_title',
        'section2_content',
        'section3_title',
        'section3_content',
        'section4_title',
        'section4_content',
        'section5_title',
        'section5_content',
        'theme_color',
        'bg_color',
        'bg_style',
        'images',
        'custom_fields',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'images' => 'array',
            'custom_fields' => 'array',
        ];
    }

    /**
     * Get the user that owns the customized template.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Generate a unique slug from the heading or template name.
     */
    public static function generateSlug($heading, $userId, $template = null)
    {
        $baseSlug = Str::slug($heading ?: 'untitled-template');
        $slug = $baseSlug;
        $counter = 1;

        while (static::where('slug', $slug)->where('user_id', $userId)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($template) {
            if (empty($template->slug)) {
                $template->slug = static::generateSlug($template->heading, $template->user_id, $template->template);
            }
        });
    }
}
