<?php 
class Cms5d5a6825b37f7102093048_eb63ee6d429ef7bdd1c7e1278d89b383Class extends Cms\Classes\PageCode
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
