<tr>
    <th>
        <input type="text" value="<?php echo e($product->id); ?>" readonly>
    </th>
    <td>
        <input type="text" value="<?php echo e($product->batch_status); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->item_code); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->item_name); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->location_code); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->store); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->grn_batch_id); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->arn_id); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->container_no); ?>" readonly>
    </td>
    
    <td>
        <input type="text" value="<?php echo e($product->brand_name); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->unit); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->quantity_of_product); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->weightPerPackage); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->totalWeight); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->item_description); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->batch_no); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->uom_branch); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->mfg_dt); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->exp_dt); ?>" readonly>
    </td>
    
    <td>
        <input type="text" value="<?php echo e($product->pack_size); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->count_no); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->rec_qty); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->manufacturer); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->supplier); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->grn_no); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->grn_date); ?>" readonly>
    </td>
    <td>
        <input type="text" value="<?php echo e($product->format_no); ?>" readonly>
    </td>
    
    <td style="min-width: 300px;">
        <img style="object-fit: contain; scale: 3;" src="data:image/png;base64,<?php echo e(DNS1D::getBarcodePNG($product->bar_code, 'C39')); ?>">
    </td>
    <td>
        
        <form action="<?php echo e(route('print', $product->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-primary btn-sm">Show Label</button>
        </form>
    </td>
</tr>
<?php /**PATH /home1/vidyamxf/warehouse.vidyagxp.com/resources/views/comps/barcode_row.blade.php ENDPATH**/ ?>