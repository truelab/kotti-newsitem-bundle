<?php

namespace Truelab\KottiNewsItemBundle\Model;

use Truelab\KottiModelBundle\Model\Document;
use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * @TypeInfo({
 *   "table" = "news_items",
 *   "type"  = "news_item",
 *   "fields" = {"publish_date"},
 *   "associated_table" = "documents",
 *   "association" = "news_items.id = documents.id"
 * })
 */
class NewsItem extends Document
{
    /**
     * @var \DateTime
     */
    protected $publishDate;

    /**
     * @param string|\Datetime $publishDate
     */
    public function setPublishDate($publishDate)
    {
        if($publishDate instanceof \DateTime) {
            $this->publishDate = $publishDate;
        }else{
            $this->publishDate = new \DateTime($publishDate);
        }
    }

    /**
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }
}
