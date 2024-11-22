<?php

namespace Modules\Doctor\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class DoctorsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Doctors';

        // module name
        $this->module_name = 'doctors';

        // directory path of the module
        $this->module_path = 'doctor::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Doctor\Models\Doctor";
    }

}
