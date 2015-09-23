<?php
/**
 * Test file for Notepad++ Function List plugin (PHP5 Language rules)
 * https://github.com/gwarnants/FunctionList-PHP-Patch
 *
 * @author  Geoffray Warnants (http://geoffray.be)
 * @version 1.0.20120417
 */


/**
 * INCLUDE
 */
include 'included_1.php';
include('included_2.php');
include "included_3.php";
include("included_4.php");
include_once 'included_once_1.php';
include_once('included_once_2.php');
include_once "included_once_3.php";
include_once("included_once_4.php");

/**
 * REQUIRE
 */
require 'required_1.php';
require('required_2.php');
require "required_3.php";
require("required_4.php");
require_once 'required_once_1.php';
require_once('required_once_2.php');
require_once "required_once_3.php";
require_once("required_once_4.php");

/**
 * NAMESPACE
 */
use Class1;

/**
 * CONSTANTS
 */
define('CONSTANT_1', 1);

/**
 * INTERFACE
 */
interface iInterface1
{
}

/**
 * FUNCTION
 */
function global_function()
{
}

/**
 * ClASS
 */
abstract class Class1
{

    /**
     * CLASS CONSTANTS
     */
    const CLASS_CONSTANT_1 = 1;

    /**
     * PUBLIC PROPERTIES
     */
    public $public_property_1;
    var $public_property_2;     /* PHP4 style */

    /**
     * PUBLIC STATIC PROPERTIES
     */
    static $public_static_property_1;
    public static $public_static_property_2;
    static public $public_static_property_3;

    /**
     * PROTECTED PROPERTIES
     */
    protected $protected_property_1;

    /**
     * PROTECTED STATIC PROPERTIES
     */
    protected static $protected_static_property_1;
    static protected $protected_static_property_2;

    /**
     * PRIVATE PROPERTIES
     */
    private $private_property_1;

    /**
     * PRIVATE STATIC PROPERTIES
     */
    private static $private_static_property_1;
    static private $private_static_property_2;

    /**
     * CONSTRUCTOR
     */
    function __construct()
    {
    }

    public function __construct()
    {
    }

    /**
     * PUBLIC METHOD
     */
    function public_method_1()
    {
    }

    public function public_method_2()
    {
    }

    /**
     * PUBLIC STATIC METHOD
     */
    static function public_static_method_1()
    {
    }

    public static function public_static_method_2()
    {
    }

    static public function public_static_method_3()
    {
    }

    static final function public_static_method_4()
    {
    }

    public static final function public_static_method_5()
    {
    }

    /**
     * PUBLIC ABSTRACT METHOD
     */
    abstract function public_abstract_method_1($arg1);

    public abstract function public_abstract_method_2();

    abstract public function public_abstract_method_3();

    abstract static function public_abstract_method_4();

    static abstract function public_abstract_method_5();

    static public abstract function public_abstract_method_6();

    public static abstract function public_abstract_method_7();

    abstract public static function public_abstract_method_8();

    /**
     * PUBLIC FINAL METHOD
     */
    final function public_final_method_1()
    {
    }

    final public function public_final_method_2()
    {
    }

    public final function public_final_method_3()
    {
    }

    final static function public_final_method_4()
    {
    }

    final static public function public_final_method_5()
    {
    }

    public final static function public_final_method_6()
    {
    }

    /**
     * PROTECTED METHOD
     */
    protected function protected_method_1()
    {
    }

    /**
     * PROTECTED STATIC METHOD
     */
    protected static function protected_static_method_1()
    {
    }

    protected static final function protected_static_method_2()
    {
    }

    static protected function protected_static_method_3()
    {
    }

    static final protected function protected_static_method_4()
    {
    }

    static protected final function protected_static_method_5()
    {
    }

    /**
     * PROTECTED ABSTRACT METHOD
     */
    protected abstract function protected_abstract_method_1();

    static protected abstract function protected_abstract_method_2();

    protected static abstract function protected_abstract_method_3();

    protected abstract static function protected_abstract_method_4();

    abstract protected function protected_abstract_method_5();

    static abstract protected function protected_abstract_method_6();

    abstract static protected function protected_abstract_method_7();

    abstract protected static function protected_abstract_method_8();

    /**
     * PROTECTED FINAL METHOD
     */
    protected final function protected_final_method_1()
    {
    }

    protected final static function protected_final_method_2()
    {
    }

    final protected function protected_final_method_3()
    {
    }

    final protected static function protected_final_method_4()
    {
    }

    final static protected function protected_final_method_5()
    {
    }

    /**
     * PRIVATE METHOD
     */
    private function private_method_1()
    {
    }

    private final function private_method_2()
    {
    }

    final private function private_method_3()
    {
    }

    /**
     * PRIVATE STATIC METHOD
     */
    private static function private_static_method_1()
    {
    }

    private static final function private_static_method_2()
    {
    }

    static private function private_static_method_3()
    {
    }

    static final private function private_static_method_4()
    {
    }

    static private final function private_static_method_5()
    {
    }

    /*
     * METHOD WITH ARGUMENTS
     */
    function method_with_args_1($arg1, $arg2)
    {
    }

    function method_with_args_2($arg1="hello", $arg2=false)
    {
    }

    function method_with_args_3(array $arg1=array())
    {
    }

    function method_with_args_4($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8)
    {
    }

    // known issue: duplicate spaces are not ignored
    function method_with_args_5($arg1,
        $arg2,
        $arg3,
        $arg4)
    {
    }

    /*
     * BRACKET STYLES
     */
    function method_style_1() {}

    function method_style_2() {
    }

    function method_style_3 ()
    {
    }

}
