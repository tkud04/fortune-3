<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Cookie;
use Validator; 
use Carbon\Carbon; 
//use Codedge\Fpdf\Fpdf\Fpdf;
use PDF;

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                      
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
                $services = $this->helpers->services;

		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();
		$plugins = $this->helpers->getPlugins();
		$banners = $this->helpers->getBanners();
		
    	return view("index",compact(['user','services','banners','pe','signals','plugins']));
    }

    /**
	 * Show the application about screen to the user.
	 *
	 * @return Response
	 */
	public function getAbout(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
                $services = $this->helpers->services;

		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();
		$plugins = $this->helpers->getPlugins();
		$banners = $this->helpers->getBanners();
		
    	return view("about",compact(['user','services','banners','pe','signals','plugins']));
    }

   /**
	 * Show the application results screen to the user.
	 *
	 * @return Response
	 */
	public function getResults(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
                $services = $this->helpers->services;

		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();
		$plugins = $this->helpers->getPlugins();
		$banners = $this->helpers->getBanners();
		
    	return view("results",compact(['user','services','banners','pe','signals','plugins']));
    
    }

   /**
	 * Show the application contact screen to the user.
	 *
	 * @return Response
	 */
	public function getContact(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
                $services = $this->helpers->services;

		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();
		$plugins = $this->helpers->getPlugins();
		$banners = $this->helpers->getBanners();
		
    	return view("contact",compact(['user','services','banners','pe','signals','plugins']));
    }

/**
	 * Show the application service screen to the user.
	 *
	 * @return Response
	 */
	public function getServices(Request $request)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
          
                $services = $this->helpers->services;
		$signals = $this->helpers->signals;
		$pe = $this->helpers->getPhoneAndEmail();
		$plugins = $this->helpers->getPlugins();
		$banners = $this->helpers->getBanners();
		
    	return view("services",compact(['user','services','banners','pe','signals','plugins']));
    }
	
	
	/**
	 * Show the application service screen to the user.
	 *
	 * @return Response
	 */
	public function getService(Request $request, $n)
    {
		$user = null;
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
                if($n == null)
                {
                  return redirect()->intended('/');
                }
                else
                {
			      $services = $this->helpers->services;
		          $signals = $this->helpers->signals;
		          $pe = $this->helpers->getPhoneAndEmail();
		           $plugins = $this->helpers->getPlugins();
		          $banners = $this->helpers->getBanners();
		
                $v = "service-".$n;
                return view($v,compact(['user','services','banners','pe','signals','plugins']));
                }
                
    }
	
	

    
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "49417647";
    	return $ret;
    }
	
	

	
}
