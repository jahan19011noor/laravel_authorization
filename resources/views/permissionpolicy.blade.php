<h1>{{ $product->name }}</h1>

@can('show-product', $product)

	<a href>This is the product page</a>

@endcan