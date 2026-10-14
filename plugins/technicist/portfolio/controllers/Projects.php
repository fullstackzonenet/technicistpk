<?php

namespace Technicist\Portfolio\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

/**
 * Projects Backend Controller
 */
class Projects extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var array Permissions required to view this page.
     */
    protected $requiredPermissions = [
        'technicist.portfolio.projects.manage_all',
    ];
}
