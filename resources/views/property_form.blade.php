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
			<h1>Property Form</h1>
		</div>
	</div>

  <div class="container mt-3 border border-secondary p-5">
  	<form action="{{ route('save_form')}}" method="POST">
      <h4>PartA: Property information.</h4>
      <div class="my-3">
        <label class="fs-5" for="address_property">Address of the property:</label>
        <textarea class="form-control" rows="5" id="address_property" name="address_property"></textarea>
      </div>
      <div class="mt-3">
        <h4>Part B: Prescribed information of the Property</h4>
      </div>
      <div class="my-3">
        <h5>1.Particulars of current ownership and subsisting encumbrances registered in the Land Registry:</h5>
      </div>
      <div class="my-3 fs-5">
        <label for="ownerName">Name of owners:</label>
        <input type="text" class="form-control" id="ownerName" placeholder="Enter name" name="ownerName">
      </div>
      <h6 class="my-2 fs-5">Subsisting encumbrances :</h6>
      <div>
        <label class="my-2 ps-4 fs-5">(a)court orders:</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" value="yes" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Yes </label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="no" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">No</label>
        </div>
      </div>
      <div>
        <label class="my-2 ps-4 fs-5">(b)building orders:</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off"
                checked>
            <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio22">No</label>
        </div>
      </div>
      <div>
        <label class="my-2 ps-4 fs-5">(c)slope maintenance orders:</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off"
                checked>
            <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio22">No</label>
        </div>
      </div>
      <div>
        <label class="my-2 ps-4 fs-5">(d)lease:</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off"
                checked>
            <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio22">No</label>
        </div>
      </div>
      <div>
        <label class="my-2 ps-4 fs-5">(e)mortgage or charge:</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off"
                checked>
            <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
            <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio22">No</label>
        </div>
      </div>
      <div class="my-3">
        <h6 class="fs-5">4.User restrictions:</h6>
      </div>
      <div class="my-3">
        <label class="fs-5" for="name">User under the occupation permit:</label>
        <input type="name" class="form-control" id="name" placeholder="A/C" name="name">
      </div>
      <div class="my-3">
        <h6 class="fs-5">5.Government lease:</h6>
      </div>
       <div class="my-3">
        <label class="fs-5" for="name">(a) unexpired term of the lease:</label>
        <input type="name" class="form-control" id="name"  name="name">
      </div>

      <label class="my-2 fs-5">(b)right of renewal:</label>
      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="right_of_renewal" id="right_of_renewal1" autocomplete="off" value="yes" checked>
          <label class="btn btn-outline-primary" for="right_of_renewal1">Yes </label>

          <input type="radio" class="btn-check" name="right_of_renewal" id="right_of_renewal2" value="no" autocomplete="off">
          <label class="btn btn-outline-primary" for="right_of_renewal2">No</label>
      </div>
      <div class="my-3">
        <h4>Part C: Other information about the Property which may be provided</h4>
      </div>
      <div class="my-3">
        <label class="fs-5" for="annual_rent">1.The annual Government rent:</label>
        <input type="text" class="form-control" id="annual_rent" placeholder="HK$" name="annual_rent">
        <label class="fs-5" for="quarterly_rate">2.The quarterly rates:</label>
        <input type="text" class="form-control" id="quarterly_rate" placeholder="HK$" name="quarterly_rate">
        <label class="fs-5" for="monthly_fees">3.The monthly management fee:</label>
        <input type="text" class="form-control" id="monthly_fees" placeholder="HK$" name="monthly_fees">
        <label class="my-2 fs-5">4.Owners incorporation established:</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="right_of_renewal" id="right_of_renewal1" autocomplete="off" value="yes" checked>
            <label class="btn btn-outline-primary" for="right_of_renewal1">Yes </label>

            <input type="radio" class="btn-check" name="right_of_renewal" id="right_of_renewal2" value="no" autocomplete="off">
            <label class="btn btn-outline-primary" for="right_of_renewal2">No</label>
        </div>
      </div>

      <label class="fs-5" for="floor_area_info">5.The floor area and source of information are:</label>
      <input type="text" class="form-control" id="floor_area_info"  name="floor_area_info">

      <h4 class="text-center mt-3">PART2</h4>
      <h5 class="text-center mt-3">VENDOR’S STATEMENT</h5>
      <div class="py-2">
	      <label for="floor_area_info">1. Are there any structural additions to or alterations of any part of the Property or the building of which the Property forms part, which have been or are or shall be made by the Vendor or any other person, during the period of the Vendor’s ownership of the Property?</label>
	      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off" checked>
	        <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
	        <label class="btn btn-outline-primary" for="btnradio22">No</label>
	      </div>
      </div>
      <div class="py-2">
	      <label for="floor_area_info">2.Are there any structural additions to or alterations of any part of the Property or the building of which the Property forms part, which have been made by any person, before the period of the Vendor’s ownership of the Property?</label>
	      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off" checked>
	        <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
	        <label class="btn btn-outline-primary" for="btnradio22">No</label>
	      </div><br>
	      <label for="text">If “yes”, please provide particulars:</label>
	      <input type="text" id="text" name="text">
	    </div>
	    <div class="py-2">
	      <label for="floor_area_info">3.Are there any reinstatements, rectification, repairs or improvements to any part of the Property or the building of which the Property forms part, which have been or are or shall be required by the Government or the management office or the owners incorporation of the building, during the period of the Vendor’s ownership of the Property?</label>
	      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off" checked>
	        <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
	        <label class="btn btn-outline-primary" for="btnradio22">No</label>
	      </div><br>
	      <label for="text">If “yes”, please provide particulars:</label>
	      <input type="text" id="text" name="text">
	    </div>
	    <div class="py-2">
	      <label for="floor_area_info">4.Are there any reinstatements, rectification, repairs or improvements to any part of the Property or the building of which the Property forms part, which have been required by the Government or the management office or the owners incorporation of the building, before the period of the Vendor’s ownership of the Property?</label>
	      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio12" value="yes" autocomplete="off" checked>
	        <label class="btn btn-outline-primary" for="btnradio12">Yes </label>
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="no" autocomplete="off">
	        <label class="btn btn-outline-primary" for="btnradio22">No</label>
	        <input type="radio" class="btn-check" name="btnradio" id="btnradio22" value="none" autocomplete="off">
	        <label class="btn btn-outline-primary" for="btnradio22">Not Known</label>
	      </div><br>
	      <label for="text">If “yes”, please provide particulars:</label>
	      <input type="text" id="text" name="text">
	    </div>
	    <div class="py-2">
	      <label for="floor_area_info">5.Are there any of the following works, the cost of which a purchaser of the Property shall be wholly or partly liable, which have been or are or shall be required or proposed by the Government or the management office or the owners incorporation of the building of which the Property forms part as regards any part of the Property or the building?</label>
	      <div class="form-check">
	        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
	        <label class="form-check-label" for="radio1">reinstatement or rectification work</label>
	      </div>
	        <div class="form-check">
	        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
	        <label class="form-check-label" for="radio1">repairs or improvements work</label>
	      </div>
	      <div class="form-check">
	        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
	        <label class="form-check-label" for="radio1">slope maintenance work</label>
	      </div>
	      <div class="form-check">
	        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
	        <label class="form-check-label" for="radio1">others</label>
	      </div>
	      <div class="form-check">
	        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
	        <label class="form-check-label" for="radio2">none</label>
	      </div>
	      <div class="form-check">
	        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
	        <label class="form-check-label" for="radio2">not known</label>
	      </div>
	      <label for="text">Please state the nature of the work required or proposed, if any, and the cost/estimated cost* of works for which the purchaser will be liable:</label>
	      <input type="text" id="text" name="text">
	    </div>
      <div class=" pt-5"><button type="submit" class="btn btn-primary">Submit</button></div>
  </form>
