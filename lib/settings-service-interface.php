<?php

namespace cookiebot_addons_framework\lib;

Interface Settings_Service_Interface {

	/**
	 * Returns true if the addon is enabled in the backend
	 *
	 * @param $addon
	 *
	 * @return mixed
	 *
	 * @since 1.3.0
	 */
	public function is_addon_enabled( $addon );

	public function is_addon_installed( $addon );

	public function get_active_addons();

	public function get_addon_list();

	public function get_checked_addons();
}