<?php

namespace Modules\Testimony\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class TestimoniesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Testimonies';

        // module name
        $this->module_name = 'testimonies';

        // directory path of the module
        $this->module_path = 'testimony::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Testimony\Models\Testimony";
    }

}
