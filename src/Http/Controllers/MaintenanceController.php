<?php

namespace Statview\Satellite\Http\Controllers;

use Illuminate\Contracts\Foundation\MaintenanceMode;
use Illuminate\Routing\Controller;

class MaintenanceController extends Controller
{
    public function __invoke()
    {
        $maintenance = app(MaintenanceMode::class);

        if ($maintenance->active()) {
            $maintenance->deactivate();
        } else {
            $maintenance->activate([]);
        }

        return [
            'message' => 'ok',
        ];
    }
}