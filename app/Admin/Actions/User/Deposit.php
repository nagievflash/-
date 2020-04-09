<?php

namespace App\Admin\Actions\User;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Deposit extends RowAction
{
    public $name = 'Попонить';

    public function handle(Model $model, Request $request)
    {
        // $model ...
        $deposit = $request->input('deposit');
        if ($deposit > 0) {
            $model->deposit($deposit);
        }
        else {
            $model->withdraw(abs($deposit));
        }
        return $this->response()->success('Успешно.')->refresh();
    }

    public function form()
    {
        $this->text('deposit', 'Форма изменения баланса')->placeholder('Введите количество токенов')->rules('required|numeric', [
            'required' => 'Введите непустое значение',
            'numeric'   => 'Введенное значение должно быть целым числом',
        ]);
    }

    public function html() {
        return "<a class='report-posts btn btn-sm btn-danger'><i class='fa fa-info-circle'></i>Report</a>";
    }


}
