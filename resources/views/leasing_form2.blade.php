@extends('layouts.master')

@section('content')

<div class="container py-5">
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
	<div class="row">
		<div class="col-md-12 text-center font-weight-bold">
			<h1>Leasing Form</h1>
		</div>
	</div>

  	<div class="container mt-3 border border-secondary p-5">
	  	<form action="{{ route('save_form2')}}" method="post">
	  		@csrf
	        <div class="col-md-12">
	            <h4 class="my-2 mt-5">Part A:</h4>
	            <div class="input-group my-3">
	                <label class="mt-2 fs-5 mb-2">Address of the Property</label>
	                <textarea type="text" cols="2" class="form-control mx-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Property_address"></textarea>
	            </div>
	        </div>
	        <div class="col-md-12 mt-5">
	            <h4 class="my-2">Part B:</h4>
	            <h5 class="my-3">Prescribed information of the Property:-</h5>
	            <h5 class="my-2">1. Particulars of current ownership and subsisting encumbrances registered in the Land Registry:</h5>
	            <label class="mt-2 fs-5 mb-2">Name(s) of owner(s):</label>
	            <input type="text" class="form-control mx-3" aria-label="Sizing example input"
	                        aria-describedby="inputGroup-sizing-default" name="Owner_name">
	            <h6 class="my-2 fs-5">Subsisting encumbrances :</h6>
	            <label class="my-2 ps-4 fs-5">(a) possession orders:</label>
	            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
	                <input type="radio" class="btn-check" name="possession_orders" id="btnradio1" autocomplete="off" value="yes" checked>
	                <label class="btn btn-outline-primary"  for="btnradio1">Yes </label>

	                <input type="radio" class="btn-check" name="possession_orders" id="btnradio2" autocomplete="off" value="no">
	                <label class="btn btn-outline-primary" for="btnradio2">No</label>
	            </div>
	            <label class="my-2 ps-4 fs-5">(b) Mortgage or charge:</label>
	            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
	                <input type="radio" class="btn-check" value="yes" name="Mortgage_charge" id="btnradio12" autocomplete="off"
	                    checked>
	                <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
	                <input type="radio" class="btn-check" value="no" name="Mortgage_charge" id="btnradio22"
	                    autocomplete="off">
	                <label class="btn btn-outline-primary" for="btnradio22">No</label>
	            </div>

	            <div class="col-md-12 my-5">
	                <h5 class="my-2">2. Floor area of the Property:</h5>
	                <div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
	                    <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off"value ="1" name="area_Property1">
	                    <label class="btn btn-outline-primary me-3" for="btncheck19">(a) Saleable area provided by the Rating and Valuation Department:</label>
	                    <input type="checkbox" class="btn-check" id="btncheck28" autocomplete="off" value ="1" name="area_Property2">
	                    <label class="btn btn-outline-primary mx-3" for="btncheck28">(b) Saleable area stipulated in the agreement for sale and purchase of the first assignment</label>
	                    <input type="checkbox" class="btn-check" id="btncheck34" autocomplete="off" value ="1" name="area_Property3">
	                    <label class="btn btn-outline-primary mx-3" for="btncheck34">(c) No information can be obtained under paragraph (a) or (b).</label>
	                 </div>
	            </div>
	            <div class="col-md-12">
	                <h5 class="my-2">3. Year of completion:</h5>
	                <label class="mt-2 fs-5 mb-2">Year of completion of the Property (or the building of which the Property forms part).</label>
	                <input type="text" class="form-control" name="completion_year" id="btnradio14" autocomplete="off">
	            </div>
	            <div class="col-md-12 my-5">
	                <h5 class="my-2">4. User restrictions.</h5>
	                <label class="mt-2 fs-5 mb-2">User under the occupation permit.</label>
	                <input type="text" class="form-control" name="restrictions_User " id="btnradio14" autocomplete="off">
	            </div>
	            <div class="col-md-12">
	                <h5 class="my-2">5. Restrictions on leasing:</h5>
	                <label class="mt-2 fs-5 mb-2">User under the occupation permit.</label>
	                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
	                    <input type="radio" class="btn-check" value="yes" name="leasing_Restrictions" id="btnradio14" autocomplete="off" checked>
	                    <label class="btn btn-outline-primary" for="btnradio14">Yes</label>

	                    <input type="radio" class="btn-check" value="no" name="leasing_Restrictions" id="btnradio32" autocomplete="off">
	                    <label class="btn btn-outline-primary" for="btnradio32">No</label>
	                </div>
	            </div>

	            <div class="col-md-12 mt-5">
	                <h4 class="my-2">Part C:</h4>
	                <div class="input-group my-3">
	                    <label class="mt-2 fs-5">1.The annual Government rent:</label>
	                    <input type="text" class="form-control mx-3" aria-label="Sizing example input"
	                        aria-describedby="inputGroup-sizing-default" name="annual_gov_rent">
	                </div>

	                <div class="input-group my-3">
	                    <label class="mt-2 fs-5">2. The quarterly rates:</label>
	                    <input type="text" class="form-control mx-3" aria-label="Sizing example input"
	                        aria-describedby="inputGroup-sizing-default" name="quarterly_rates">
	                </div>

	                <div class="input-group my-3">
	                    <label class="mt-2 fs-5">3. The monthly management fee: </label>
	                    <input type="text" class="form-control mx-3" aria-label="Sizing example input"
	                        aria-describedby="inputGroup-sizing-default"
							name="management_fee">
	                </div>

	                <div>
		                <label class="mt-2 fs-5">4.	The Property is to be sublet and is presently
		                    subject to a lease:
		                </label>
		                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
		                    <input type="radio" class="btn-check" value="yes" name="subject_to_lease" id="btnradio4" autocomplete="off"
		                        checked>
		                    <label class="btn btn-outline-primary" for="btnradio4">Yes</label>

		                    <input type="radio" class="btn-check" value="no" name="subject_to_lease" id="btnradio3" autocomplete="off">
		                    <label class="btn btn-outline-primary" for="btnradio3">No</label>
		                </div>
		                <label for="floatingTextarea " class="my-3">If “yes”, please provide
		                    particulars:</label>
		                <textarea class="form-control mb-5" id="floatingTextarea" name="subject_to_lease_if_yes"></textarea>
		            </div>
	        	</div>
	        </div>
        <div class=" pt-5"><button type="submit" class="btn btn-primary">Submit</button></div>
	    </form>
	</div>
</div>
@endsection