</div>
<div class="container pt-5">
      <h3 class="text-center">NOTES</h3>
      <ol>
        <li>This Form should not be used with any alterations.</li>
        <li>Nothing in Part 2 of this Form shall be construed as affecting or defining the terms and conditions of an agreement for sale and purchase to be entered into between the Vendor and a purchaser.</li>
        <li>A licensed estate agent is required to provide to the Vendor the original or a copy of the completed Form either before entering into an estate agency agreement with the Vendor or before the entering into of an agreement for sale and purchase between the Vendor and a purchaser in respect of the Property, at the option of the Vendor.</li>
        <li>A licensed estate agent is required to provide to a purchaser the original or a copy of the completed Form unless the purchaser specifically waives his right to receive the same.</li>
        <li>A purchaser or the Vendor should seek legal or other professional advice if:
          <ol type="a">
            <li>he is in doubt of the effects and implications of any of the encumbrances listed in Part B in Part 1 of this Form;</li>
            <li>any prescribed information is not available or he is in doubt of any information provided herein; or</li>
            <li>he wishes to obtain additional information which is not provided in this Form.</li>
          </ol>
        </li>
        <li>Complete all questions and fill in all blanks except Part C in Part 1. If any question is not applicable, please write “N/A” which means not applicable.  If any prescribed information is not available, please write “Not Available”.</li>
        <li>A separate form should be completed for each property.</li>
        <li>Any material changes in the given information should be conveyed immediately to the recipients of this Form.</li>
        <li>“*” means delete whichever is inappropriate.  Provisions deleted must be initialled.  Where appropriate, mark a tick “” in the box  provided.</li>
        <li>Documentary evidence of the information provided in Part 2 of this Form may be attached by the Vendor.</li>
        <li>Prescribed sources of information:
          <ol type="a">
            <li>Land Registry</li>
            <li>Rating and Valuation Department</li>
            <li>Buildings Department</li>
          </ol>
        </li>
        <li>Enter the name of the estate agency business entity concerned.</li>
      </ol>
    </div>
</div>

@endsection