<?php

namespace Truelab\KottiNewsItemBundle\Model;

use Truelab\KottiModelBundle\Model\Document;
use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * @TypeInfo({
 *   "table" = "news_items",
 *   "type"  = "news_item",
 *   "associated_table" = "documents",
 *   "association" = "news_items.id = documents.id"
 * })
 */
class NewsItem extends Document
{

}
