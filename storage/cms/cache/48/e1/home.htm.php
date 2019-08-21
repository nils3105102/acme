<?php 
class Cms5d5a669808d11550749576_86cc50053ddee08e5efd7898d2fec6c7Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
