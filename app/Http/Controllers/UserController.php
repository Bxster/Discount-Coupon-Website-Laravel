<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Aziende;
use App\Models\Promozioni;


class UserController extends Controller
{
    protected $_userModel;
    protected $_aziende;
    protected $_promozioni;
    

    public function __construct() {
        $this->_userModel = new User;
        $this->middleware('can:isUser');
        $this->_aziende = new Aziende;
        $this->_promozioni = new Promozioni;
    }
    public function index()
    {
        return view('home');
    }



}
