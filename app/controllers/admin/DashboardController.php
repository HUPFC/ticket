<?php namespace Controllers\Admin;

use Auth;
use View;

class DashboardController extends AdminController {

	/**
	 * Show the administration dashboard page.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		// Show the page
		return View::make('admin/dashboard');
	}

}