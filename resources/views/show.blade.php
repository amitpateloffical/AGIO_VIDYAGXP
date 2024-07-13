@extends('admin.layouts.app')
@section('panel')
<style>
    header {
        background-color: #ffffff;
        padding: 10px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo-img img {
        width: 80px; /* Adjust as needed */
    }

    .heading-header {
        font-weight: bold;
        font-size: 25px;
        background: linear-gradient(0deg, #ffa745,  #3482f7 85%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        flex-grow: 1;
        text-align: center;
    }

    .table_responsive {
        width: 100%;
        height: 100%;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

     td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    .div-color {
        background-color: #e5fbb2;
        min-height: 100vh;
    }
    .rows{
        color:black;

    }
    .background-color{
         background-image: linear-gradient(to right, #9793 0%, #569ea800 100%);
    }



    

</style>

<header>
    <div class="logo-img">
        {{--  <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="Agio Logo" >  --}}
    </div>
    <div class="heading-header">
        Warehouse and Labeling Management
    </div>
    <div class="logo-img">
        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="VidyaGxP Logo" style="scale: 2; margin-right: 24px;" >
    </div>
</header>

<div class="container-fluid background-color">
    <h2 class=" pt-4 text-center mb-4">Show Barcode</h2>
    <div class="row">

        <div class="p-2 d-flex justify-content-between w-100">
            <div class="right-name">
                <h3>List of Products</h3>
            </div>
            <div class="input-field">
                <div class="text-black fw-bold">Enter Barcode No.</div>
                <input style="padding: 5px; margin-right: 17px;" type="text" name="qr_scanner" id="QrScanner" />
            </div>
        </div>

        <div class="table_responsive" style="height: 400px;">
            <table class="table table-hover">
                <thead>
                    <tr class="rows">
                        <th>Id</th>
                        <th>Batch Status:</th>
                        <th>Item Code :</th>
                        <th>Item Name:</th>
                        <th>Location Code:</th>
                        <th>Store :</th>
                        <th>GRN Batch Id :</th>
                        <th>ARN Id :</th>
                        <th>Total Container :</th>
                         {{--  <th>Container Status:</th>   --}}
                        <th>Brand Name:</th>
                        <th>Unit:</th>
                        <th>Quantity of Product:</th>
                        <th>Weight Per Package</th>
                        <th>Total Weight</th>
                        <th>Item Description:</th>
                        <th>Batch/No:</th>
                        <th>UOM</th>
                        <th>Mfg.DT.</th>
                        <th>Exp.DT</th>
                        <th>Pack. Size</th>
                        <th>Container No.</th>
                        <th>Rec Qty:</th>
                        <th>Manufacturer:</th>
                        <th>Supplier:</th>
                        <th>GRN No.:</th>
                        <th>GRN Date:</th>
                        <th>Format No.:</th>
                        <th style="min-width: 300px">Bar-Code</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="productList">
                    <!-- Data rows will be added here dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
<script>
    $(document).ready(function() {
        $('#QrScanner').change(async function() {
            let barCode = $(this).val();
            $(this).attr('disabled', true);

            const data = { barCode: barCode };

            try {
                console.log(data);
                const res = await axios.post("{{ url('/api/product/barcode') }}", data);
                if (res.data.status === 'ok') {
                    $('#productList').append(res.data.body);
                }
            } catch (err) {
                alert(err.message);
                console.log('error', err.message);
            }

            $(this).attr('disabled', false);
            $(this).val('');
        });
    });
</script>
@endsection
