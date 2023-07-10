<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $_faq;
    
    public function __construct()
    {
    $this->_faq = new Faq;
    }
    public function index()
    {
        // ottiene faq principali
        $topFaq = $this->_faq->getFaq();

        return view('faqs')->with('faqs', $topFaq);
    }
}