<?php

namespace App\Http\Controllers;

use App\Models\Staycation;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaycationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:staycation-list|staycation-create|staycation-edit|staycation-delete', ['only' => ['index','show','display']]);
         $this->middleware('permission:staycation-create', ['only' => ['create','store']]);
         $this->middleware('permission:staycation-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:staycation-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('Super-Admin') || Auth::user()->hasRole('Admin')){

        $staycations = Staycation::latest()->paginate(5);

        return view('staycations.index',compact('staycations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        else{
        $staycations = Staycation::where('userid', Auth::id())->latest()->paginate(5);

        return view('staycations.index',compact('staycations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }


    }

    public function indexes()
    {
        $staycations = Staycation::latest()->paginate(5);

            return view('home',compact('staycations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function indexess(Request $request)
    {

        if(!$request->ajax()){
            $staycations=Staycation::latest()->paginate(6);

            return view('imagegallery',compact('staycations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            }
            else if($request->ajax()){
                $selectedType = $request->selectedType;
                $selectedPlace = $request->selectedPlace;
                $checkAmenities=$request->amenities;
                $guestNumber=$request->guestNumber;
                $numberBed=$request->numberBed;
                $numberBedrooms=$request->numberBedrooms;
                $checkFavorite=$request->guestFavorite;
                $inputPrice=$request->inputPrice;
                $inputlocation=$request->inputlocation;


                //all --selectedType and selectedPlace
                if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

                }
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities=="" && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities=="" && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                //not all  --selectedType and selectedPlace
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&&$checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities=="" && $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                //all selectedType !all selectedPlace 0amenities
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //!all selectedType all selectedPlace 0amenities
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                //diko alam anong nangyare dito
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //new
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }



                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                //no price
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&&$checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities=="" && $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                //all selectedType !all selectedPlace 0amenities
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //!all selectedType all selectedPlace 0amenities
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                //diko alam anong nangyare dito
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //new without price
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation==""&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation==""&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }






                //same condition with inputlocation
                if($selectedType=="all" && $selectedPlace=="all" &&$inputlocation&& $checkAmenities==""&& $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)
                    ->where('address','LIKE', '%' . $inputlocation . '%')->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation && $checkAmenities==""&& $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

                }
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation&& $checkAmenities && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation&& $checkAmenities && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation&& $checkAmenities && $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation&& $checkAmenities && $checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::whereJsonContains('amenities',$checkAmenities)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation&& $checkAmenities=="" && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //no price
                else if($selectedType=="all" && $selectedPlace=="all"&&$inputlocation&& $checkAmenities=="" && $checkFavorite && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                //not all  --selectedType and selectedPlace
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&&$checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities=="" && $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                //all selectedType !all selectedPlace 0amenities
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //!all selectedType all selectedPlace 0amenities
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                //diko alam anong nangyare dito
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //new
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }



                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->where('price','<=',$inputPrice)->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                //no price
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&&$checkFavorite=="" && $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities=="" && $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)->where('numberGuest','>=',$guestNumber)
                    ->where('numberBed','>=',$numberBed)->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(5);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                //all selectedType !all selectedPlace 0amenities
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //!all selectedType all selectedPlace 0amenities
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                else if($selectedType!="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


                //diko alam anong nangyare dito
                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }
                //new without price
                else if($selectedType=="all"&& $selectedPlace!="all"&&$inputlocation&& $checkAmenities && $checkFavorite==""&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('typeofPlace',$selectedPlace)
                    ->whereJsonContains('amenities',$checkAmenities)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }

                else if($selectedType!="all"&& $selectedPlace=="all"&&$inputlocation&& $checkAmenities==""&& $checkFavorite&& $guestNumber && $numberBed && $numberBedrooms &&$inputPrice==""){
                    $staycations=Staycation::
                    where('privacyType',$selectedType)
                    ->whereJsonContains('guestFavorite',$checkFavorite)
                    ->where ('numberGuest','>=',$guestNumber)->where('numberBed','>=',$numberBed)
                    ->where('numberBedrooms','>=',$numberBedrooms)
                    ->where('address','LIKE', '%' . $inputlocation . '%')
                    ->latest()->paginate(6);
                    return view('staycationFilter',compact('staycations'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
                }


            }

}





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staycations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'typeofPlace' => 'required',
            'typeofHouse' => 'required',
            'privacyType' => 'required',
            'address' => 'required',
            'numberGuest' => 'required',
            'numberBed' => 'required',
            'numberBedrooms' => 'required',
            'numberBathrooms' => 'required',
            'amenities' => 'required',
            'guestFavorite' => 'required',
            'safetyItem' => 'required',
            'mainImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subImg1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subImg2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subImg3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subImg4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'highlight' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'security' => 'required',
            'userid' => 'required',
        ]);

        $imageName = $request->mainImg->getClientOriginalName();
        $imageName1 = $request->subImg1->getClientOriginalName();
        $imageName2 = $request->subImg2->getClientOriginalName();
        $imageName3 = $request->subImg3->getClientOriginalName();
        $imageName4 = $request->subImg3->getClientOriginalName();

        $request->mainImg->move(public_path('images'), $imageName);
        $request->subImg1->move(public_path('images'), $imageName1);
        $request->subImg2->move(public_path('images'), $imageName2);
        $request->subImg3->move(public_path('images'), $imageName3);
        $request->subImg4->move(public_path('images'), $imageName4);

        $staycation = Staycation::create([
            'typeofPlace' =>  $request->input('typeofPlace'),
            'typeofHouse' =>  $request->input('typeofHouse'),
            'privacyType' =>  $request->input('privacyType'),
            'address' =>  $request->input('address'),
            'numberGuest' =>  $request->input('numberGuest'),
            'numberBed' =>  $request->input('numberBed'),
            'numberBedrooms' =>  $request->input('numberBedrooms'),
            'numberBathrooms' =>  $request->input('numberBathrooms'),
            'amenities' => json_encode($request->input('amenities')),
            'guestFavorite' => json_encode($request->input('guestFavorite')),
            'safetyItem' => json_encode($request->input('safetyItem')),
            'mainImg' => $imageName,
            'subImg1' => $imageName1,
            'subImg2' => $imageName2,
            'subImg3' => $imageName3,
            'subImg4' => $imageName4,
            'name' => $request->input('name'),
            'highlight' => json_encode($request->input('highlight')),
            'detail' => $request->input('detail'),
            'price' => $request->input('price'),
            'security' => json_encode($request->input('security')),
            'userid' => $request->input('userid'),



        ]);

        return redirect()->route('staycations.index')
                        ->with('success','Staycation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Staycation $staycation)
    {

        return view('staycations.show',compact('staycation'));

    }

    public function display(Staycation $staycation)
    {
        $idd = $staycation->userid;
        $user = User::find($idd);
        return view('staycations.display',compact('staycation','user'));
    }

    public function guestreservation(Staycation $staycation)
    {
        $idd = $staycation->userid;
        $user = User::find($idd);
        return view('staycations.guestreservation',compact('staycation','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Staycation $staycation)
    {
        return view('staycations.edit',compact('staycation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staycation $staycation)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
        ]);

        $staycation->update($request->all());

        return redirect()->route('staycations.index')
                        ->with('success','Staycation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staycation $staycation)
    {
        $staycation->delete();

        return redirect()->route('staycations.index')
                        ->with('success','Staycation deleted successfully');
    }



    public function calendar()
    {


        return view('staycations.calendar');
    }

    // public function reservation(Request $request){
    //     $reservation = Reservation::create([
    //         'staycationId' => $request->input('staycationId'),
    //         'userId' => $request->input('userId'),
    //         'dateStart' => $request->input('dateStart'),
    //         'dateEnd' => $request->input('dateEnd'),
    //         'totalPrice' => $request->input('totalPrice'),
    //         'status' => $request->input('status'),

    //     ]);

    //     return redirect('/home')
    //                     ->with('success','Please wait for the confirmation of your reservation. Thank you');
    // }






}
