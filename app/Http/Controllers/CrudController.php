<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected $crudService;
    public function __construct()
    {
        $crudService = $this->crudService;        
    }
}
