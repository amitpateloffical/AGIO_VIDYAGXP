<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Barcode Print</title>
    <link rel="icon" href="<?php echo e(asset('assets\icon\logovidyagxp.png.png')); ?>" type="image/x-icon">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">
        body {
            font-size: small;
            line-height: 1.4;

        }

        p {
            margin: 0;
        }

        .performance-facts {
            font-size: 12px;
            /* border: 1px 1px 0px 1px solid black; */
            /* margin: 30px; */
            float: left;
            width: 100%;
            height: 100%
            ;

            /* padding: 0.5rem; */

            table {
                border-collapse: collapse;
            }
        }

        .performance-facts__title {
            font-weight: bold;
            font-size: 1rem;
            margin: 0 0 0.25rem 0;
        }

        .performance-facts__header {
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
            width: 100%;
            height: 70px;
            padding-bottom: 2px;

            p {
                margin: 0;
            }
        }

        .performance-facts__table {
            width: 100%;




        }


        .performance-facts__table--small {
            @extend .performance-facts__table;
            border-bottom: 1px solid #999;

        }

        .text-center {
            text-align: center;
        }

        .thick-end {
            border-bottom: 10px solid black;
        }

        .thin-end {
            border-bottom: 1px solid black;
        }

        .logo {
            height: 130px;
            width: 130px;
        }

        .logo-img img {
            height: 70px;
            width: 70px;

        }

        .heading-header {
            position: absolute;
            top: 4%;
            left: 22%;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            color: rgb(11, 5, 176)
        }

        .logo-image {
            position: absolute;
            top: 0%;
            left: 78%;
        }

        .border {
            border-bottom: 2px solid;
        }

        /* ----------------fghfgh--------------- */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

         .logo img {
            height: 80px;
            width: auto;
            margin-bottom: -10px;

        }

        .heading {
            flex-grow: 1;
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            margin-bottom: -10px;
        }
        .info,
        .services,
        .total {
            margin-bottom: 20px;
        }

        .info table,
        .services table {
            width: 100%;
            border-collapse: collapse;
        }

        .info table td,
        .services table td {
            padding: 6px;
            border-bottom: 1px solid #5f5c5c;
        }

        .info tr {
            padding-left: 10px;
        }
        .label-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .label-header img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .label-container {
            width: 665px;
            margin: auto;
            padding: 8px; /* Adjust as needed */
            /* padding: 0px !important; */
            /* margin-top: 10px; */
            /* margin-bottom: 40px; */

            background-color: #ffffff;
            page-break-after: always; /* New rule for printing */
        }

        .label-table {
            width: 100%;
            border-collapse: collapse;
        }

        .label-table th,
        .label-table td {
            border: 2px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }
                .label-table th {
            background-color: #fefeff;
        }




@media print {
    .label-container {
        page-break-after: always; /* Ensure it works in print mode */
    }
}

.image_head {
    display: flex;
    margin-bottom: -30px;

    justify-content: space-between;
    align-items: center;
    padding: 10px;
    margin-left: 8px;
}
.logo {
    flex: 0 0 auto; /* Do not grow or shrink */
}

.heading {
    flex-grow: 1;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
}

/* Ensure the logo images are correctly sized and aligned */
.logo img {
    height: 110px; /* Adjust based on your needs */
    width: auto;
    margin-left:15px;
    margin-top: 10px;
}
.logoV img {
    height: 50px; /* Adjust based on your needs */
    width: 130px;
    margin-left:15px;
}
#custom-padding{
    padding:none;
    /* flex-shrink: 2; */
}
    </style>
</head>

<body>


    <section class="performance-facts">
            <div class="label-container">
           <button onclick="printLabel()" class="btn btn-primary" id="printButton">Print</button>

            <script>
                            function printLabel() {
                                window.print();
                            }

                            // Add a media query for print to hide the print button
                            window.onbeforeprint = function() {
                                document.getElementById('printButton').style.display = 'none';
                            };
                            window.onafterprint = function() {
                                document.getElementById('printButton').style.display = 'block';
                            };
            </script>

        <style>
