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
			<h1>Landlord Form</h1>
		</div>
	</div>

  	<div class="container mt-3 border border-secondary p-5">
	  <form action="{{ route('save_form5')}}" method="POST">
      @csrf

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
                <label class="mt-2  mb-2">I/We, <input type="text"
                        class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="Landlord_name"> (“Landlord”),appoint
                    <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Agent_name"> (“Agent”(2))
                    subject to and in accordance with the terms of this Agreement to act as my/our
                    exclusive(3)/non-exclusive(1) agent in the marketing for letting purpose of
                    <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Property">(“Property”).
                    This Agreement shall take effect on <input type="text"
                        class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="effect_on_DMY"> (D/M/Y) and expire on <input type="text"
                        class="border-start-0 border-top-0 border-end-0 " aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name="expire_on_DMY"> (D/M/Y) (both days
                    inclusive) (“Validity Period”).
                </label>
                <label class="my-2">
                    <u>[CAUTION:</u> In the case of exclusive agency, the Landlord may be liable to pay commission to the Agent even if the Property is not let through the Agent within the Validity Period.  The Landlord should therefore consider carefully when he enters into an exclusive agency relationship with the Agent.  Special obligations to be performed by the Agent under exclusive agency may be specified as extra terms under clause 12.]
                </label>
            </div>

            <div class="col-md-12">
                <h5 class="mb-4">2.	Agency Relationship and Duties of Agent</h5>
                <p class="mb-4">The Agent agrees with the Landlord that –</p>
            
                <div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off" name="Duties_of_Agent1" value="1">
                    <label class="btn btn-outline-primary me-3" for="btncheck19">(a) The agency relationship between them shall be a single agency/dual agency/potentially dual agency(3)(1);</label>
                    <input type="checkbox" class="btn-check" id="btncheck28" autocomplete="off" name="Duties_of_Agent2" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck28">(b)	in the case of dual agency, the Agent shall as soon as is practicable disclose in writing to the Landlord the amount or rate of commission to be received by the Agent from a tenant;</label>
                    <input type="checkbox" class="btn-check" id="btncheck34" autocomplete="off" name="Duties_of_Agent3" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck34">(c)	in the case of potentially dual agency, the Agent shall as soon as is practicable after dual agency arises disclose in writing to the Landlord such agency relationship and the amount or rate of commission to be received by the Agent from a tenant; and</label>
                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="Duties_of_Agent4" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck4">(d)	The Agent’s duties shall be as set out in Schedule 1 to this Agreement, in addition to the duties placed on the Agent by this Agreement or any enactment.</label>
                 </div>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">3.	List Rental</h5>
                <p class="mb-4"><u>[CAUTION:</u> The Landlord does not confer upon the Agent, by virtue of this clause, the right to accept an offer on behalf of the Landlord.  The list rental is for the purpose of listing and advertising only.]</p>
                <label class="mt-2  mb-2">The list rental shall be Hong Kong Dollars </label><input type="number" id="tentacles" name="Hong_Kong_Dollars1" class="px-2 mx-2 "><label class="mt-2 fs-5 mb-2">( HK$ )</label>
                <label class="mt-2  mb-2">per month inclusive/exclusive(1) of rates and management fee.  The list rental can only be varied with written instructions of the Landlord and such instructions shall form part of this Agreement.</label>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">4.	Commission</h5>
                <p class="mb-4">The provisions of this Agreement applicable to the commission to be paid by the Landlord to the Agent shall be as set out in Schedules 2 and 4 to this Agreement(4).</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">5.	Property Information</h5>
                <p class="mb-4">The Agent shall provide to the Landlord the Leasing Information Form prescribed under the Estate Agents Practice (General Duties and Hong Kong Residential Properties) Regulation duly completed and signed by the Agent.</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">6.	Property Inspection</h5>
                <p class="mb-4">(a)	The Landlord agrees to allow viewing of the Property by the Agent/tenant(s)(1) at a mutually agreeable time.</p>
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="Property_Inspection" id="btnradio42" autocomplete="off" value="yes" checked>
                    <label class="btn btn-outline-primary" for="btnradio42">Yes</label>

                    <input type="radio" class="btn-check" name="Property_Inspection" id="btnradio62" autocomplete="off" value="no">
                    <label class="btn btn-outline-primary" for="btnradio62">No</label>
                </div>

                <p class="mb-4">(b) The Landlord agrees to pass the keys of the Property to the Agent for safe custody and for the viewing of the Property.</p>
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="pass_keys_Agent" id="btnradio46" autocomplete="off" value="yes" checked>
                    <label class="btn btn-outline-primary" for="btnradio46">Yes</label>

                    <input type="radio" class="btn-check" name="pass_keys_Agent" id="btnradio6" autocomplete="off" value="no">
                    <label class="btn btn-outline-primary" for="btnradio6">No</label>
                </div>
                <p class="mb-4">(c) The Landlord authorizes the Agent to pass the keys to other estate agents/persons(1) for the viewing of the Property</p>
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="pass_keys_other" id="btnradio2" autocomplete="off" value="yes" checked>
                    <label class="btn btn-outline-primary" for="btnradio2">Yes</label>

                    <input type="radio" class="btn-check" name="pass_keys_other" id="btnradio61" autocomplete="off" value="no">
                    <label class="btn btn-outline-primary" for="btnradio61">No</label>
                </div>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">7.	Sub-listing</h5>
                <p class="mb-4">(a)	The Landlord authorizes the Agent to sub-list the Property and pass relevant information about the Landlord and the Property supplied by the Landlord to other estate agents for sub-listing purposes.</p>
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name=" information_about_Landlord" id="btnradio7" autocomplete="off" value="yes" checked>
                    <label class="btn btn-outline-primary" for="btnradio7">Yes</label>
                    <input type="radio" class="btn-check" name="information_about_Landlord" id="btnradio8" autocomplete="off" value="no">
                    <label class="btn btn-outline-primary" for="btnradio8">No</label>
                </div>
                <p class="mb-4">(b)	If the Agent sub-lists the Property to another estate agent (“sub-listing agent”), the Agent shall ensure that the sub-listing agent shall observe the Estate Agents Practice (General Duties and Hong Kong Residential Properties) Regulation regarding advertising.</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">8.	Advertising</h5>
                <p class="mb-4">(a)	The Landlord authorizes the Agent to issue advertisement in respect of the Property.</p>
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="Advertising" id="btnradio5" autocomplete="off" value="yes" checked>
                    <label class="btn btn-outline-primary" for="btnradio5">Yes</label>
                    <input type="radio" class="btn-check" name="Advertising" id="btnradio75" autocomplete="off" value="no">
                    <label class="btn btn-outline-primary" for="btnradio75">No</label>
                </div>
                <p class="mb-4">(b)	If the answer to the above is “yes”, then the advertising fees will be borne by the Agent unless otherwise specified in this Agreement.</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">9.	Disclosure of Interest by Agent</h5>
                <p class="mb-4">(a)	The person signing this Agreement on behalf of the Agent discloses that he or his specified relative(5), or any nominee of his or of his specified relative, or the Agent or any employee/substantial shareholder(6)/ partner/director of the Agent has a pecuniary or other beneficial interest(7) in the Property: </p>
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name=" Disclosure_Agent" id="btnradio78" autocomplete="off" value="yes" checked>
                    <label class="btn btn-outline-primary" for="btnradio78">Yes</label>
                    <input type="radio" class="btn-check" name="Disclosure_Agent" id="btnradio81" autocomplete="off" value="no">
                    <label class="btn btn-outline-primary" for="btnradio81">No</label>
                </div>
                <p class="mb-4">(b)	If the answer to the above is “yes”, then the particulars of the interest must be specified in Schedule 3 to this Agreement. </p>
                <p class="mb-4">(c)	The person signing this Agreement on behalf of the Agent shall as soon as is practicable disclose in writing to the Landlord any interest referred to in paragraph (a) above that may arise during the Validity Period.</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">10. Acknowledgement by Landlord</h5>
                <p class="mb-4">The Landlord acknowledges that he has –</p>
                <p class="mb-4">(a)	Read and understood the terms of this Agreement</p>

                <div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck94" autocomplete="off" name="Acknowledgement_by_Landlord1" value="1">
                    <label class="btn btn-outline-primary me-3" for="btncheck94">received the Leasing Information Form required to be provided under clause 5 of this Agreement.</label>
                    <input type="checkbox" class="btn-check" id="btncheck88" autocomplete="off" name="Acknowledgement_by_Landlord2" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck88">agreed to receive the Leasing Information Form before entering into a binding lease between the Landlord and a tenant.</label>
                   
                 </div>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">11. Schedules</h5>
                <p class="mb-4">The Schedules to this Agreement form part of this Agreement.</p>
            </div>
            
            <div class="col-md-12">
                <h5 class="my-3">12. Extra Terms <u>[CAUTION:</u> These extra terms cannot conflict with or limit the other terms of this Agreement.]: </h5>
                <p class="mb-4">
                    This Agreement shall be void if the occupation permit for the Property does not include or allow domestic purpose or use.</p>
            </div>

            <div class="col-md-6 my-3">
                <label>Signature of the Landlord:<input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="Landlord_sig"></label>
            </div>
            <div class="col-md-6 my-3">
                <label>Signature of the estate agent/salesperson signing for and on behalf of the Agent: <input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="Agent_sig">
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label>Hong Kong identity card(s) number(s):
                    (if applicable) 
                      <input type="text" id="tentacles" name="HK_ID_Card_no">                  
                </label>
            </div>
            <div class="col-md-6 my-3">
                <label>Name and licence number of the signatory: <input type="text" id="tentacles" name="licence_number">
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label>Where the Landlord is a company, please state: <input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="company_state">
                </label>
            </div>
            <div class="col-md-6"></div>

            <div class="col-md-6 my-3">
                <label>Name of the Signatory: 
                    Position of the Signatory:
                    Business Registration Certificate number 
                    of the Landlord: <input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="Business_Registration_CertificateNo_Landlord">                   
                                        
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label>Number of Agent’s statement of
                    particulars of business:  <input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="Agent_statement_No">                  
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label class="w-100">Address: <textarea type="text" cols="2" class="form-control my-4" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Landlord_Address"></textarea>                   
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label class="w-100">Address: <textarea type="text" cols="2" class="form-control my-4" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Agent_Address"></textarea>                   
                </label>
            </div>

            <div class="col-md-6 my-3">
					<label>Telephone number: <input type="tel" id="tentacles" name="Landlord_phone" minlength="10" maxlength="10">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Telephone number: <input type="tel" id="tentacles" name="Agent_phone" minlength="10" maxlength="10">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Fax number: <input type="text" id="tentacles" name="Landlord_Fax">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Fax number: <input type="text" id="tentacles" name="Agent_fax">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Date: <input type="text" id="tentacles" name="Landlord_date">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Date: <input type="text" id="tentacles" name="Agent_date">
					</label>
				</div>
     		</div>
     		<div class=" pt-5"><button type="submit" class="btn btn-primary">Submit</button></div>
	  </form>
	</div>
</div>
@endsection
