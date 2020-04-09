<?php

namespace App\Admin\Actions\User;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Deposit extends RowAction
{
    public $name = 'deposit';

    public function handle(Model $model)
    {
        // $model ...

        return $this->response()->success('Success message.')->refresh();
    }

}