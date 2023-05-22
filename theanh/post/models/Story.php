<?php

namespace Theanh\Post\Model;

use Illuminate\Support\Facades\Lang;
use Model;
use October\Rain\Database\Traits\NestedTree;
use October\Rain\Database\Traits\Validation;

class Story extends Model
{
    use Validation;
    use NestedTree;
    use ActiveField;
    use SlugField;
    use NameField;
    use DataFileModel;
    use CodeField;
    use TraitCached;

    const STORY_ACTIVE = 1;
    const STORY_INACTIVE = 0;

    public $table = 'theanh_post_story';
    protected $dates = ['created_at', 'updated_at'];
    public $fillable = [
        'title',
        'active',
        'description',
    ];

    public $cached = [
        'id',
        'name',
        'active',
        'description',
    ];

    /**
     * Get status_id options
     * @return array
     */
    public function getActiveOptions(): array
    {
        return [
            self::STORY_ACTIVE => Lang::get('lovata.goodnews::lang.active.' . self::STORY_ACTIVE),
            self::STORY_INACTIVE => Lang::get('lovata.goodnews::lang.active.' . self::STORY_INACTIVE),
        ];
    }
}
