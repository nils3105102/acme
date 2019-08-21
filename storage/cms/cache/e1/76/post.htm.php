<?php 
class Cms5d5d0c346dcc0624167396_fe7fc8e20a048908ba9ce07ae62329ccClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
