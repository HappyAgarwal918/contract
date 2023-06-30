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
			<h1>Tenant Form</h1>
		</div>
	</div>

  	<div class="container mt-3 border border-secondary p-5">
	  <form action="{{ route('save_form6')}}" method="POST">
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
                        aria-describedby="inputGroup-sizing-default" name="Tenant_name"> (“Tenant”), appoint
                    <input type="text" class="border-start-0 border-top-0 border-end-0  mx-3"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="Agent_name"> (“Agent”(2))
                        subject to and in accordance with the terms of this Agreement to act as my/our agent in the intended renting of the properties listed in Schedule 1 to this Agreement (“Properties”).  This Agreement shall take effect on
                     <input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="effect_on_DMY">(D/M/Y) and expire on <input type="text"
                    class="border-start-0 border-top-0 border-end-0 " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="expire_on_DMY"> (D/M/Y) (both days
                    inclusive) (“Validity Period”).
                </label>
                <label class="my-2">
                    <u>[CAUTION:</u>It is recommended that the Validity Period should be not more than 3 months]
                </label>

            </div>  
            
            <div class="col-md-12">
                <h5 class="mb-4">2.	Agency Relationship and Duties of Agent</h5>
                <p class="mb-4">The Agent agrees with the Tenant that –</p>
                <div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off" name="Duties_Agent1" value="1">
                    <label class="btn btn-outline-primary me-3" for="btncheck19">(a) The agency relationship between them in respect of the Properties shall be a single agency/dual agency/potentially dual agency(3) as specified in column 4 of Schedule 1 to this Agreement;</label>
                    <input type="checkbox" class="btn-check" id="btncheck28" autocomplete="off" name="Duties_Agent2" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck28">(b) In the case of each dual agency, the Agent shall as soon as is practicable disclose in writing to the Tenant the amount or rate of commission to be received by the Agent from the relevant landlord;</label>
                    <input type="checkbox" class="btn-check" id="btncheck34" autocomplete="off" name="Duties_Agent3" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck34">(c) In the case of each potentially dual agency, the Agent shall as soon as is practicable after dual agency arises disclose in writing to the Tenant such agency relationship and the amount or rate of commission to be received by the Agent from the relevant landlord; and</label>
                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" name="Duties_Agent4" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck4">(d)	The Agent’s duties shall be as set out in Schedule 2 to this Agreement, in addition to the duties placed on the Agent by this Agreement or any enactment.</label>
                 </div>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">3.	Commission</h5>
                <p class="mb-4">The provisions of this Agreement applicable to the commission to be paid by the Tenant to the Agent shall be as set out in Schedules 1, 3 and 5 to this Agreement(4).</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">4.	Property Information</h5>
                <p class="mb-4">The Agent shall provide to the Tenant in respect of the Properties all relevant Leasing Information Forms prescribed under the Estate Agents Practice (General Duties and Hong Kong Residential Properties) Regulation  –</p>
                <div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off" name=" Property_Information1" value="1">
                    <label class="btn btn-outline-primary me-3" for="btncheck9">(a) Obtained from the respective landlords’ licensed estate agents in the case of single agency;</label>
                    <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off" name=" Property_Information2" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck8">(b)	duly completed and signed by the Agent in the case of dual agency or where a landlord is not represented by a licensed estate agent,unless the Tenant expressly waives his right to receive any of them. </label> 
                 </div>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">5.	Disclosure of Interest by Agent</h5>
                <p class="mb-2">(1)	The person signing this Agreement on behalf of the Agent discloses that he or his specified relative(5), or any nominee of his or of his specified relative, or the Agent or any employee/substantial shareholder(6)/partner/director of the Agent has a pecuniary or other beneficial interest(7) in the Properties:</p>
          
                <div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="Agent_Disclosure" id="btnradio42" autocomplete="off" value="yes" checked>
                    <label class="btn btn-outline-primary" for="btnradio42">Yes</label>

                    <input type="radio" class="btn-check" name="Agent_Disclosure" id="btnradio62" autocomplete="off" value="no">
                    <label class="btn btn-outline-primary" for="btnradio62">No</label>
                </div>
                <p class="mb-2">(2)	If the answer to the above is “yes”, then the particulars of the interest must be specified in Schedule 4 to this Agreement.</p>
                <p class="mb-2">(3)	The person signing this Agreement on behalf of the Agent shall as soon as is practicable disclose in writing to the Tenant any interest referred to in paragraph (a) above that may arise during the Validity Period.</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">6.	Acknowledgement by Tenant</h5>
                <p class="mb-2">The Tenant acknowledges that the Tenant has –</p>
                <div class="btn-group my-3" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off" name="Acknowledgement1" value="1">
                    <label class="btn btn-outline-primary me-3" for="btncheck12">(a) Read and understood the terms of this Agreement; and</label>
                    <input type="checkbox" class="btn-check" id="btncheck22" autocomplete="off" name="Acknowledgement2" value="1">
                    <label class="btn btn-outline-primary mx-3" for="btncheck22">(b) Received all relevant Leasing Information Forms required to be provided under clause 4 of this Agreement which the Tenant has not expressly waived his right to receive.</label>
                 </div>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">7.	Schedules</h5>
                <p class="mb-4">The Schedules to this Agreement form part of this Agreement.</p>
            </div>

            <div class="col-md-12">
                <h5 class="my-3">8. Extra Terms <u>[CAUTION:</u> These extra terms cannot conflict with or limit the other terms of this Agreement]: </h5>
            </div>

            <div class="col-md-6 my-3">
                <label>Signature of the Tenant:<input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="Sig_Tenant"></label>
            </div>
            <div class="col-md-6 my-3">
                <label>Signature of the estate agent/salesperson signing for and on behalf of the Agent: <input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="sig_agent">
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label>Hong Kong identity card(s) number(s):
                    (if applicable)                     
                      <input type="text" id="tentacles" name="HH_ID_NO">                  
                </label>
            </div>
            <div class="col-md-6 my-3">
                <label>Name and licence number of the signatory: <input type="text" id="tentacles" name="licence_number">
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label>Where the Tenant is a company, please state:<input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="company_state">
                </label>
            </div>
            <div class="col-md-6"></div>

            <div class="col-md-6 my-3">
                <label>Name of the Signatory:
                    Position of the Signatory:
                    Business Registration Certificate number of the Tenant:
                     <input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="Business_Reg_Certif_number_Tenant">                   
                                        
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label>Number of Agent’s statement of particulars of
                    business:<input type="text"
                    class="border-start-0 border-top-0 border-end-0  mx-3" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="Agent_statement_Number">                  
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label class="w-100">Address: <textarea type="text" cols="2" class="form-control my-4" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Address_Tenant"></textarea>                   
                </label>
            </div>

            <div class="col-md-6 my-3">
                <label class="w-100">Address: <textarea type="text" cols="2" class="form-control my-4" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Property" name="Address_Agent"></textarea>                   
                </label>
            </div>

            <div class="col-md-6 my-3">
					<label>Telephone number: <input type="tel" id="tentacles" name="Tenant_phNO" minlength="10" maxlength="10">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Telephone number: <input type="tel" id="tentacles" name="Agent_PhNO" minlength="10" maxlength="10">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Fax number: <input type="text" id="tentacles" name="Tenant_FAX">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Fax number: <input type="text" id="tentacles" name="Agent_FAX">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Date: <input type="text" id="tentacles" name="Tenant_DATE">
					</label>
				</div>
				<div class="col-md-6 my-3">
					<label>Date: <input type="text" id="tentacles" name="Agent_DATE">
					</label>
				</div>
            <p class="mb-2">[<u>CAUTION</u>> :	Immediately after this Agreement has been signed, the Tenant must be given the original or a copy of this Agreement as signed.]</p>
        </div>
        <div class=" pt-5"><button type="submit" class="btn btn-primary">Submit</button></div>
	  </form>
	</div>
</div>
@endsection
