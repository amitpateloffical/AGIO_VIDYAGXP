<?php $__env->startSection('panel'); ?>
<style>
     table th {
            background-color: #f8f9fa;
            color: #000; /* Set the color to black */
            font-size: 14px;
            text-align: center; /* Change the font size */
        }
        table td{
        color: #000;
        }
        .pb-2{
            block-size:50px;
        }

.table_responsive{
            /* background: linear-gradient(to right, #38658d, #feffff); Add gradient background */
            padding: 20px;
            border-radius: 5px;
            background-image: linear-gradient(to right, #9793 0%, #569ea800 100%);

}

  /* @media(min-width: 992px) {
    body[data-layout-mode=detached] .footer {
        position: fixed;
         margin: 0 10px; 
    }
    
    
}  */

.left-side-menu{
    width: 260px !important;
    background: #fff;
    bottom: 0;
    padding: 35px 0;
    position: fixed;
    transition: all .1s ease-out;
    top: 70px;
    box-shadow: 0 0 35px 0 rgba(154, 161, 171, .15);
}

#sidebar-menu>ul>li>a {
    color: #6e768e;
    display: block;
    padding: 12px 20px;
    position: relative;
    transition: all .4s;
    font-family: "Cerebri Sans,sans-serif";
    font-size: 0.8rem !important;
}
.heading-dashboard{
    display: flex;
    justify-content: space-between;

}

    </style>
<div class="container-fluid">
                        <div class="row">
                            <div class="col-12 heading-dashboard">
                                <div class="page-title-box">
                                    <h4 class="page-title font-weight-bold   ">DASHBOARD</h4>
                                </div>
<div class="page-title-box">
<h3 class="text-primary pt-1 font-weight-bold text-center mb-4">Generate Label</h3>

</div>
                            </div>
                        </div>
                          <!-- end page title -->

                                    <div class="table_responsive" style="width: 100%; overflow-x: auto;">

                                        <h3 class=" text-left mb-3"><b>List of Products</b></h3>
                                        <hr>
                                        <div class="pb-2">
                                            <a href="<?php echo e(route('create')); ?>" class="btn btn-success">Add</a>
                                            <a href="<?php echo e(route('show')); ?>" class="btn btn-success">Show</a>
                                        </div>
                                        <div class="main_class">
                                          <div class="table_responsive" style="width: 100%; overflow-x: auto;">
                                    <table class="table ">
                                  <thead>
                                <tr>
                                        <th>Id</th>
                                        <th>Batch Status</th>
                                        <th>Item Code :</th>
                                        <th>Item Name:</th>
                                        <th>Location Code:</th>
                                        <th>Store :</th>
                                        <th>Grn Batch Id </th>
                                        <th>Arn Id :</th>
                                        <th>Total Container</th>
                                        
                                        <th>Brand Name</th>
                                        <th>Unit:</th>
                                        <th>Quantity of Product:</th>
                                        <th>Weight Per Package</th>
                                        <th>Total Weight</th>
                                        <th>Item Description</th>
                                        <th>Batch/No:</th>
                                        <th>UOM</th>
                                        <th>Mfg.DT.</th>
                                        <th>Exp.DT</th>

                                        <th>Pack. Size</th>
                                        <th>Container. No.</th>
                                        <th>Rec Qty:</th>
                                        <th>Manufacturer:</th>
                                        <th>Supplier:</th>
                                        <th>GRN No.:</th>
                                        <th>GRN Date:</th>
                                        <th>Format No.:</th>
                                        
                                        <th>Bar-Code</th>
                                        <th>Action</th>

                                </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->id); ?></td>
                                <td><?php echo e($product->batch_status); ?></td>
                                <td><?php echo e($product->item_code); ?></td>
                                <td><?php echo e($product->item_name); ?></td>
                                <td><?php echo e($product->location_code); ?></td>
                                <td><?php echo e($product->store); ?></td>
                                <td><?php echo e($product->grn_batch_id); ?></td>
                                <td><?php echo e($product->arn_id); ?></td>
                                <td><?php echo e($product->container_no); ?></td>
                                
                                <td><?php echo e($product->brand_name); ?></td>
                                <td><?php echo e($product->unit); ?></td>
                                <td><?php echo e($product->quantity_of_product); ?></td>
                                <td><?php echo e($product->weightPerPackage); ?></td>
                                <td><?php echo e($product->totalWeight); ?></td>
                                <td><?php echo e($product->item_description); ?></td>
                                <td><?php echo e($product->batch_no); ?></td>
                                <td><?php echo e($product->uom_branch); ?></td>
                                <td><?php echo e($product->mfg_dt); ?></td>
                                <td><?php echo e($product->exp_dt); ?></td>
                                
                                <td><?php echo e($product->pack_size); ?></td>
                                <td><?php echo e($product->count_no); ?></td>
                                <td><?php echo e($product->rec_qty); ?></td>
                                <td><?php echo e($product->manufacturer); ?></td>
                                <td><?php echo e($product->supplier); ?></td>
                                <td><?php echo e($product->grn_no); ?></td>
                                <td><?php echo e($product->grn_date); ?></td>
                                <td><?php echo e($product->format_no); ?></td>
                                
                                  <td style="width: 150px; height: 50px;">
                                 <?php echo DNS1D::getBarcodeHTML($product->bar_code, 'C39'); ?>  <?php echo e($product->bar_base); ?>


                                </td>


                                <td>
                                    <a href="<?php echo e(route('Editshow', $product->id)); ?>" class="btn btn-warning">Edit</a>
                                    <form action="<?php echo e(route('print', $product->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-primary btn-sm">Show Label</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AGIO_VIDYAGXP_WAREHOUSE/resources/views/dashboard.blade.php ENDPATH**/ ?>