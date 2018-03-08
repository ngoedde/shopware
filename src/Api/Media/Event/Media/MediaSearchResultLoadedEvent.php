<?php declare(strict_types=1);

namespace Shopware\Api\Media\Event\Media;

use Shopware\Api\Media\Struct\MediaSearchResult;
use Shopware\Context\Struct\ShopContext;
use Shopware\Framework\Event\NestedEvent;

class MediaSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'media.search.result.loaded';

    /**
     * @var MediaSearchResult
     */
    protected $result;

    public function __construct(MediaSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): ShopContext
    {
        return $this->result->getContext();
    }
}