<?php

namespace App\Twill\Capsules\Pages\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Twill\Capsules\Base\Crops;
use App\Twill\Capsules\Base\Models\Behaviours\HasHeading;
use App\Twill\Capsules\Base\Models\Behaviours\HasTemplate;
use App\Twill\Capsules\Base\Models\Behaviours\IsNested;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class Page extends Model implements Sortable
{
    use HasBlocks;
    use HasTranslation;
    use HasSlug;
    use HasMedias;
    use HasFiles;
    use HasRevisions;
    use HasPosition;
    use IsNested;
    use HasHeading;
    use HasMetadata;
    use HasTemplate;

    protected $fillable = [
        'template_id',
        'published',
        'position',
        'parent_id'
    ];

    public $translatedAttributes = [
        'title',
        'heading',
        'subheading',
        'intro_content',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = Crops::ALL_CROPS;

    public $metadataFallbacks = [
        'title' => 'heading',
    ];
}
