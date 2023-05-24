<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
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
        $topFaq = $this->_faq->getFaq();

        return view('faqs')->with('faqs', $topFaq);
    }
}