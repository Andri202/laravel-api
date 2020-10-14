<?php

namespace App\Http\Controllers;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    /**
     *  @params Person $person
     *  @return PersonResource
     * 
     */

    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    /**
     * 
     *  @return PersonResourceCollection
     * 
     */

    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());

    }
}
