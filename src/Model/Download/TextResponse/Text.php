<?php


namespace Kicken\Copyleaks\Model\Download\TextResponse;


use Kicken\Copyleaks\Model\JsonConstructable;

class Text implements JsonConstructable {
    /** @var string */
    public $value;
    /** @var Excludes */
    public $exclude;
    /** @var Pages */
    public $pages;

    public static function createFromJsonObject(\stdClass $json){
        $self = new static();
        $self->value = $json->value;
        $self->exclude = Excludes::createFromJsonObject($json->exclude);
        $self->pages = Pages::createFromJsonObject($json->pages);

        return $self;
    }
}
