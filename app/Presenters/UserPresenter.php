<?php 

namespace App\Presenters;

use App\User;

class UserPresenter extends Presenter
{
    public function roles()
    {
        if($this->model->roles)
        {
            return $this->model->roles->pluck('name')->implode(' - ');
        }
    }

    public function userNote()
    {
        if($this->model->note)
        {
            return $this->model->note->body;
        }   
    }
    
    public function userTag()
    {
        if($this->model->tags)
        {
            return $this->model->tags->pluck('name')->implode(',');
        }
    }
}

?>