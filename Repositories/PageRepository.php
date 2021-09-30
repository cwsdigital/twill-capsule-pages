<?php

namespace App\Twill\Capsules\Pages\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use App\Twill\Capsules\Base\ModuleRepository;
use App\Twill\Capsules\Base\Repositories\Behaviours\HandleNesting;
use App\Twill\Capsules\Pages\Models\Page;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class PageRepository extends ModuleRepository
{
    use HandleBlocks;
    use HandleTranslations;
    use HandleSlugs;
    use HandleMedias;
    use HandleFiles;
    use HandleRevisions;
    use HandleNesting;
    use HandleMetadata;

    public function __construct(Page $model)
    {
        $this->model = $model;
    }
}
