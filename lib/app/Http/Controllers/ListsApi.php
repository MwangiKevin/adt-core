<?php

/**
 * ADT API
 * Official & Core API for ADT  [ADT](http://adtcore.io)  Main API 
 *
 * OpenAPI spec version: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Dingo\Api\Routing\Helpers;

use App\Models\ListsModels\Allergies; 
use App\Models\ListsModels\Appointmet;
use App\Models\ListsModels\Category;
use App\Models\ListsModels\County;
use App\Models\ListsModels\Dependanat; 
use App\Models\ListsModels\Prophylaxis; 
use App\Models\ListsModels\Regimen; 
use App\Models\ListsModels\WhoStage; 
use App\Models\ListsModels\Illnesses; 
use App\Models\ListsModels\Sources; 
use App\Models\ListsModels\Pepreason; 
use App\Models\ListsModels\Familyplanning;
use App\Models\ListsModels\Services;
use App\Models\ListsModels\Sub_county;
use App\Models\ListsModels\ChangeReason;
use App\Models\ListsModels\Generic;
use App\Models\ListsModels\Instruction;
use App\Models\ListsModels\NonAdherenceReason;
use App\Models\ListsModels\Purpose;

// tmp 
use App\Models\FacilityModels\FacilityTypes;

class ListsApi extends Controller
{
    use Helpers;
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    // ///////////////////////
    // Allergies            //
    // //////////////////////

    /**
     * Operation listsAllergiesGet
     *
     * Fetch Regimen allergies (for select options).
     *
     *
     * @return Http response
     */
    public function listsAllergiesGet()
    {
        $response = Allergies::all(); 
         return response()->json($response, 200); 
    }

    /**
     * Operation listsAllergiesAllergyIdGet
     *
     * Fetch Allergy specified by allergyId.
     *
     * @param int $allergy_id ID of allergy (required)
     *
     * @return Http response
     */
    public function listsAllergiesByIdGet($allergy_id)
    {
        $response = Allergies::findOrFail($allergy_id);
        return response()->json($response, 200);
    }


    // ///////////////////////
    // Categories          //
    // //////////////////////

    /**
     * Operation listsCategoriesGet
     *
     * Fetch Regimen Categories (for select options).
     *
     *
     * @return Http response
     */
    public function listsCategoriesGet()
    {
        $response = Category::all();
        return response()->json($response, 200);
    }
    /**
     * Operation listsCategoriesCategoryIdGet
     *
     * Fetch Category specified by categoryId.
     *
     * @param int $category_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsCategoriesByIdGet($category_id)
    {
        $category = Category::findOrFail($category_id);
        return response()->json($category, 200);
    }
    /**
     * Operation listsCategoriesPost
     *
     * create a Category.
     *
     *
     * @return Http response
     */
    public function listsCategoriesPost()
    {
        $input = Request::all();
        $new_catgory = Category::create($input);
        if($new_catgory){
            return response()->json(['msg' => 'Created Category'], 200);
        }else{
            return response('Oops, seems like something went wrong while trying to create a category');
        }
    }

    /**
     * Operation listsCategoriesCategoryIdPut
     *
     * Update an existing Category.
     *
     * @param int $category_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsCategoriesPut($category_id)
    {
        $input = Request::all();
        $category = Category::findOrFail($category_id);
        $category->update(['name' => $input['name']]);
        if($category->save()){
            return response()->json(['msg' => 'Updated Category'], 200);
        }else{
            return response('Oops, seems like something went wrong while trying to update a category');
        }
    }
    /**
     * Operation listsCategoriesCategoryIdDelete
     *
     * Deletes a Category specified by serviceId.
     *
     * @param int $category_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsCategoriesDelete($category_id)
    {
        Category::destroy($category_id);
        return response()->json(['msg' => 'deleted Category'], 200);
    }

    // ///////////////////////
    // Counties            //
    // //////////////////////
    /**
     * Operation listsCountiesGet
     *
     * Fetch counties (for select options).
     *
     *
     * @return Http response
     */
    public function listsCountiesGet()
    {
        $response = County::all();
        return response()->json($response, 200);
    }
    /**
     * Operation listsCountiesCountyIdGet
     *
     * Fetch County specified by countyId.
     *
     * @param int $county_id ID of county that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsCountiesByIdGet($county_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing listsCountiesCountyIdGet as a GET method ?');
    }
    /**
     * Operation listsCountiesCountyIdDelete
     *
     * Deletes a County specified by countyId.
     *
     * @param int $county_id ID of county that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsCountiesDelete($county_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing listsCountiesCountyIdDelete as a DELETE method ?');
    }

    // ///////////////////////
    //CountiesSubcounties  //
    // //////////////////////
    /**
     * Operation listsCountiesCountyIdSubcountiesGet
     *
     * Fetch counties (for select options).
     *
     * @param int $county_id ID of County that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsCountiesSubcountiesGet($county_id)
    {
        $response = Sub_county::all();
        return response()->json($response, 200);
    }
    /**
     * Operation listsCountiesCountyIdSubcountiesSubcountyIdGet
     *
     * Fetch County specified by countyId.
     *
     * @param int $county_id ID of county (required)
     * @param int $subcounty_id ID of subcounty (required)
     *
     * @return Http response
     */
    public function listsCountiesSubcountiesByIdGet($county_id, $subcounty_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing listsCountiesCountyIdSubcountiesSubcountyIdGet as a GET method ?');
    }

    /**
     * Operation listsCountiesCountyIdSubcountiesSubcountyIdDelete
     *
     * Deletes a SubCounty specified by subcountyId in a County specified by countyId.
     *
     * @param int $county_id ID of county (required)
     * @param int $subcounty_id ID of subcounty (required)
     *
     * @return Http response
     */
    public function listsCountiesSubcountiesDelete($county_id, $subcounty_id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing listsCountiesCountyIdSubcountiesSubcountyIdDelete as a DELETE method ?');
    }

    // ///////////////////////
    //Family planning      //
    // //////////////////////

    /**
     * Operation listslGet
     *
     * Fetch list of Family Planning (for select options).
     *
     *
     * @return Http response
     */
    public function listsFamilyplanningGet()
    {
        $response = Familyplanning::all();
        return response()->json($response, 200);
    }
    /**
     * Operation listsFamilyplanningFamilyplanningIdGet
     *
     * Fetch a FamilyPlanning item specified by familyplanningId.
     *
     * @param int $familyplanning_id ID of FamilyPlanning item (required)
     *
     * @return Http response
     */
    public function listsFamilyplanningByIdGet($familyplanning_id)
    {
        $response = FamilyPlanning::findOrFail();
        return response()->json($response, 200);
    }
    /**
     * Operation listsFamilyplanningPost
     *
     * create a FamilyPlanning item.
     *
     *
     * @return Http response
     */
    public function listsFamilyplanningPost()
    {
        $input = Request::all();
        $new_familyPlan = FamilyPlanning::create($input);
        if($new_familyPlan){
            return response()->json(['msg' => 'Created a new Family plan']);
        }else{
            return response('Oops, seems like something went wrong while trying to create a new family plan');
        }
    }
    /**
     * Operation listsFamilyplanningFamilyplanningIdPut
     *
     * Update an existing FamilyPlanning item.
     *
     * @param int $familyplanning_id ID of FamilyPlanning item (required)
     *
     * @return Http response
     */
    public function listsFamilyplanningPut($familyplanning_id)
    {
        $input = Request::all();
        $family_plan = FamilyPlanning::findOrFail($familyplanning_id);
        $family_plan->update(['name' => $input['name']]);
        if($family_plan->save()){
            return response()->json(['msg' => 'Updated family plan'], 200);
        }else{
            return response('Oops, seems like something went wrong while trying to update a plan');
        }
    }
    /**
     * Operation listsFamilyplanningFamilyplanningIdDelete
     *
     * Deletes a FamilyPlanning item specified by familyplanningId.
     *
     * @param int $familyplanning_id ID of FamilyPlanning item (required)
     *
     * @return Http response
     */
    public function listsFamilyplanningDelete($familyplanning_id)
    {
        FamilyPlanning::destroy($familyplanning_id);
        return response()->json(['msg' => 'deleted family plan'], 200);
    }


    // ///////////////////////
    //  Illnesses           //
    // //////////////////////

    /**
     * Operation listsIllnessesGet
     *
     * Fetch list of Illnessess(for select options).
     *
     *
     * @return Http response
     */
    public function listsIllnessesGet()
    {
        $response = Illnesses::all();
        return response()->json($response, 200);
    }
    /**
     * Operation listsIllnessesIllnessIdGet
     *
     * Fetch a Illness specified by illnessId.
     *
     * @param int $illness_id ID of FamilyPlanning item (required)
     *
     * @return Http response
     */
    public function listsIllnessesByIdGet($illness_id)
    {
        $response = Illnesses::findOrFail($illness_id);
        return response()->json($response, 200);
    }
    /**
     * Operation listsIllnessesPost
     *
     * Add an illness.
     *
     *
     * @return Http response
     */
    public function listsIllnessesPost()
    {
        $input = Request::all();
        $new_illness = Illnesses::create($input);
        if($new_illness){
            return response()->json(['msg' => 'Created new illness'],200);
        }else{
            return response('Oops, it seems like something went wrong while trying to create a new illness');
        }
    }
    /**
     * Operation listsIllnessesIllnessIdPut
     *
     * Update an existing Illness specified by illnessId.
     *
     * @param int $illness_id ID of FamilyPlanning item (required)
     *
     * @return Http response
     */
    public function listsIllnessesPut($illness_id)
    {
        $input = Request::all();
        $illness = Illnesses::findOrFail($illness_id);
        $illness->update(['name' => $input['name']]);
        if($illness->save()){
            return response()->json(['msg' => 'Updated Illness'], 200);
        }else{
            return response('Oops, it seems like something went wrong while trying to update the illness');
        }
    }
    /**
     * Operation listsIllnessesIllnessIdDelete
     *
     * Deletes a FamilyPlanning item specified by familyplanningId.
     *
     * @param int $illness_id ID of FamilyPlanning item (required)
     *
     * @return Http response
     */
    public function listsIllnessesDelete($illness_id)
    {
        Illnesses::destroy($illness_id);
        return response()->json(['msg' => 'Deleted illness']);
    }


    // ///////////////////////
    // Services            //
    // //////////////////////

    /**
     * Operation listsServicesGet
     *
     * Fetch Drug Allergies  (for select options).
     *
     *
     * @return Http response
     */
    public function listsServicesGet()
    {
        $response = Services::with('regimen')->get();
        return response()->json($response,200);
    }
    /**
     * Operation listsServicesServiceIdGet
     *
     * Fetch Service specified by serviceId.
     *
     * @param int $service_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsServicesByIdGet($service_id)
    {
        $response = Services::findOrFail($service_id);
        return response()->json($response,200);
    }
    /**
     * Operation listsServicesPost
     *
     * create a service.
     *
     *
     * @return Http response
     */
    public function listsServicesPost()
    {
        $input = Request::all();
        $new_serivce = Services::create($input);
        if($new_serivce){
            return response()->json(['msg'=> 'Created a new service'],200);
        }else{
            return response('Oops, seems like something went wrong while trying to create a new service');
        }
    }
    /**
     * Operation listsServicesServiceIdPut
     *
     * Update an existing Service.
     *
     * @param int $service_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsServicesPut($service_id)
    {
        $input = Request::all();
        $service = Services::findOrFail($service_id);
        $service->update(['name' => $input['name']]);
        if($service->save()){
            return response()->json(['msg' => 'Updated service']);
        }else{
            return response('Oops, it seems like somthing went wrong while trying to update the servie');
        }
    }
    /**
     * Operation listsServicesServiceIdDelete
     *
     * Deletes a service specified by serviceId.
     *
     * @param int $service_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsServicesDelete($service_id)
    {
        $serive = Services::destroy($service_id);
        if($serive){
            return response()->json(['msg' => 'Deleted the servie']);
        }else{
            return response('Oops, seems like something went wrong while deleting the service');
        }
    }

    // ///////////////////////////
    // Changereasons functions //
    // /////////////////////////

    /**
     * Operation listsChangereasonGet
     *
     * Fetch Change Reasons (for select options).
     *
     *
     * @return Http response
     */
    public function listsChangereasonget()
    {
        $response = ChangeReason::all();
        return response()->json($response, 200);
    }
    /**
     * Operation listsChangereasonChangereasonIdGet
     *
     * Fetch Change Reason specified by changereasonId.
     *
     * @param int $changereason_id ID of Change Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsChangereasonByIdget($changereason_id)
    {
        $response = ChangeReason::findOrFail($changereason_id);
        return response()->json($response, 200);

    }
    /**
     * Operation listsChangereasonPost
     *
     * create a Change Reason.
     *
     *
     * @return Http response
     */
    public function listsChangereasonpost()
    {
        $input = Request::all();
        $new_reason = ChangeReason::create($input);
        if($new_reason){
            return $this->response->created();
        }else{
            return $this->response->errorBadRequest(); 
        }
    }
    /**
     * Operation listsChangereasonChangereasonIdPut
     *
     * Update an existing Change Reason.
     *
     * @param int $changereason_id ID of Change Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsChangereasonput($changereason_id)
    {
        $input = Request::all();
        $reason = ChangeReason::findOrFail($changereason_id);
        $reason->update([ 'name' => $input['name'] ]);
        if($reason->save()){
            return response()->json(['msg' => 'Updated change']);
        }else{
            return response('Oops, seems like something went wrong while trying to update reason');
        }
    }
    /**
     * Operation listsChangereasonChangereasonIdDelete
     *
     * Deletes a Change Reason specified by changereasonId.
     *
     * @param int $changereason_id ID of Change Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsChangereasondelete($changereason_id)
    {
        $deleted_change = ChangeReason::destroy($changereason_id);
        if($deleted_change){
            return response()->json(['msg'=>'deleted reason']);
        }
    }

    // ///////////////////////////
    // Generic functions       // 
    // /////////////////////////

    /**
     * Operation listsGenericGet
     *
     * Fetch list of Generic items(for select options).
     *
     *
     * @return Http response
     */
    public function listsGenericget()
    {
        $response = Generic::all();
        return response()->json($response,200);
    }
    /**
     * Operation listsGenericGenericIdGet
     *
     * Fetch a Generic item specified by genericId.
     *
     * @param int $generic_id ID of Generic item (required)
     *
     * @return Http response
     */
    public function listsGenericgenericByIdget($generic_id)
    {
        $generic = Generic::findOrFail($generic_id);
        return response()->json($generic,200);
    }
    /**
     * Operation listsGenericPost
     *
     * Add an generic item.
     *
     *
     * @return Http response
     */
    public function listsgenericpost()
    {
        $input = Request::all();
        $new_generic = Generic::create($input);
        if($new_generic){
            return response()->json(['msg' => 'Created new generic']);
        }else{
            return response('Oops, seemes like something went wrong while trying to create a new generic');
        }
    }
    /**
     * Operation listsGenericGenericIdPut
     *
     * Update an existing Generic item specified by genericId.
     *
     * @param int $generic_id ID of Generic item (required)
     *
     * @return Http response
     */
    public function listsgenericGenericput($generic_id)
    {
        $input = Request::all();
        $generic = Generic::findOrFail($generic_id);
        $generic->update(['name' => $input['name']]);
        if($generic->save()){
            return response()->json(['msg' => 'Updated generic']);
        }else{
            return response('Oops, seems like there was a problem updating the generic');
        }
    }
    /**
     * Operation listsGenericGenericIdDelete
     *
     * Deletes a Generic item specified by genericId.
     *
     * @param int $generic_id ID of Generic item (required)
     *
     * @return Http response
     */
    public function listsGenericdelete($generic_id)
    {
        $deleted_generic = Generic::destroy($generic_id);
        if($deleted_generic){
            return response()->json(['msg' => 'Deleted generic']);
        }
    }

    // /////////////////////////////
    // Drug instruction functions// 
    // ///////////////////////////

    /**
     * Operation listsInstructionGet
     *
     * Fetch list ofInstructionsIllnessess(for select options).
     *
     *
     * @return Http response
     */
    public function listsInstructionget()
    {
        $response = Instruction::all();
        return response()->json($response,200);
    }
    /**
     * Operation listsInstructionInstructionIdGet
     *
     * Fetch a Instruction specified by instructionId.
     *
     * @param int $instruction_id ID of Instruction item (required)
     *
     * @return Http response
     */
    public function listsInstructionByIdget($instruction_id)
    {
        $instruction = Instruction::findOrFail($instruction_id);
        return response()->json($instruction,200);
    }
    /**
     * Operation listsInstructionPost
     *
     * Add an illness.
     *
     *
     * @return Http response
     */
    public function listsInstructionpost()
    {
        $input = Request::all();
        $new_instruction = Instruction::create($input);
        if($new_instruction){
            return response()->json(['msg' => 'Wrote new instruction']);
        }else{
            return response('Oops, seems like something went wrong while trying to create a new instruction');
        }
    }
    /**
     * Operation listsInstructionInstructionIdPut
     *
     * Update an existing Illness specified by instructionId.
     *
     * @param int $instruction_id ID of Instruction item (required)
     *
     * @return Http response
     */
    public function listsInstructionput($instruction_id)
    {
        $input = Request::all();
        $instruction = Instruction::findOrFail($instruction_id);
        $instruction->update(['name' => $input['name']]);
        if($instruction->save()){
            return response()->json(['msg'=> 'Updated Instruction']);
        }else{
            return response('Oops, seems like something went wrong while trying to update instruction');
        }
    }
    /**
     * Operation listsInstructionInstructionIdDelete
     *
     * Deletes a Instruction item specified by instructionId.
     *
     * @param int $instruction_id ID of Instruction item (required)
     *
     * @return Http response
     */
    public function listsInstructiondelete($instruction_id)
    {
        $deleted_instruction = Instruction::destroy($instruction_id);
        if($deleted_instruction){
            return response()->json(['msg' => 'Deleted instruction']);
        }
    }

    // /////////////////////////////
    // Nonaadherence functions   //
    // ///////////////////////////

    /**
     * Operation listsNonaadherencereasonGet
     *
     * Fetch Non-Adherence Reasons  (for select options).
     *
     *
     * @return Http response
     */
    public function listsNonaadherencereasonget()
    {
        $response = NonAdherenceReason::all();
        return response()->json($response,200);
    }

    /**
     * Operation listsNonadherenceNonadherenceIdGet
     *
     * Fetch Non-Adherence Reason specified by nonadherenceId.
     *
     * @param int $nonadherence_id ID of Non-Adherence Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsNonadherencebyIdget($nonadherence_id)
    {
        $reason = NonAdherenceReason::findOrFail($nonadherence_id);
        return response()->json($reason,200);
    }
    /**
     * Operation listsNonaadherencereasonPost
     *
     * create a Non-Adherence Reason.
     *
     *
     * @return Http response
     */
    public function listsNonaadherencereasonpost()
    {
        $input = Request::all();
        $new_reason = NonAdherenceReason::create($input);
        if($new_reason){
            return response()->json(['msg' => 'Created new NonAdherence Reason']);
        }else{
            return response('Oops, seems like something went wrong while trying to create a new NonAdherence Reason');
        }
    }
    /**
     * Operation listsNonadherenceNonadherenceIdPut
     *
     * Update an existing Non-Adherence Reason.
     *
     * @param int $nonadherence_id ID of Non-Adherence Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsNonadherenceput($nonadherence_id)
    {
        $input = Request::all();
        $reason = NonAdherenceReason::findOrFail($nonadherence_id);
        $reason->update(['name'=>$input['name']]);
        if($reason->save()){
            return response()->json(['msg' => 'Updated NonAdherence Reason']);
        }else{
            return response('Oops, seems like something went wrong while trying to update the NonAdherence Reason');
        }
    }
    /**
     * Operation listsNonadherenceNonadherenceIdDelete
     *
     * Deletes a Non-Adherence Reason specified by nonadherenceId.
     *
     * @param int $nonadherence_id ID of Non-Adherence Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsNonadherencedelete($nonadherence_id)
    {
        $deleted_nonAdherenceReason = NonAdherenceReason::destroy($nonadherence_id);
        if($deleted_nonAdherenceReason){
            return response()->json(['msg' => 'Deleted NonAdherenceReason']);
        }
    }

    // /////////////////////////////
    // Sources functions         //
    // ///////////////////////////

    /**
     * Operation listsPatientsourcesGet
     *
     * Fetch Sources list  (for select options).
     *
     *
     * @return Http response
     */
    public function listsPatientsourcesget()
    {
        $response = Sources::all(); 
        return response()->json($response, 200);
    }
    /**
     * Operation listsPatientsourcesPatientsourcesIdGet
     *
     * Fetch Source specified by patientsourcesId.
     *
     * @param int $patientsources_id ID of Source that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPatientsourcesByIdget($patientsources_id)
    {
        $source = Sources::findOrFail($patientsources_id);
        return response()->json($source,200);
    }
    /**
     * Operation listsPatientsourcesPost
     *
     * create a Source.
     *
     *
     * @return Http response
     */
    public function listsPatientsourcespost()
    {
        $input = Request::all();
        $new_source = Sources::create($input);
        if($new_source){
            return response()->json(['msg' => 'Added a new patient source']);
        }else{
            return response('Oops, seems like something went wrong while trying to add a new source');
        }
    }
    /**
     * Operation listsPatientsourcesPatientsourcesIdPut
     *
     * Update an existing Source.
     *
     * @param int $patientsources_id ID of Source that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPatientsourcesput($patientsources_id)
    {
        $input = Request::all();
        $source = Sources::findOrFail($patientsources_id);
        $source->update(['name' => $input['name']]);
        if($source->save()){
            return response()->json(['msg' => 'Update patient source']);
        }else{
            return response('Oops, seems like something went wrong while trying to update the source');
        }
    }
    /**
     * Operation listsPatientsourcesPatientsourcesIdDelete
     *
     * Deletes a Source specified by patientsourcesId.
     *
     * @param int $patientsources_id ID of Source that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPatientsourcesdelete($patientsources_id)
    {
        $deleted_source = Sources::destroy($patientsources_id);
        if($deleted_source){
            return response()->json(['msg' => 'Deleted patient source']);
        }
    }

    // /////////////////////////////
    // Pepreason functions       // 
    // ///////////////////////////

    /**
     * Operation listsPepreasonGet
     *
     * Fetch PEP Reasons  (for select options).
     *
     *
     * @return Http response
     */
    public function listsPepreasonget()
    {
        $response = Pepreason::all();
        return response()->json($response,200);
    }
    /**
     * Operation listsPepreasonPepreasonIdGet
     *
     * Fetch PEP Reason specified by pepreasonId.
     *
     * @param int $pepreason_id ID of PEP Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPepreasonByIdget($pepreason_id)
    {
        $pep = Pepreason::findOrFail($pepreason_id);
        return response()->json($pep,200);
    }

    /**
     * Operation listsPepreasonPost
     *
     * create a PEP Reason.
     *
     *
     * @return Http response
     */
    public function listsPepreasonpost()
    {
        $input = Request::all();
        $new_pepreaosn = Pepreason::create($input);
        if($new_pepreaosn){
            return response()->json(['msg' => 'Added a new pep reason']);
        }else{
            return response('Oops, it seems like there was a problem adding the pep reason');
        }
    }
    /**
     * Operation listsPepreasonPepreasonIdPut
     *
     * Update an existing PEP Reason.
     *
     * @param int $pepreason_id ID of PEP Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPepreasonput($pepreason_id)
    {
        $input = Request::all();
        $pep = Pepreason::findOrFail($pepreason_id);
        $pep->update(['name' => $input['name']]);
        if($pep->save()){
            return response()->json(['msg' => 'Update pep reason']);            
        }else{
            return response('Oops, it seems like there was a problem updating the pep reason');
        }
    }
    /**
     * Operation listsPepreasonPepreasonIdDelete
     *
     * Deletes a PEP Reason specified by pepreasonId.
     *
     * @param int $pepreason_id ID of PEP Reason that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPepreasondelete($pepreason_id)
    {
        $deleted_pepreason = Pepreason::destroy($pepreason_id);
        if($deleted_pepreason){
            return response()->json(['msg' => 'Deleted pep reason']);
        }
    }

    // /////////////////////////////
    // Prophylaxis functions     //
    // ///////////////////////////

    /**
     * Operation listsProphylaxisGet
     *
     * Fetch Prophylaxis  (for select options).
     *
     *
     * @return Http response
     */
    public function listsProphylaxisget()
    {
        $response = Prophylaxis::all();
        return response()->json($response,200);
    }
    /**
     * Operation listsProphylaxisProphylaxisIdGet
     *
     * Fetch Prophylaxis specified by prophylaxisId.
     *
     * @param int $prophylaxis_id ID of Prophylaxis that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsProphylaxisByIdget($prophylaxis_id)
    {
        $prophylaxis = Prophylaxis::findOrFail($prophylaxis_id);
        return response()->json($prophylaxis,200);
    }
    /**
     * Operation listsProphylaxisPost
     *
     * create a Prophylaxis.
     *
     *
     * @return Http response
     */
    public function listsProphylaxispost()
    {
        $input = Request::all();
        $new_prophylaxis = Prophylaxis::create($input);
        if($new_prophylaxis){
            return response()->json(['msg' => 'Added a new Prophylaxis']);
        }else{
            return response('Oops, it seems like there was a problem adding the Prophylaxis');
        }
    }
    /**
     * Operation listsProphylaxisProphylaxisIdPut
     *
     * Update an existing Prophylaxis.
     *
     * @param int $prophylaxis_id ID of Prophylaxis that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsProphylaxisput($prophylaxis_id)
    {
        $input = Request::all();
        $prophylaxis = Prophylaxis::findOrFail($prophylaxis_id);
        $prophylaxis->update(['name' => $input['name']]);
        if($prophylaxis->save()){
            return response()->json(['msg' => 'Updated Prophylaxis']);
        }else{
            return response('Oops, it seems like there was a problem updating the Prophylaxis');
        }
    }
    /**
     * Operation listsProphylaxisProphylaxisIdDelete
     *
     * Deletes a Prophylaxis specified by prophylaxisId.
     *
     * @param int $prophylaxis_id ID of Prophylaxis that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsProphylaxisdelete($prophylaxis_id)
    {
        $deleted_prophylaxis = Prophylaxis::destroy($prophylaxis_id);
        if($deleted_prophylaxis){
            return response()->json(['msg' => 'Deleted Prophylaxis']);
        }
    }

    // /////////////////////////////
    // Purpose functions         //
    // ///////////////////////////
    /**
     * Operation listsPurposeGet
     *
     * Fetch Purpose list  (for select options).
     *
     *
     * @return Http response
     */
    public function listsPurposeget()
    {
        $response = Purpose::all();
        return response()->json($response,200);
    }
    /**
     * Operation listsPurposePurposeIdGet
     *
     * Fetch Purpose specified by purposeId.
     *
     * @param int $purpose_id ID of Purpose that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPurposeByIdget($purpose_id)
    {
        $purpose = Purpose::findOrFail($purpose_id);
        return response()->json($purpose,200);
    }
    /**
     * Operation listsPurposePost
     *
     * create a Purpose.
     *
     *
     * @return Http response
     */
    public function listsPurposepost()
    {
        $input = Request::all();
        $new_purpose = Purpose::create($input);
        if($new_purpose){
            return response()->json(['msg' => 'Added a new Purpose']);
        }else{
            return response('Oops, it seems like there was a problem adding the Purpose');
        }
    }
    /**
     * Operation listsPurposePurposeIdPut
     *
     * Update an existing Purpose.
     *
     * @param int $purpose_id ID of Purpose that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPurposeput($purpose_id)
    {
        $input = Request::all();
        $purpose = Purpose::findOrFail($purpose_id);
        $purpose->update(['name' => $input['name']]);
        if($purpose->save()){
            return response()->json(['msg' => 'Update Purpose']);
        }else{
            return response('Oops, it seems like there was a problem updating the Purpose');
        }
    }
    /**
     * Operation listsPurposePurposeIdDelete
     *
     * Deletes a Purpose specified by purposeId.
     *
     * @param int $purpose_id ID of Purpose that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsPurposedelete($purpose_id)
    {
        $deleted_purpose = Purpose::destroy($purpose_id);
        if($deleted_purpose){
            return response()->json(['msg' => 'Deleted Purpose']);
        }
    }

    // /////////////////////////////
    // Whostage functions        //
    // ///////////////////////////
    /**
     * Operation listsWhostageGet
     *
     * Fetch Drug Allergies  (for select options).
     *
     *
     * @return Http response
     */
    public function listsWhostageget()
    {
        $response = WhoStage::all();
        return response()->json($response,200);
    }
    /**
     * Operation listsWhostageWhostageIdGet
     *
     * Fetch a list of WHO stages specified by whostageId.
     *
     * @param int $whostage_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsWhostageByIdget($whostage_id)
    {
        $who = whostage::findOrFail($whostage_id);
        return response()->json($who,200);
    }
    /**
     * Operation listsWhostagePost
     *
     * create a service.
     *
     *
     * @return Http response
     */
    public function listsWhostagepost()
    {
        $input = Request::all();
        $new_who = whostage::create($input);
        if($new_who){
            return response()->json(['msg' => 'Added a new who stage']);
        }else{
            return response('Oops, it seems like there was a problem adding the whostage');
        }
    }
    /**
     * Operation listsWhostageWhostageIdPut
     *
     * Update an existing Who Stage.
     *
     * @param int $whostage_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsWhostageput($whostage_id)
    {
        $input = Request::all();
        $who = whostage::findOrFail($whostage_id);
        $who->update(['name' => $input['name']]);
        if($who->save()){
            return response()->json(['msg' => 'Update who stage']);
        }else{
            return response('Oops, it seems like there was a problem updating the whostage');
        }
    }
    /**
     * Operation listsWhostageWhostageIdDelete
     *
     * Deletes a service specified by whostageId.
     *
     * @param int $whostage_id ID of Service that needs to be fetched (required)
     *
     * @return Http response
     */
    public function listsWhostagedelete($whostage_id)
    {
        $deleted_who = whostage::destroy($whostage_id);
        if($deleted_who){
            return response()->json(['msg' => 'Deleted who stage']);
        }
    }


    // ///////////////////////
    // Temp functions      //
    // //////////////////////

    public function sub_county(){
        $response = Sub_county::all();
        return response()->json($response, 200);
    }

    public function type(){
        $response = FacilityTypes::all();
        return response()->json($response, 200);
    }
}