@media print {
    #printButton {
        display: none;
    }
}
</style>


    <section class="performance-facts">
          <div class="label-container">
                <?php $__currentLoopData = $product->containers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $container): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

                <div class="label-container">

                    <table class="label-table">
                        <tr>
                            
                            <td colspan="2" > <div class="heading">
                    Warehouse and Labeling Management
                    </div> </td>
                            <td  colspan="1"> <div class="logoV">
                                <img src="/assets/barcode/New_vidyaGxp_logo.png" alt="Other Logo">
                            </div> </td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Id :&nbsp;</strong> <?php echo e($product->id); ?></td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Batch Status :&nbsp;<strong>  <?php echo e($product->batch_status); ?> </td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Item Code :&nbsp;</strong><?php echo e($product->item_code); ?></td>
                            <td colspan="2"><strong>Item Name :&nbsp;</strong> <?php echo e($product->item_name); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Location Code :&nbsp;</strong><?php echo e($product->location_code); ?></td>
                            <td colspan="2"><strong>Store :&nbsp;</strong> <?php echo e($product->store); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>GRN Batch Id :&nbsp;</strong> <?php echo e($product->grn_batch_id); ?></td>
                            <td colspan="2"><strong>ARN Id :&nbsp;</strong> <?php echo e($product->arn_id); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Total Container :&nbsp;</strong><?php echo e($product->container_no); ?></td>
                            <td colspan="2"><strong>Container Status :&nbsp;</strong><?php echo e($container->status); ?></td>
                        </tr>

                        <tr>
                            
                            
                            <td colspan="2"><strong>weight Per Package :&nbsp;</strong><?php echo e($product->weightPerPackage); ?></td>

                            <td colspan="2"><strong>Quantity of Product :&nbsp;</strong><?php echo e($product->quantity_of_product); ?></td>
                        </tr>
                        <tr>
                        <td  colspan="2"><strong>Unit :&nbsp;</strong><?php echo e($product->unit); ?></td>

                            <td colspan="2"><strong>Total Weight :&nbsp;</strong> <?php echo e($product->totalWeight); ?></td>
                        </tr>

                        <tr>
                            <td colspan="4"><strong>Brand Name :&nbsp;</strong><?php echo e($product->brand_name); ?></td>

                        </tr>

                        <tr>
                            <td colspan="4"><strong>Manufacturer :&nbsp;</strong> <?php echo e($product->manufacturer); ?></td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Supplier :&nbsp;</strong><?php echo e($product->supplier); ?></td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Description :&nbsp;</strong><?php echo e($product->item_description); ?></td>
                        </tr>

                        <tr>
                            <td colspan="2"><strong>Batch/No :&nbsp;</strong> <?php echo e($product->batch_no); ?></td>
                            <td colspan="2"><strong>UOM :&nbsp;</strong><?php echo e($product->unit); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Mfg.DT. :&nbsp;</strong><?php echo e($product->mfg_dt); ?></td>
                            <td colspan="2"><strong>Exp.DT. :&nbsp;</strong><?php echo e($product->exp_dt); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Container no :&nbsp;</strong><?php echo e($loop->index + 1); ?> /<?php echo e($product->container_no); ?></td>
                            <td colspan="2"><strong>Pack. Size :&nbsp;</strong><?php echo e($product->pack_size); ?></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2"><strong>GRN No :&nbsp;</strong><?php echo e($product->grn_no); ?></td>
                            <td colspan="2"><strong>GRN Date :&nbsp;</strong> <?php echo e($product->grn_date); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Format No :&nbsp;</strong><?php echo e($product->format_no); ?> </td>
                            <td colspan="2"><strong>Rec Qty :&nbsp;</strong><?php echo e($product->rec_qty); ?></td>
                        </tr>

                        <tr>
                                <td colspan="4" style="width: 150px; height: 50px;">
                                <strong>Barcode :&nbsp;</strong>
                                <img src="data:image/png;base64,<?php echo e(DNS1D::getBarcodePNG($product->bar_code, 'C39')); ?>" alt="barcode"/>
                        </td>

                        </tr>
                    </table>
                    <br>
                    <br>
                </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
</body>

</html>
<?php /**PATH /home1/vidyamxf/warehouse.vidyagxp.com/resources/views/print.blade.php ENDPATH**/ ?>