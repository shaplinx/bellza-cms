<?php

namespace Modules\Faq\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class FaqsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Faqs';

        // module name
        $this->module_name = 'faqs';

        // directory path of the module
        $this->module_path = 'faq::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Faq\Models\Faq";
    }

}
