<?php $__env->startSection('panel'); ?>
<style>
.image_head {
     display: flex;
    justify-content: space-between; /* Ensures one logo is on each side */
    align-items: center; /* Centers logos vertically */
    width: 100%;
}

.logo img {
    height: auto; /* Maintain aspect ratio */
}

.logo-vidya img {
    width: 220px; /* Adjust width as desired for the Vidya logo */
}

.logo-ajio img {
    width: 100px; /* Adjust width as desired for the Ajio logo */
    margin-top: -20px; /* Adjustment for alignment */
}

</style>

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card px-5 mt-3 shadow">
                <div class="image_head">
                    <div class="logo logo-vidya">
                        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="VidyaGxP Logo">
                    </div>
                    <div class="logo logo-ajio">
                        
                    </div>
                </div>
                <form action="<?php echo e(route('update', $data->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12">
                            <label for="batch_status">Batch Status:</label>
                            <select class="form-control mb-3" name="batch_status" id="batch_status"  onchange="showLaunchDeviationButton()">
                                <option value="0" <?php echo e($data->batch_status === '0' ? 'selected' : ''); ?>>Select</option>
                                <option value="under_quarantine" <?php echo e($data->batch_status === 'under_quarantine' ? 'selected' : ''); ?>>Under Quarantine</option>
                                <option value="under_testing" <?php echo e($data->batch_status === 'under_testing' ? 'selected' : ''); ?>>Under Testing</option>
                                <option value="approved" <?php echo e($data->batch_status === 'approved' ? 'selected' : ''); ?>>Approved</option>
                                <option value="partially_approved" <?php echo e($data->batch_status === 'partially_approved' ? 'selected' : ''); ?>>Partially Approved</option>
                                <option value="rejected" <?php echo e($data->batch_status === 'rejected' ? 'selected' : ''); ?>>Rejected</option>
                            </select>
                            <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button" style="display: none;" onclick="launchDeviation()">Launch Deviation</button>
                        </div>
                        <div class="col-12">
                            <label for="">Item Code :</label>
                            <input type="text" class="form-control mb-3" value="<?php echo e($data->item_code); ?>" name="item_code">
                        </div>
                        <div class="col-12">
                            <label for="item_name">Item Name:</label>
                            <input type="text" class="form-control mb-3" value="<?php echo e($data->item_name); ?>" name="item_name">
                        </div>
                        <div class="col-12">
                            <label for="location_code">Location Code:</label>
                            <input type="text" class="form-control mb-3" name="location_code" value="<?php echo e($data->location_code); ?>">
                        </div>
                        <div class="col-12">
                            <label for="store">Store :</label>
                            <input type="text" class="form-control mb-3" name="store" value="<?php echo e($data->store); ?>">
                        </div>
                        <div class="col-12">
                            <label for="grn_batch_id">Grn Batch Id :</label>
                            <input type="text" class="form-control mb-3" name="grn_batch_id" value="<?php echo e($data->grn_batch_id); ?>">
                        </div>
                        <div class="col-12">
                            <label for="arn_id">ARN Id :</label>
                            <input type="text" class="form-control mb-3" name="arn_id" value="<?php echo e($data->arn_id); ?>">
                        </div>
                        <div class="col-12">
                            <label for="container_no">Total Container :</label>
                            <input type="text" class="form-control mb-3" name="container_no" value="<?php echo e($data->container_no); ?>" readonly>
                        </div>

                        <div class="col-12">
                                <label for="">Total Containers:</label>
                                <?php if($data->containers): ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Container Number</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                              <?php $__currentLoopData = $data->containers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $container): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                              <tr>
                                                    
                                                   <td> Container: <?php echo e($container->number); ?></td>
                                                    <td><?php echo e($container->status); ?></td>
                                                    <td>
                                                        <?php if($container->status == 'leakage_damage'): ?>
                                                            <a href="<?php echo e(route('update_container_status', $container->id)); ?>" class="btn btn-success">Mark as Ok</a>
                                                        <?php elseif($container->status == 'ok'): ?>
                                                            <a href="<?php echo e(route('update_container_status', $container->id)); ?>" class="btn btn-danger">Mark as Damage</a>
                                                        <?php endif; ?>
                                                    </td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                            </div>

                            <br>

                        <div class="col-12">
                        <label for="brand_name">Brand Name:</label>
                        <input type="text" class="form-control mb-3" name="brand_name" value="<?php echo e($data->brand_name); ?>">
                        </div>

                        <div class="col-12">
                        <label for="quantity_of_product">Quantity of Product</label>
                        <input type="text" id="quantity" class="form-control mb-3" name="quantity_of_product" value="<?php echo e($data->quantity_of_product); ?>" oninput="calculateTotalWeight()" placeholder="Enter quantity" >
                        </div>
                        <div class="col-12">
                        <label for="unit">Unit</label>
                        <select class="form-control mb-3" name="unit" id="unit" required onchange="calculateTotalTime()">
                            <option value="kg" <?php echo e($data->unit === 'kg' ? 'selected' : ''); ?>>Kilogram (kg)</option>
                            <option value="gm" <?php echo e($data->unit === 'gm' ? 'selected' : ''); ?>>Gram (gm)</option>
                        </select>
                        </div>
                        <div class="col-12">
                        <label for="weightPerPackage">Weight per Package</label>
                        <input type="text" id="weightPerPackage" class="form-control mb-3" name="weightPerPackage" value="<?php echo e($data->weightPerPackage); ?>" oninput="calculateTotalWeight()" placeholder="Enter weight per package">
                    </div>
                    <div class="col-12">
                        <label for="totalWeight">Total Weight</label>
                        <input type="text" id="totalWeight" class="form-control mb-3" name="totalWeight" value="<?php echo e($data->totalWeight); ?>" oninput="calculateTotalWeight()" placeholder="Enter weight per package" >
                        </div>
                    <div class="col-12">
                        <label for="Item_Description">Item Description:</label>
                        <input type="text" class="form-control mb-3" name="item_description" value="<?php echo e($data->item_description); ?>" >
                        <div>
                    <div class="col-12">
                        <label for="batch_no">Batch/No:</label>
                        <input type="text" class="form-control mb-3" name="batch_no" value="<?php echo e($data->batch_no); ?>">
                    </div>
                    <div class="col-12">
                    <label for="uom_branch">UOM</label>
                    
                    <select class="form-control mb-3" name="uom_branch" id="unit">
                        <option value="kg" <?php echo e($data->unit === 'kg' ? 'selected' : ''); ?>>Kilogram (kg)</option>
                        <option value="gm" <?php echo e($data->unit === 'gm' ? 'selected' : ''); ?>>Gram (gm)</option>
                    </select>
                    </div>

                      <div class="col-12">
                    <label for="Mfg_dt">Mfg.DT.</label>
                    <input type="date" class="form-control mb-3" name="mfg_dt" value="<?php echo e($data->mfg_dt); ?>"  id="start_date_input">

                    </div>

                        <div class="col-12">
                        <label for="exp_dt">Exp.DT</label>
                        <input type="date" class="form-control mb-3" name="exp_dt" value="<?php echo e($data->exp_dt); ?>" id="end_date_input">
                        </div>

                        <script>
                                document.getElementById('start_date_input').addEventListener('change', function() {
                                    var startDate = this.value;
                                    var endDateInput = document.getElementById('end_date_input');
                                    endDateInput.min = startDate; // Set the minimum date of the end date input to the start date
                                });

                                document.getElementById('end_date_input').addEventListener('change', function() {
                                    var endDate = this.value;
                                    var startDateInput = document.getElementById('start_date_input');
                                    if (endDate < startDateInput.value) {
                                        startDateInput.max = endDate; // Optional: Restrict the start date max to the end date
                                    }
                                });
                            </script>


                        <div class="col-12">
                        <label for="pack_size">Pack.Size</label>
                        <input type="text" class="form-control mb-3" name="pack_size" value="<?php echo e($data->pack_size); ?>">
                        </div>
                        <div class="col-12">
                        <label for="count_no">Container Number</label>
                        <input type="text" class="form-control mb-3" name="count_no" value="<?php echo e($data->count_no); ?>">
                        </div>


                         <div class="col-12">
                        <label for="rec_qty">Rec Qty:</label>
                        <input type="text" class="form-control mb-3" name="rec_qty" value="<?php echo e($data->rec_qty); ?>">
                        </div>
                        <div class="col-12">
                        <label for="manufacturer">Manufacturer:</label>
                        <input type="text" class="form-control mb-3" name="manufacturer" value="<?php echo e($data->manufacturer); ?>">
                        </div>
                        <div class="col-12">
                        <label for="supplier">Supplier:</label>
                        <input type="text" class="form-control mb-3" name="supplier" value="<?php echo e($data->supplier); ?>">
                        </div>
                        <div class="col-12">
                        <label for="grn_no">GRN No.:</label>
                        <input type="text" class="form-control mb-3" name="grn_no" value="<?php echo e($data->grn_no); ?>">
                        </div>
                        <div class="col-12">
                        <label for="grn_date">GRN Date:</label>
                        <input type="date" class="form-control mb-3" name="grn_date" value="<?php echo e($data->grn_date); ?>">
                        </div>
                        <div class="col-12">
                        <label for="format_no">Format No.:</label>
                        <input type="text" class="form-control mb-3" name="format_no" value="<?php echo e($data->format_no); ?>">
                        </div>
                        

                            





                        <script>
                            function calculateTotalWeight() {
                                var quantity = document.getElementById('quantity').value;
                                var unit = document.getElementById('unit').value;
                                var weightPerPackage = document.getElementById('weightPerPackage').value;
                                var totalWeight = 0;

                                // Ensure both quantity and weightPerPackage are provided before calculating
                                if (quantity && weightPerPackage) {
                                    if (unit === 'kg') {
                                        totalWeight = quantity * weightPerPackage; // Total weight in kilograms
                                    } else if (unit === 'gm') {
                                        totalWeight = quantity * (weightPerPackage / 1000); // Convert grams to kilograms
                                    }
                                    document.getElementById('totalWeight').value = totalWeight + ' kg';
                                } else {
                                    document.getElementById('totalWeight').value = ''; // Clear if inputs are incomplete
                                }
                            }
                        </script>


                       

                            <button type="submit" class="btn btn-success col-md-3">Update</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/vidyamxf/warehouse.vidyagxp.com/resources/views/editshow.blade.php ENDPATH**/ ?>