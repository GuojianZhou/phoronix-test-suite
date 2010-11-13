<?php

/*
	Phoronix Test Suite
	URLs: http://www.phoronix.com, http://www.phoronix-test-suite.com/
	Copyright (C) 2008 - 2010, Phoronix Media
	Copyright (C) 2008 - 2010, Michael Larabel

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

class remove_all_results implements pts_option_interface
{
	public static function run($r)
	{
		$remove_all = pts_user_io::prompt_bool_input("Are you sure you wish to remove all saved results", true);

		if($remove_all)
		{
			foreach(pts_client::saved_test_results() as $saved_results_identifier)
			{
				pts_client::remove_saved_result_file($saved_results_identifier);
			}
			echo "\n";
		}
	}
}

?>