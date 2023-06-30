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
			<h1>Vendor Form</h1>
		</div>
	</div>

	<div class="container mt-3 border border-secondary p-5">
		<form action="{{ route('save_form3')}}" method="POST">
			@csrf
			<fieldset>
			<div class="row">
				<div class="col-md-12">
					<h5 class="mb-4"><u class="text-primary">GENERAL CAUTION:</u> Read this Agreement carefully and follow
						its instructions. If you do not understand any thing in this Agreement then ask for an explanation
						to be given. If you do not understand or agree with any explanation given then it is best to consult
						your solicitor before signing this Agreement.</h5>

					<h5><u class="text-primary">Information note:</u> Where any thing in this Agreement is followed by a
						number in brackets (e.g.
						(1)), then immediately read the explanatory note that bears that number in Schedule 4 to this
						Agreement. Where any thing in this Agreement refers to a Schedule to this Agreement, then
						immediately read that Schedule.</h5>
				</div>

				<div class="col-md-12 my-4">
					<h5>1. Appointment of Agent and Validity Period of this Agreement</h5>
					<label class="mt-2  mb-2">I/We, <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Vendor"> (“Vendor”), appoint
						<input type="text" class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Agent"> (“Agent”(2))
						subject to and in accordance with the terms of this Agreement to
						act as my/our exclusive(3)/non-exclusive(1) agent in the marketing of
						<textarea type="text" cols="2" class="form-control my-4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Property"></textarea>. This Agreement
						shall take effect on <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="effect_on_DMY">(D/M/Y) and expire on <input type="text" class="border-start-0 border-top-0 border-end-0 " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="expire_on_DMY"> (D/M/Y) (both days
						inclusive) (“Validity Period”).

					</label>
					<label class="mt-2  mb-2">[CAUTION: In the case of exclusive agency, the Vendor may be liable to pay
						commission to the Agent
						even if the Property is not sold through the Agent within the Validity Period. The Vendor should
						therefore consider carefully when he enters into an exclusive agency relationship with the Agent.
						Special obligations to be performed by the Agent under exclusive agency may be specified as extra
						terms under clause 13.]</label>
				</div>
				<div class="col-md-12">
					<h5 class="mb-4">2. Agency Relationship and Duties of Agent</h5>
					<p class="mb-4">The Agent agrees with the Vendor that –</p>
					<div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
						<input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off" name="Duties_of_Agent1" value="1">
						<label class="btn btn-outline-primary me-3" for="btncheck19">(a) The agency relationship between them in respect of the Property shall be a single agency/dual agency/potentially dual agency(3)(1).</label>
						<input type="checkbox" class="btn-check" id="btncheck28" autocomplete="off" name="Duties_of_Agent2" value="1">
						<label class="btn btn-outline-primary mx-3" for="btncheck28">(b) In the case of dual agency, the Agent shall as soon as is practicable disclose in writing to the Vendor the amount or rate of commission to be received by the Agent from a purchaser.</label>
						<input type="checkbox" class="btn-check" id="btncheck34" autocomplete="off"name="Duties_of_Agent3" value="1">
						<label class="btn btn-outline-primary mx-3" for="btncheck34">(c) In the case of potentially dual agency, the Agent shall as soon as is practicable after dual agency arises disclose in writing to the Vendor such agency relationship and the amount or rate of commission to be received by the Agent from a purchaser.</label>
						<input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="Duties_of_Agent4" value="1">
						<label class="btn btn-outline-primary mx-3" for="btncheck4">(d) The Agent’s duties shall be as set out in Schedule 1 to this Agreement, in addition to the duties placed on the Agent by this Agreement or any enactment.</label>
					</div>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">3. List Price </h5>
					<p class="mb-4"><u>[CAUTION:</u> The Vendor does not confer upon the Agent, by virtue of this clause, the right to accept an offer on behalf of the Vendor. The list price is for the purpose of listing and advertising only.]</p>
					<label class="mt-2  mb-2">The list price shall be Hong Kong Dollars</label>
					<input type="number" id="tentacles" name="List_price1" min="10" max="100" class="px-2 mx-2 ">
					<label class="mt-2 fs-5 mb-2">( HK$ )</label>
					<label class="mt-2  mb-2">The list price can only be varied with written instructions of the Vendor and such instructions shall form part of this Agreement.</label>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">4. Commission</h5>
					<p class="mb-4">The provisions of this Agreement applicable to the commission to be paid by the Vendor to the Agent shall be as set out in Schedules 2 and 4 to this Agreement(4).</p>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">5. Property Information</h5>
					<p class="mb-4">The Agent shall provide to the Vendor the Property Information Form including the Vendor’s Statement prescribed under the Estate Agents Practice (General Duties and Hong Kong Residential Properties) Regulation duly completed and signed by the Agent.</p>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">6. Property Inspection</h5>
					<p class="mb-4">(a) The Vendor agrees to allow viewing of the Property by the Agent/purchaser(s)(1) at a mutually agreeable time.</p>
					<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
						<input type="radio" class="btn-check" name="allow_viewing_Property" id="btnradio14" autocomplete="off" value="yes" checked>
						<label class="btn btn-outline-primary" for="btnradio14">Yes</label>

						<input type="radio" class="btn-check" name="allow_viewing_Property" id="btnradio32" autocomplete="off" value="no">
						<label class="btn btn-outline-primary" for="btnradio32">No</label>
					</div>

					<p class="mb-4">(b) The Vendor agrees to pass the keys of the Property to the Agent for safe custody and for the viewing of the Property.</p>
					<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
						<input type="radio" class="btn-check" name="pass_keys_Agent" id="btnradio15" autocomplete="off" value="yes" checked>
						<label class="btn btn-outline-primary" for="btnradio15">Yes</label>

						<input type="radio" class="btn-check" name="pass_keys_Agent" id="btnradio33" autocomplete="off" value="no">
						<label class="btn btn-outline-primary" for="btnradio33">No</label>
					</div>

					<p class="mb-4">(c) The Vendor authorizes the Agent to pass the keys to other estate agents/persons(1) for the viewing of the Property.</p>
					<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
						<input type="radio" class="btn-check" name="pass_keys_Other" id="btnradio4" autocomplete="off" value="yes" checked>
						<label class="btn btn-outline-primary" for="btnradio4">Yes</label>

						<input type="radio" class="btn-check" name="pass_keys_Other" id="btnradio39" autocomplete="off" value="no">
						<label class="btn btn-outline-primary" for="btnradio39">No</label>
					</div>

				</div>

				<div class="col-md-12">
					<h5 class="my-3">7. Sub-listing</h5>
					<p class="mb-4">(a) The Vendor authorizes the Agent to sub-list the Property and pass relevant information about the Vendor and the Property supplied by the Vendor to other estate agents for sub-listing purposes. </p>
					<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
						<input type="radio" class="btn-check" name="vendor_info" id="btnradio44" autocomplete="off" value="yes" checked>
						<label class="btn btn-outline-primary" for="btnradio44">Yes</label>

						<input type="radio" class="btn-check" name="vendor_info" id="btnradio9" autocomplete="off" value="no">
						<label class="btn btn-outline-primary" for="btnradio9">No</label>
					</div>
					<p class="mb-4">(b) If the Agent sub-lists the Property to another estate agent (“sub-listing agent”), the Agent shall ensure that the sub-listing agent shall observe the Estate Agents Practice (General Duties and Hong Kong Residential Properties) Regulation regarding advertising.</p>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">8. Advertising</h5>
					<p class="mb-4">(a) The Vendor authorizes the Agent to issue advertisement in respect of the Property.</p>
					<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
						<input type="radio" class="btn-check" name="advertisement" id="btnradio11" autocomplete="off" value="yes" checked>
						<label class="btn btn-outline-primary" for="btnradio11">Yes</label>

						<input type="radio" class="btn-check" name="advertisement" id="btnradio99" autocomplete="off" value="no">
						<label class="btn btn-outline-primary" for="btnradio99">No</label>
					</div>
					<p class="mb-4">(b) If the answer to the above is “yes”, then the advertising fees will be borne by the Agent unless otherwise specified in this Agreement.</p>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">9. Disclosure of Interest by Agent</h5>
					<p class="mb-4">(a) The person signing this Agreement on behalf of the Agent discloses that he or his specified relative(5), or any nominee of his or of his specified relative, or the Agent or any employee/substantial shareholder(6)/partner/director of the Agent has a pecuniary or other beneficial interest(7) in the Property:</p>
					<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
						<input type="radio" class="btn-check" name="Disclosure_of_Interest" id="btnradio19" autocomplete="off" value="yes" checked>
						<label class="btn btn-outline-primary" for="btnradio19">Yes</label>
						<input type="radio" class="btn-check" name="Disclosure_of_Interest" id="btnradio89" value="no" autocomplete="off">
						<label class="btn btn-outline-primary" for="btnradio89">No</label>
					</div>
					<p class="mb-4">(b) If the answer to the above is “yes”, then the particulars of the interest must be specified in Schedule 3 to this Agreement.</p>
					<p class="mb-4">(c) The person signing this Agreement on behalf of the Agent shall as soon as is practicable disclose in writing to the Vendor any interest referred to in paragraph (a) above that may arise during the Validity Period.</p>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">10. Acknowledgement by Vendor </h5>
					<p class="mb-4">
						The Vendor acknowledges that he has –</p>
					<p class="mb-4">
						(a) read and understood the terms of this Agreement; and</p>
					

					<div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
						<p class="mb-4">(b) </p>&nbsp;
						<input type="checkbox" class="btn-check" id="btncheck29" autocomplete="off" name="Acknowledgement1" value="1">
						<label class="btn btn-outline-primary me-3" for="btncheck29">received the Property Information Form including the Vendor’s Statement required to be provided under clause 5 of this Agreement. </label>
						<input type="checkbox" class="btn-check" id="btncheck88" autocomplete="off" name="Acknowledgement2" value="1">
						<label class="btn btn-outline-primary mx-3" for="btncheck88">agreed to receive the Property Information Form including the Vendor’s Statement before entering into a binding agreement for sale and purchase between the Vendor and a purchaser.</label>
					</div>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">11. Schedules</h5>
					<p class="mb-4">
						The Schedules to this Agreement form part of this Agreement.</p>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">12. Agreement void if domestic purpose or use not allowed</h5>
					<p class="mb-4">
						This Agreement shall be void if the occupation permit for the Property does not include or allow domestic purpose or use.</p>
				</div>

				<div class="col-md-12">
					<h5 class="my-3">13. Extra Terms <u>[CAUTION:</u> These extra terms cannot conflict with or limit the other terms of this Agreement.]: </h5>
					<p class="mb-4">
						This Agreement shall be void if the occupation permit for the Property does not include or allow domestic purpose or use.</p>
				</div>

				<div class="col-md-6 my-3">
					<label>Signature of the Vendor: <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Signature_Vendor"></label>
				</div>
				<div class="col-md-6 my-3">
					<label>Signature of the estate agent/salesperson signing for and
						on behalf of the Agent: <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Signature_agent">
					</label>
				</div>

				<div class="col-md-6 my-3">
					<label>Hong Kong identity card(s) number(s):
						(if applicable) <input type="text" id="tentacles" name="ID_card_NO">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Name and licence number of the signatory: <input type="text" id="tentacles" name="licence_No">
					</label>
				</div>

				<div class="col-md-6 my-3">
					<label>Where the Vendor is a company,
						please state: <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="company_state">
					</label>
				</div>
				<div class="col-md-6"></div>

				<div class="col-md-6 my-3">
					<label>Name of the Signatory:
						Position of the Signatory:
						Business Registration Certificate number
						of the Vendor:
					</label>
				</div>

				<div class="col-md-6 my-3">
					<label>Number of Agent’s statement of
						particulars of business:
					</label>
				</div>

				<div class="col-md-6 my-3">
					<label class="w-100">Address: <textarea type="text" cols="2" class="form-control my-4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Business_Certificate_NO_Vendor"></textarea>
					</label>
				</div>

				<div class="col-md-6 my-3">
					<label class="w-100">Address: <textarea type="text" cols="2" class="form-control my-4" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Business_Certificate_NO_Agent"></textarea>
					</label>
				</div>

				<div class="col-md-6 my-3">
					<label>Telephone number: <input type="tel" id="tentacles" name="phNo_Vendor" minlength="10" maxlength="10">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Telephone number: <input type="tel" id="tentacles" name="phNo_Agent" minlength="10" maxlength="10">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Fax number: <input type="text" id="tentacles" name="Fax_Vendor">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Fax number: <input type="text" id="tentacles" name="Fax_Agent">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Date: <input type="text" id="tentacles" name="date_Vendor">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Date: <input type="text" id="tentacles" name="date_Agent">
					</label>
				</div>
			</div>
      <div class=" pt-5"><button type="submit" class="btn btn-primary">Submit</button></div>
			</fieldset>
		</form>
	</div>
</div>
@endsection