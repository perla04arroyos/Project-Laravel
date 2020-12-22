<?php 

namespace App\Presenters;

use App\Project;

class ProjectPresenter extends Presenter
{
    public function date()
    {
        if($this->model->created_at)
        {
            return $this->model->created_at->diffForHumans();
        }
    }

    public function userName()
    {
        if($this->model->user_id)
        {
            return $this->model->user->name;
        }
    }

    public function projectNote()
    {
        if($this->model->note)
        {
            return $this->model->note->body;
        }   
    }
    
    public function projectTag()
    {
        if($this->model->tags)
        {
            return $this->model->tags->pluck('name')->implode(',');
        }
    }
}

?>