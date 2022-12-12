<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    const DATA_FETCH_ERROR = 'Currently we are facing some data fetching problem. Please try again.';
    const DATA_FETCH = 'Data successfully retrieve.';
    const DATA_SAVE_ERROR = 'Data saveing error.';
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
