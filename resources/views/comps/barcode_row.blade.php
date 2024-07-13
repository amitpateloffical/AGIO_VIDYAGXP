<tr>
    <th>
        <input type="text" value="{{ $product->id }}" readonly>
    </th>
    <td>
        <input type="text" value="{{ $product->batch_status }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->item_code }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->item_name }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->location_code }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->store }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->grn_batch_id }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->arn_id }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->container_no }}" readonly>
    </td>
    {{-- <td>
        <input type="text" value="{{ $product->container_status }}" readonly>
    </td> --}}
    <td>
        <input type="text" value="{{ $product->brand_name }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->unit }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->quantity_of_product }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->weightPerPackage }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->totalWeight }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->item_description }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->batch_no }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->uom_branch }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->mfg_dt }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->exp_dt }}" readonly>
    </td>
    {{-- <td>
         <input type="text" value="{{ $product->no_of_cont }}" readonly>
    </td> --}}
    <td>
        <input type="text" value="{{ $product->pack_size }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->count_no }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->rec_qty }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->manufacturer }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->supplier }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->grn_no }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->grn_date }}" readonly>
    </td>
    <td>
        <input type="text" value="{{ $product->format_no }}" readonly>
    </td>
    {{-- <td>
        <input type="text" value="{{ $product->printed_by }}" readonly>
    </td> --}}
    <td style="min-width: 300px;">
        <img style="object-fit: contain; scale: 3;" src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->bar_code, 'C39') }}">
    </td>
    <td>
        {{-- <button>Test</button> --}}
        <form action="{{ route('print', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Show Label</button>
        </form>
    </td>
</tr>
