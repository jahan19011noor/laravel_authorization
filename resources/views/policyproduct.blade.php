<h1>{{ $product->name }}</h1>

@can('policy_for_product', $product)

	<a href>This is the product page</a>

@endcan