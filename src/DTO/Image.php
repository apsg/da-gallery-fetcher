<?php
namespace Apsg\Dafetcher\DTO;

use stdClass;

class Image
{
    protected stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function url() : string
    {
        return object_get($this->data, 'url', '');
    }

    public function title() : string
    {
        return object_get($this->data, 'title', '');
    }

    public function timestamp() : int
    {
        return object_get($this->data, 'published_time', 0);
    }

    public function authorAvatar() : string
    {
        return object_get($this->data, 'author.usericon', '');
    }

    public function full() : string
    {
        return object_get($this->data, 'content.src', '');
    }

    public function thumb() : string
    {
        $thumbs = object_get($this->data, 'thumbs', []);

        // end here returns the biggest thumb available
        return object_get(end($thumbs), 'src', '');
    }
}
