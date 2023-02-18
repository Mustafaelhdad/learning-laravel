<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class SecondController extends Controller
{
    public function __construct() {
        $this -> middleware('auth') -> except('showString1');
    }
    public function showString() {
        return 'static string';
    }
    public function showString1() {
        return 'static string';
    }
    public function showString2() {
        return 'static string';
    }
}
