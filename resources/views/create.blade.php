@extends('admin.layouts.app')
@section('panel')
{{--  @section('content')  --}}

<style>
    .image_head {
        display: flex;
        justify-content: space-between; /* Ensures one logo is on each side */
        align-items: center; /* Centers logos vertically */
        width: 100%;
        height: 123px;
    }

    .logo img {
        height: auto; /* Maintain aspect ratio */
    }

    .logo-vidya img {
        width: 220px; /* Adjust width as desired for the Vidya logo */
    }

    .logo-ajio img {
        width: 100px; /* Adjust width as desired for the Ajio logo */
    }

    .head-background{
    background-image: linear-gradient(to right, #9793 0%, #569ea800 100%);
    }
    @media(min-width: 992px) {
        body[data-layout-mode=detached] .footer {
            position: fixed;
            margin: 0 10px; 
        }
        
        
    }

    .button-submit{
        display: flex;
        justify-content: center;
    }
</style>

<script>
  function showLaunchDeviationButton() {
      var batchStatus = document.getElementById("batch_status").value;
      var launchDeviationButton = document.getElementById("launch_deviation_button");

      // Show the Launch Deviation button if "Rejected" is selected for Batch Status, otherwise hide it
      if (batchStatus === "rejected") {
          launchDeviationButton.style.display = "block";
      } else {
          launchDeviationButton.style.display = "none";
      }
  }

  function launchDeviation() {
      // Open the specified link in a new tab for Batch Status
      window.open("https://agio.mydemosoftware.com/", "_blank");
  }

  function showLaunchDeviationButtonForContainer(index) {
      var containerStatus = document.getElementById(`containers_${index}_status`).value;
      var launchDeviationButton = document.getElementById(`launch_deviation_button_container_${index}`);

      // Show the Launch Deviation button if the container status is "Leakage/Damage"
      if (containerStatus === "leakage_damage") {
          launchDeviationButton.style.display = "block";
      } else {
          launchDeviationButton.style.display = "none";
      }
  }

  function launchDeviationForContainer() {
      // Open the specified link in a new tab for Container Status
      window.open("https://agio.mydemosoftware.com/", "_blank");
  }

  function generateContainerFields() {
      var containerNo = document.getElementById('container_no').value;
      var containerFieldsDiv = document.getElementById('container_fields');
      containerFieldsDiv.innerHTML = ''; // Clear any existing container fields

      if (!isNaN(containerNo) && containerNo > 0) {
          for (var i = 0; i < containerNo; i++) {
              var containerField = `
                  <div class="col-12 mb-3">
                      <label for="containers_${i}_number">Container ${i + 1} Number:</label>
                      <input type="text" class="form-control" name="containers[${i}][number]" value="${i + 1}" readonly>
                      <label for="containers_${i}_status">Container ${i + 1} Status:</label>
                      <select class="form-control" name="containers[${i}][status]" id="containers_${i}_status" onchange="showLaunchDeviationButtonForContainer(${i})">
                          <option value="ok">Ok</option>
                          <option value="leakage_damage">Leakage/Damage</option>
                      </select>
                      <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button_container_${i}" style="display: none;" onclick="launchDeviationForContainer()">Launch Deviation</button>
                  </div>
              `;
              containerFieldsDiv.insertAdjacentHTML('beforeend', containerField);
          }
      }
  }

  function calculateTotalWeight() {
      var quantity = document.getElementById('quantity').value;
      var weightPerPackage = document.getElementById('weightPerPackage').value;
      var totalWeight = document.getElementById('totalWeight');
      var unit = document.getElementById('unit').value;

      // Ensure both quantity and weightPerPackage are provided before calculating
      if (quantity && weightPerPackage) {
          var totalWeightValue;
          if (unit === 'kg') {
              totalWeightValue = quantity * weightPerPackage; // Total weight in kilograms
          } else if (unit === 'gm') {
              totalWeightValue = quantity * (weightPerPackage / 1000); // Convert grams to kilograms
          }
          totalWeight.value = totalWeightValue.toFixed(2) + ' kg';
      } else {
          totalWeight.value = ''; // Clear if inputs are incomplete
      }
  }
</script>

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-12 head-background">
            <div class="card px-5 mt-3 shadow">
                <div class="image_head">
                    <div class="logo logo-vidya">
                        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="VidyaGxP Logo" height="22" style="scale:2px;">
                    </div>
                    <h3>Generate Barcode</h3>
                    <div class="logo logo-ajio">
                        {{--  <img src="{{ asset('user/images/ajio-removebg-preview.png') }}" alt="Ajio Logo" style="margin-top: -20px;">  --}}
                    </div>
                </div>
            </div>

            <form action="{{route('store')}}" method="post">
                @csrf
                <div class="col-12">
                    <label for="batch_status">Batch Status:</label>
                    <select class="form-control mb-3" name="batch_status" id="batch_status" required onchange="showLaunchDeviationButton()">
                        <option value="">Select</option>
                        <option value="under_quarantine">Under Quarantine</option>
                        <option value="under_testing">Under Testing</option>
                        <option value="approved">Approved</option>
                        <option value="partially_approved">Partially Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                    <button type="button" class="btn btn-primary mb-3" id="launch_deviation_button" style="display: none;" onclick="launchDeviation()">Launch Deviation</button>
                </div>
                <div class="col-12">
                    <label for="item_code">Item Code :</label>
                    <input type="text" class="form-control mb-3" name="item_code">
                </div>
                <div class="col-12">
                    <label for="item_name">Item Name:</label>
                    <input type="text" class="form-control mb-3" name="item_name">
                </div>
                <div class="col-12">
                    <label for="location_code">Location Code:</label>
                    <input type="text" class="form-control mb-3" name="location_code">
                </div>
                <div class="col-12">
                    <label for="store">Store :</label>
                    <input type="text" class="form-control mb-3" name="store" value="RMS">
                </div>
                <div class="col-12">
                    <label for="grn_batch_id">GRN Batch Id :</label>
                    <input type="text" class="form-control mb-3" name="grn_batch_id">
                </div>
                <div class="col-12">
                    <label for="arn_id">ARN Id :</label>
                    <input type="text" class="form-control mb-3" name="arn_id">
                </div>
                <div class="col-12">
                    <label for="container_no"> Total Container :</label>
                    <input type="number" class="form-control mb-3" name="container_no" id="container_no" oninput="generateContainerFields()">
                </div>
                <div class="col-12" id="container_fields">
                    <!-- Container fields will be dynamically generated here -->
                </div>

                <div class="col-12">
                    <label for="brand_name">Brand Name:</label>
                    <input type="text" class="form-control mb-3" name="brand_name">
                </div>

                <div class="d-flex">
                    <div class="col-6">
                        <label for="quantity_of_product">Quantity of Product</label>
                        <input type="number" id="quantity" class="form-control mb-3" name="quantity_of_product" oninput="calculateTotalWeight()" placeholder="Enter quantity">
                    </div>
                    <div class="col-6">
                        <label for="unit">Unit</label>
                        <select class="form-control mb-3" name="unit" id="unit" onchange="calculateTotalWeight()">
                            <option value="kg">Kilogram (kg)</option>
                            <option value="gm">Gram (gm)</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label for="weightPerPackage">Weight per Package</label>
                    <input type="number" id="weightPerPackage" class="form-control mb-3" name="weightPerPackage" oninput="calculateTotalWeight()" placeholder="Enter weight per package">
                </div>
                <div class="col-12">
                    <label for="totalWeight">Total Weight</label>
                    <input type="text" id="totalWeight" class="form-control mb-3" name="totalWeight" readonly>
                </div>

                <div class="col-12">
                    <label for="item_description">Item Description:</label>
                    <input type="text" class="form-control mb-3" name="item_description">
                </div>

                <div class="col-12">
                    <label for="batch_no">Batch/No:</label>
                    <input type="text" class="form-control mb-3" name="batch_no">
                </div>

                <div class="col-12">
                    <label for="uom_branch">UOM</label>
                    <select name="uom_branch" class="form-control mb-3">
                        <option value="kg">Kilogram (kg)</option>
                        <option value="gm">Gram (gm)</option>
                    </select>
                </div>

                <div class="d-flex">
                    <div class="col-6">
                        <label for="mfg_dt">Mfg.DT.</label>
                        <input type="date" class="form-control" name="mfg_dt" id="start_date_input">
                    </div>
                    <div class="col-6">
                        <label for="exp_dt">Exp.DT</label>
                        <input type="date" class="form-control" name="exp_dt" id="end_date_input">
                    </div>
                </div>

                <div class="col-12">
                    <label for="pack_size">Pack.Size</label>
                    <input type="text" class="form-control mb-3" name="pack_size">
                </div>

                <div class="col-12">
                    <label for="count_no">Container Number</label>
                    <input type="text" class="form-control mb-3" name="count_no">
                </div>

                <div class="col-12">
                    <label for="rec_qty">Rec Qty:</label>
                    <input type="text" class="form-control mb-3" name="rec_qty">
                </div>

                <div class="col-12">
                    <label for="manufacturer">Manufacturer:</label>
                    <input type="text" class="form-control mb-3" name="manufacturer">
                </div>

                <div class="col-12">
                    <label for="supplier">Supplier:</label>
                    <input type="text" class="form-control mb-3" name="supplier">
                </div>

                <div class="col-12">
                    <label for="grn_no">GRN No.:</label>
                    <input type="text" class="form-control mb-3" name="grn_no">
                </div>

                <div class="col-12">
                    <label for="grn_date">GRN Date:</label>
                    <input type="date" class="form-control mb-3" name="grn_date">
                </div>

                <div class="col-12">
                    <label for="format_no">Format No.:</label>
                    <input type="text" class="form-control mb-3" name="format_no">
                </div>

                <button  type="submit" class="btn btn-success col-md-2 button-submit">Submit</button>
                <br>
                <br>
            </form>

            <script>
                document.getElementById('start_date_input').addEventListener('change', function() {
                    var startDate = this.value;
                    var endDateInput = document.getElementById('end_date_input');
                    endDateInput.min = startDate;
                });

                document.getElementById('end_date_input').addEventListener('change', function() {
                    var endDate = this.value;
                    var startDateInput = document.getElementById('start_date_input');
                    if (endDate < startDateInput.value) {
                        startDateInput.max = endDate;
                    }
                });
            </script>
        </div>
    </div>
</div>
@endsection
