<?php

return array(

	/*
	|----------------------------------------------------
	| Title
	|----------------------------------------------------
	| Here is title in admin page. You can use your brand
	| name.
	|
	*/
	'title'			=>	'Administrator',

	/*
	|----------------------------------------------------
	| Copyright
	|----------------------------------------------------
	| Here is copyright. You can use Closure object or a
	| string
	|
	*/
	'copyright'		=>	function()
	{
		return '&COPY; '. date('Y').' All rights reserved.';
	},

	/*
	|----------------------------------------------------
	| Homepage
	|----------------------------------------------------
	| Here you define what view are you show in homepage.
	|
	*/
	'homepage'		=>	[
		'view'	=>	'admin::homepage',
		'data'	=>	[]
	],


	/*
	|----------------------------------------------------
	| Template
	|----------------------------------------------------
	| Here you define what view template are you use for
	| admin page. 
	|
	*/
	'template'	=>	'admin::template',
	
	/*
	|----------------------------------------------------
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53a5123897370f9f62a4a5fefa48de54ea763d38
	| Login url
	|----------------------------------------------------
	| Routes url for login page
	|
	*/
	'login-url'	=>	'admin-login',
	
	/*
	|----------------------------------------------------
<<<<<<< HEAD
=======
=======
>>>>>>> 9915882e3f7d6642bffcb31c5bd1de414fd4d3dc
>>>>>>> 53a5123897370f9f62a4a5fefa48de54ea763d38
	| Menus
	|----------------------------------------------------
	| Here you define all menus for your admin page.
	|
	*/
	'menus'			=>	[
		'home'	=>	[
			'title'		=>	'Home',
			'url'		=>	'admin'
		],
		'data'	=>	[
			'title'		=>	'Data',
			'url'		=>	'#'
		],
	],

	/*
	|----------------------------------------------------
	| Sub menus
	|----------------------------------------------------
	| Here you define sub menu for main menu above.
	|
	*/
	'submenus'	=>	[
		'data'	=>	[
			[
				'title'	=>	'Users',
				'url'	=>	'admin/users'
			]
		],
	],

	/*
	|----------------------------------------------------
	| Permission
	|----------------------------------------------------
	| What permission are you use for secure admin page ?
	|
	*/
	'permission'	=>	'admin.auth',

	/*
	|----------------------------------------------------
	| Costum filters
	|----------------------------------------------------
	| Here code to register your costum filters
	|
	*/
	'filters'	=>	[
		'admin.auth'	=>	function()
		{
			if( ! Auth::check())
			{
<<<<<<< HEAD
				return Redirect::to(Config::get('admin::admin.login-url'))->with('message-error', 'You must logged in first.');
=======
				return Redirect::to('admin')->with('message-error', 'You must logged in first.');
>>>>>>> 53a5123897370f9f62a4a5fefa48de54ea763d38
			}
		}
	],

	/*
	|----------------------------------------------------
	| Costum page
	|----------------------------------------------------
	| Here code to register your costum page
	|
	*/
	'pages'	=>	array(
		'logout' 	=>	function()
		{
			if(Auth::check())
			{
				Auth::logout();
				return Redirect::to('/')
					->with('message-success', 'Logout success.')
				;
			}

			return Redirect::to('/')
				->with('message-error', 'You are not logged in.')
			;
		}
	),

	/*
	|----------------------------------------------------
	| Resources
	|----------------------------------------------------
	| Here code to register your resources
	|
	*/
	'resources'	=>	array(
		'users',
	),
<<<<<<< HEAD
);
=======
<<<<<<< HEAD
);
=======
);
>>>>>>> 9915882e3f7d6642bffcb31c5bd1de414fd4d3dc
>>>>>>> 53a5123897370f9f62a4a5fefa48de54ea763d38
