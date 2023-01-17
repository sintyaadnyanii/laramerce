<tr data-product_code="{{ $item->product_id }}">
    <td class="text-center" style="width:70px">
        <a href="product.html">
            <img src="{{ asset($item->product->images->count() > 0 ? 'storage/' . $item->product->images->first()->src : 'image/catalog/demo/product/80/1.jpg') }}"
                style="width:70px" alt="{{ $item->product->name }}" title="{{ $item->product->name }}" class="preview">
        </a>
    </td>
    <td class="text-left"> <a class="cart_product_name"
            href="{{ route('product-detail', ['product' => $item->product]) }}">{{ Str::words($item->product->name, 3, '...') }}</a>
    </td>
    <td class="text-center" id="item-{{ $item->product_id }}-quantity">
        {{ $item->amount }}</td>
    <td class="text-center">
        Rp.
        {{ number_format($item->product->price, 0, '.', ',') }}
    </td>
    <td class="text-right">
        <a href="product.html" class="fa fa-edit"></a>
    </td>
    <td class="text-right">
        <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
    </td>
</tr>
