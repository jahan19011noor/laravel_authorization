<h1>Hi, {{ $user_role->name }}</h1>

@can('show-product')

	<a href>This is the show-product content</a>
	<h1>Super Admin</h1>
	<h1>Admin</h1>

@endcan

@can('view-all-pages')

	<a href>This is the view-all-pages content</a>
	<h1>Super Admin</h1>
	<h1>Admin</h1>
	<h1>Author</h1>

@endcan

@can('write-blog')

	<a href>This is the Write Blog content</a>
	<h1>Super Admin</h1>
	<h1>Admin</h1>
	<h1>Author</h1>

@endcan

@can('visitor')

	<a href>This is the Visitor content</a>
	<h1>Super Admin</h1>
	<h1>Admin</h1>
	<h1>Author</h1>
	<h1>Public</h1>

@endcan