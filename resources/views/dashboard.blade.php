@extends('admin.layouts.app')
@section('panel')
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
                                            <a href="{{ route('create') }}" class="btn btn-success">Add</a>
                                            <a href="{{ route('show') }}" class="btn btn-success">Show</a>
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
                                        {{--  <th>Container Status </th>  --}}
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
                                        {{-- <th>Printed By</th> --}}
                                        <th>Bar-Code</th>
                                        <th>Action</th>

                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->batch_status }}</td>
                                <td>{{ $product->item_code }}</td>
                                <td>{{ $product->item_name}}</td>
                                <td>{{ $product->location_code }}</td>
                                <td>{{ $product->store }}</td>
                                <td>{{ $product->grn_batch_id }}</td>
                                <td>{{ $product->arn_id }}</td>
                                <td>{{ $product->container_no }}</td>
                                {{--  <td>{{ $product->container_status }}</td>  --}}
                                <td>{{ $product->brand_name }}</td>
                                <td>{{ $product->unit }}</td>
                                <td>{{ $product->quantity_of_product }}</td>
                                <td>{{ $product->weightPerPackage }}</td>
                                <td>{{ $product->totalWeight }}</td>
                                <td>{{ $product->item_description }}</td>
                                <td>{{ $product->batch_no }}</td>
                                <td>{{ $product->uom_branch }}</td>
                                <td>{{ $product->mfg_dt }}</td>
                                <td>{{ $product->exp_dt }}</td>
                                {{-- <td>{{ $product->no_of_cont }}</td> --}}
                                <td>{{ $product->pack_size }}</td>
                                <td>{{ $product->count_no }}</td>
                                <td>{{ $product->rec_qty }}</td>
                                <td>{{ $product->manufacturer }}</td>
                                <td>{{ $product->supplier }}</td>
                                <td>{{ $product->grn_no }}</td>
                                <td>{{ $product->grn_date }}</td>
                                <td>{{ $product->format_no }}</td>
                                {{-- <td>{{ $product->printed_by }}</td> --}}
                                  <td style="width: 150px; height: 50px;">
                                 {!! DNS1D::getBarcodeHTML($product->bar_code, 'C39') !!}  {{ $product->bar_base
                                    }}

                                </td>


                                <td>
                                    <a href="{{ route('Editshow', $product->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('print', $product->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm">Show Label</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
{{-- end content --}}
@endsection
