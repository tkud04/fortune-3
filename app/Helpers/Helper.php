<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Ads;
use App\Banners;
use App\Settings;
use App\Plugins;
use Vitalybaev\GoogleMerchant\Feed;
use Vitalybaev\GoogleMerchant\Product;
use Vitalybaev\GoogleMerchant\Product\Shipping;
use Vitalybaev\GoogleMerchant\Product\Availability\Availability;
use \Swift_Mailer;
use \Swift_SmtpTransport;
use \Cloudinary\Api;
use \Cloudinary\Api\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Codedge\Fpdf\Fpdf\Fpdf;


class Helper implements HelperContract
{

 public $signals = ['okays'=> ["contact-status" => "Message sent! Our customer service representatives will get back to you shortly.",
					 
					 //ERRORS
					 "contact-status-error" => "There was a problem sending your message, please try again.",
                     ]
                   ];


  public $countries = [
'afghanistan' => "Afghanistan",
'albania' => "Albania",
'algeria' => "Algeria",
'andorra' => "Andorra",
'angola' => "Angola",
'antigua-barbuda' => "Antigua and Barbuda",
'argentina' => "Argentina",
'armenia' => "Armenia",
'australia' => "Australia",
'austria' => "Austria",
'azerbaijan' => "Azerbaijan",
'bahamas' => "The Bahamas",
'bahrain' => "Bahrain",
'bangladesh' => "Bangladesh",
'barbados' => "Barbados",
'belarus' => "Belarus",
'belgium' => "Belgium",
'belize' => "Belize",
'benin' => "Benin",
'bhutan' => "Bhutan",
'bolivia' => "Bolivia",
'bosnia' => "Bosnia and Herzegovina",
'botswana' => "Botswana",
'brazil' => "Brazil",
'brunei' => "Brunei",
'bulgaria' => "Bulgaria",
'burkina-faso' => "Burkina Faso",
'burundi' => "Burundi",
'cambodia' => "Cambodia",
'cameroon' => "Cameroon",
'canada' => "Canada",
'cape-verde' => "Cape Verde",
'caf' => "Central African Republic",
'chad' => "Chad",
'chile' => "Chile",
'china' => "China",
'colombia' => "Colombia",
'comoros' => "Comoros",
'congo-1' => "Congo, Republic of the",
'congo-2' => "Congo, Democratic Republic of the",
'costa-rica' => "Costa Rica",
'cote-divoire' => "Cote DIvoire",
'croatia' => "Croatia",
'cuba' => "Cuba",
'cyprus' => "Cyprus",
'czech' => "Czech Republic",
'denmark' => "Denmark",
'djibouti' => "Djibouti",
'dominica' => "Dominica",
'dominica-2' => "Dominican Republic",
'timor' => "East Timor (Timor-Leste)",
'ecuador' => "Ecuador",
'egypt' => "Egypt",
'el-salvador' => "El Salvador",
'eq-guinea' => "Equatorial Guinea",
'eritrea' => "Eritrea",
'estonia' => "Estonia",
'ethiopia' => "Ethiopia",
'fiji' => "Fiji",
'finland' => "Finland",
'france' => "France",
'gabon' => "Gabon",
'gambia' => "The Gambia",
'georgia' => "Georgia",
'germany' => "Germany",
'ghana' => "Ghana",
'greece' => "Greece",
'grenada' => "Grenada",
'guatemala' => "Guatemala",
'guinea' => "Guinea",
'guinea-bissau' => "Guinea-Bissau",
'guyana' => "Guyana",
'haiti' => "Haiti",
'honduras' => "Honduras",
'hungary' => "Hungary",
'iceland' => "Iceland",
'india' => "India",
'indonesia' => "Indonesia",
'iran' => "Iran",
'iraq' => "Iraq",
'ireland' => "Ireland",
'israel' => "Israel",
'italy' => "Italy",
'jamaica' => "Jamaica",
'japan' => "Japan",
'jordan' => "Jordan",
'kazakhstan' => "Kazakhstan",
'kenya' => "Kenya",
'kiribati' => "Kiribati",
'nk' => "Korea, North",
'sk' => "Korea, South",
'kosovo' => "Kosovo",
'kuwait' => "Kuwait",
'kyrgyzstan' => "Kyrgyzstan",
'laos' => "Laos",
'latvia' => "Latvia",																																																																																							
'lebanon' => "Lebanon",
'lesotho' => "Lesotho",
'liberia' => "Liberia",
'libya' => "Libya",
'liechtenstein' => "Liechtenstein",
'lithuania' => "Lithuania",
'luxembourg' => "Luxembourg",
'macedonia' => "Macedonia",
'madagascar' => "Madagascar",
'malawi' => "Malawi",
'malaysia' => "Malaysia",
'maldives' => "Maldives",
'mali' => "Mali",
'malta' => "Malta",
'marshall' => "Marshall Islands",
'mauritania' => "Mauritania",
'mauritius' => "Mauritius",
'mexico' => "Mexico",
'micronesia' => "Micronesia, Federated States of",
'moldova' => "Moldova",
'monaco' => "Monaco",
'mongolia' => "Mongolia",
'montenegro' => "Montenegro",
'morocco' => "Morocco",
'mozambique' => "Mozambique",
'myanmar' => "Myanmar (Burma)",
'namibia' => "Namibia",
'nauru' => "Nauru",
'nepal' => "Nepal",
'netherlands' => "Netherlands",
'nz' => "New Zealand",
'nicaragua' => "Nicaragua",
'niger' => "Niger",
'nigeria' => "Nigeria",
'norway' => "Norway",
'oman' => "Oman",
'pakistan' => "Pakistan",
'palau' => "Palau",
'panama' => "Panama",
'png' => "Papua New Guinea",
'paraguay' => "Paraguay",
'peru' => "Peru",
'philippines' => "Philippines",
'poland' => "Poland",
'portugal' => "Portugal",
'qatar' => "Qatar",
'romania' => "Romania",
'russia' => "Russia",
'rwanda' => "Rwanda",
'st-kitts' => "Saint Kitts and Nevis",
'st-lucia' => "Saint Lucia",
'svg' => "Saint Vincent and the Grenadines",
'samoa' => "Samoa",
'san-marino' => "San Marino",
'sao-tome-principe' => "Sao Tome and Principe",
'saudi -arabia' => "Saudi Arabia",
'senegal' => "Senegal",
'serbia' => "Serbia",
'seychelles' => "Seychelles",
'sierra-leone' => "Sierra Leone",
'singapore' => "Singapore",
'slovakia' => "Slovakia",
'slovenia' => "Slovenia",
'solomon-island' => "Solomon Islands",
'somalia' => "Somalia",
'sa' => "South Africa",
'ss' => "South Sudan",
'spain' => "Spain",
'sri-lanka' => "Sri Lanka",
'sudan' => "Sudan",
'suriname' => "Suriname",
'swaziland' => "Swaziland",
'sweden' => "Sweden",
'switzerland' => "Switzerland",
'syria' => "Syria",
'taiwan' => "Taiwan",
'tajikistan' => "Tajikistan",
'tanzania' => "Tanzania",
'thailand' => "Thailand",
'togo' => "Togo",
'tonga' => "Tonga",
'trinidad-tobago' => "Trinidad and Tobago",
'tunisia' => "Tunisia",
'turkey' => "Turkey",
'turkmenistan' => "Turkmenistan",
'tuvalu' => "Tuvalu",
'uganda' => "Uganda",
'ukraine' => "Ukraine",
'uae' => "United Arab Emirates",
'uk' => "United Kingdom",
'usa' => "United States of America",
'uruguay' => "Uruguay",
'uzbekistan' => "Uzbekistan",
'vanuatu' => "Vanuatu",
'vatican' => "Vatican City",
'venezuela' => "Venezuela",
'vietnam' => "Vietnam",
'yemen' => "Yemen",
'zambia' => "Zambia",
'zimbabwe' => "Zimbabwe"
];


public $sender = [
			   'ss' => "smtp.gmail.com",
			   'sp' => "587",
			   'se' => "uwantbrendacolson@gmail.com",
			   'sec' => "tls",
			   'sa' => "yes",
			   'su' => "uwantbrendacolson@gmail.com",
			   'spp' => "kudayisi",
			   'sn' => "MobileBuzz",
			   ];

public $information_types = [
											    'about' => "About Us",
											    'delivery' => "Delivery and Warranty",
											    'privacy' => "Privacy Policy",
											    'terms' => "Terms and Conditions",
											    'sitemap' => "Sitemap",
											  ];

  public $adminEmail = "dunphydavid83@gmail.com";
  public $suEmail = "dunphydavid83@gmail.com";
   

  public $faqs = [
  'product' => [
   'I have pre-ordered a PS5 - when will I receive it?' => "<p>We are receiving small quantities of PS5 consoles each month - unfortunately a lot less than we need to fulfil all orders taken. Once our pre-orders have been fulfilled we will look to offer more PS5 consoles to new customers.<p><p>If you have already ordered a PS5 from us already please bear with us as we are doing our best to get more stock to fulfil your order.</p><p>If you are waiting to order a PS5 please keep an eye on our social and website for updates</p>",
   'When will you receive more PS5 stock?' => "<p>We are receiving small quantities of PS5 consoles each month - unfortunately a lot less than we need to fulfil all orders taken.</p><p>We are fulfilling all pre-orders before we will release any new stock for new orders. If you are waiting to order a PS5 please keep an eye on our social and website for updates. As soon as pre-orders are fulfilled we will release more information on how new orders can be placed. Currently we do not have a timescale for when this may be.</p>",
   'Can I pre-order a product?' => "<p>If we are accepting pre orders we will give you the option to pre-order on the product page. If it does not give this option this means that we are not accepting pre orders. You may use the notify button to be informed when the product comes into stock.</p>",
   'If a product says coming soon when is it due?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   'Do you install Appliances and TVs?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   'When will you receive more PS5 stock?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   'How does the xbox series x/s ballot work?' => "<p>If a product says coming soon we do not know when this will arrive in stock. You can opt to be notified when it arrives from the product screen and we will then email you once the product arrives back in stock.</p>",
   ],
   'ordering' => [
     'When will my order be delivered?' => "<p>As we deliver from different warehouses and offer multiple options on delivery please see the basket page before ordering for an idea of when your order will arrive. You have the option to select a day with most orders or an estimate will be given. We also send tracking details for the majority orders once they have shipped.</p>",
     'How can I cancel or amend my order?' => "<p>If you change your mind and would like to cancel an existing order then in most cases you can contact support via email or by clicking the green button at the bottom right of your screen.</p>",
     'I have been informed there is a problem with my order, what can I do?' => "<p>In the unlikely event that there’s a problem with your order, you’ll receive an email with the next steps to follow. We aim to rectify any issues as soon as possible and will keep you informed of any updates.</p>",
     'Can I place an order over the phone?' => "<p>Unfortunately we are unable to take orders over the telephone however, we are happy to help with any general or technical enquiries you may have before placing your order.</p>",
     'What time do you process orders until?' => "<p>Orders are processed and reviewed throughout the day and up to midnight. Depending on your chosen delivery date through the checkout process we will dispatch / process accordingly and if there any problems we will be in touch as soon as possible.</p>",
   ],
   'billing' => [
     'Which payment methods do you accept?' => "<p>We offer a number of payment options including MasterCard, Visa,  Maestro and PayPal. If your order is over £999, you may also be eligible for finance options.</p><p>Please see our checkout for the options that are applicable for your order as this can vary depending on the products in your basket.</p>",
     'What happens if my payment fails?' => "<p>If your payment fails, and payment is attempted multiple times, we will only receive one payment. Any failed attempts will clear from your account in 48 hours.</p>",
     'How long do refunds take?' => "<p>Please allow up to 5 working days for your payment to be refunded (excludes weekends and bank holidays).</p>",
     'Is there a charge for using certain cards or PayPal?' => "<p>There are no charges for using UK debit/credit cards or Paypal. However, corporate cards have a surcharge of 1%. In order to bring you the lowest prices, our profit margins are very low.</p><p>Due to this, we are unable to absorb the surcharges incurred when using a corporate card.</p>",
     'When do you take payment for the order?' => "<p>We take payment immediately once you have placed your order and your payment details have been authorised.</p>",
   ],
   'delivery' => [
     'I did not receive a tracking number - how do I get one?' => "<p>We ship from multiple locations using various delivery companies - some companies unfortunately do not provide us with a tracking number.</p><p>If a tracking number is available you will see it in your account or it will be emailed to you after dispatch.</p>",
     'What do I do if there are items missing from my delivery?' => "<p>In the unlikely event that there’s items missing from your delivery contact us within 48 hours.</p>",
     'Can I change my delivery address?' => "<p>We are sorry but for security reasons we cannot change the delivery address once your order has been dispatched so please make sure the delivery and billing address are correct before placing your order.</p>",
     'Can I collect my order?' => "<p>Due to COVID-19 we will no longer be offering collection from our warehouse. We have also made the difficult decision to close our showroom permanently.</p><p>Please also note that due to COVID-19 we are not currently offering the DPD Pickup service - once it is safe to do so this service will be available at checkout.</p>",
     'Do you charge for delivery to Non-UK Mainland/ROI?' => "<p>The charge for delivery to Non-UK Mainland/Northern Ireland/Ireland/North Scotland/Isle of Man is £14.95. For more information please see the delivery options and prices during the checkout process.</p>",
   ],
   'returns' => [
     'My item arrived damaged - what do I do?' => "<p>If your item arrives damaged please report this to us within 7 days of receipt along with images clearly showing the damage. This is because we only have a short window to put a claim in with our couriers. Over that time the claim is automatically rejected.</p>",
     'How do I track the progress of my return?' => "<p>You can see the status of your return in the my account section of our website. If you require further details please use the following form to contact our support team.</p>",
     'How long does the returns process take?' => "<p>Please allow up to 5 working days for testing, once tested then we will process either a repair, refund or replacement. Repair can take 30 working days with manufacturer.</p><p>PLEASE NOTE: Due to COVID 19 this process may be taking longer than usual so please bear with us.</p>",
     'What if something happens to my TV/Monitor in transit to you?' => "<p>Please provide images when setting up your return - we need images for every TV and monitor return with screens turned on.</p><p>This proves the state of the product before it was dispatched to us and will protect you and us should the unforeseeable happen during transit.</p>",
     'How long will it take for a refund to be in my account?' => "<p>Please allow up to 5 working days for your payment to be refunded (excludes weekends and bank holidays).</p>",
   ],
   'other' => [
     'Do you offer a price match service?' => "<p>We have a dedicated team of experts who check pricing against our competitors on a daily basis. However, if you do find any of our products cheaper elsewhere we will do our best to price match it.</p><p>We promise to try our best to match all prices in the UK including cashback, discount and offer codes. View more information and make your request here.</p>",
     'How do I stop receiving marketing emails?' => "<p>We add an unsubscribe link to every marketing email we send out which you can use to remove yourself from our mailing list.</p>",
     'What do I do if I am having an issue with the website?' => "<p>If you have any issues using our website or would simply like to let us know how you think it could be improved please feel free to get in touch with our support team.</p>",
     'How do I make a complaint?' => "<p>We really hope that you are happy with your purchase and the service you have received from us. However if you would like to make a formal complaint please send us an email to <a href='javascript:void(0)'>sales@mobilebuzzonline.co.uk</a></p>",
     'Do you work with streamers & influencers?' => "<p>If you are a top or up and coming influencer and you are interested in working with MobileBuzz please feel free to get in touch with our team.</p>",
   ],
 ];

public $services = [
           [
           'title' => "SEO",
           'href' => "javascript:void(0)",
           'copy' => "Control your message on the search results page to find new consumers and re-engage loyal ones. ",
           'list' => ['Technical','Content','Ecommerce','Local','Algorithm Recovery',]
           ],
           [
           'title' => "Paid Media",
           'href' => "javascript:void(0)",
           'copy' => "We dive deep into your business to craft campaigns with real and quantifiable ROI. ",
           'list' => ['Paid Search','Programmatic + Display','Paid Social','Shopping','Amazon','Video + OTT']
           ],
           [
           'title' => "Social",
           'href' => "javascript:void(0)",
           'copy' => "Scalable paid, organic, and influencer strategies to drive discovery, engage your audiences, and increase ROAS. ",
           'list' => ['Paid Social','Earned + Owned Social','Website + Experience Design',]
           ],
           [
           'title' => "Performance Creative",
           'href' => "javascript:void(0)",
           'copy' => "Blend art and science to build high-impact creative campaigns tailor-made for your targets and achieve the most return on your ad spend. ",
           'list' => ['Content','Display','Social','Video','Algorithm Recovery',]
           ],
           [
           'title' => "SEO",
           'href' => "javascript:void(0)",
           'copy' => "Control your message on the search results page to find new consumers and re-engage loyal ones. ",
           'list' => ['Technical','Content','Ecommerce','Local','Algorithm Recovery',]
           ],
           ];

     #{'msg':msg,'em':em,'subject':subject,'link':link,'sn':senderName,'se':senderEmail,'ss':SMTPServer,'sp':SMTPPort,'su':SMTPUser,'spp':SMTPPass,'sa':SMTPAuth};
           function sendEmailSMTP($data,$view,$type="view")
           {
           	    // Setup a new SmtpTransport instance for new SMTP
                $transport = "";
if($data['sec'] != "none") $transport = new Swift_SmtpTransport($data['ss'], $data['sp'], $data['sec']);

else $transport = new Swift_SmtpTransport($data['ss'], $data['sp']);

   if($data['sa'] != "no"){
                  $transport->setUsername($data['su']);
                  $transport->setPassword($data['spp']);
     }
// Assign a new SmtpTransport to SwiftMailer
$smtp = new Swift_Mailer($transport);

// Assign it to the Laravel Mailer
Mail::setSwiftMailer($smtp);

$se = $data['se'];
$sn = $data['sn'];
$to = $data['em'];
$from = isset($data['from']) ? $data['from'] : "";
$subject = $data['subject'];
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($from,$to,$subject,$se,$sn){
                           $message->from($se,$sn);
                           $message->to($to);
                          if($from != "") $message->setReplyTo($from);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
						  $message->getSwiftMessage()
						  ->getHeaders()
						  ->addTextHeader('x-mailgun-native-send', 'true');
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject,$se,$sn){
                            $message->from($se,$sn);
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }

           function bomb($data) 
           {
             $url = $data['url'];
               
			       $client = new Client([
                 // Base URI is used with relative requests
                 'base_uri' => 'http://httpbin.org',
                 // You can set any number of default request options.
                 //'timeout'  => 2.0,
				 'headers' => isset($data['headers']) && count($data['headers']) > 0 ? $data['headers'] : []
                 ]);
                  
				 
				 $dt = [
				    
				 ];
				 
				 if(isset($data['auth']))
				 {
					 $dt['auth'] = $data['auth'];
				 }
				 if(isset($data['data']))
				 {
					if(isset($data['type']) && $data['type'] == "raw")
					{
					  $dt['body'] = $data['data'];
					}
					else
					{
					  $dt['multipart'] = [];
					  foreach($data['data'] as $k => $v)
				      {
					    $temp = [
					      'name' => $k,
						  'contents' => $v
					     ];
						 
					     array_push($dt['multipart'],$temp);
				      }
					}
				   
				 }
				 
				 try
				 {
					$res = $client->request(strtoupper($data['method']),$url,$dt);
					$ret = $res->getBody()->getContents(); 
			       //dd($ret);

				 }
				 catch(RequestException $e)
				 {
					dd($e);
					# $mm = (is_null($e->getResponse())) ? null: Psr7\str($e->getResponse());
					 $mm = (is_null($e->getResponse())) ? null: $e->getResponse();
					 $ret = json_encode(["status" => "error","message" => $mm]);
				 }
			     $rett = json_decode($ret);
           return $ret; 
           }
		   
		   function text($data) 
           {
           	//form query string
              // $qs = "sn=".$data['sn']."&sa=".$data['sa']."&subject=".$data['subject'];

               $lead = $data['to'];
			   
			   if($lead == null || $lead == "")
			   {
				    $ret = json_encode(["status" => "error","message" => "Invalid number"]);
			   }
			   else
			    { 
                  
			       $url = "https://smartsmssolutions.com/api/?";
			       $url .= "message=".urlencode($data['msg'])."&to=".$data['to'];
			       $url .= "&sender=Etuk+NG&type=0&routing=3&token=".env('SMARTSMS_API_X_KEY', '');
			      #dd($url);
				  
                  $dt = [
				       'headers' => [
					     'Content-Type' => "text/html"
					   ],
                       'method' => "get",
                       'url' => $url
                  ];
				
				 $ret = $this->bomb($dt);
				 #dd($ret);
				 $smsData = explode("||",$ret);
				 if(count($smsData) == 2)
				 {
					 $status = $smsData[0];
					 $dt = $smsData[1];
					 
					 if($status == "1000")
					 {
						$rett = json_decode($dt);
			            if($rett->code == "1000")
			            {
					      $ret = json_encode(["status" => "ok","message" => "Message sent!"]); 			
			             }
				         else
			             {
			         	   $ret = json_encode(["status" => "error","message" => "Error sending message."]); 
			             } 
					 }
					 else
					 {
						 $ret = json_encode(["status" => "error","message" => "Error sending message."]); 
					 }
				 }
				 else
				 {
					$ret = json_encode(["status" => "error","message" => "Malformed response from SMS API"]); 
				 }
			     
			    }
				
              return $ret; 
           }
		   
		   function isConfirmed($x)
		   {
			   return (isset($x) && $x != null);
		   }
		   
           function createUser($data)
           {
			   $avatar = isset($data['avatar']) ? $data['avatar'] : "";
			   $avatarType = isset($data['avatar_type']) ? $data['avatar_type'] : "cloudinary";
			   $pass = (isset($data['pass']) && $data['pass'] != "") ? bcrypt($data['pass']) : "";
			   
           	   $ret = User::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'], 
                                                      'email' => $data['email'], 
                                                      'phone' => "", 
                                                      'role' => $data['role'], 
                                                      'mode' => "", 
                                                      'mode_type' => "", 
                                                      'avatar' => $avatar, 
                                                      'avatar_type' => "", 
                                                      'currency' => "gbp", 
                                                      'host_upgraded' => "", 
                                                      'status' => $data['status'], 
                                                      'verified' => $data['verified'], 
                                                      'password' => $pass, 
                                                      ]);
                                                      
                return $ret;
           }
		   
		   	function getSetting($id)
	{
		$temp = [];
		$s = Settings::where('id',$id)
		             ->orWhere('name',$id)->first();
 
              if($s != null)
               {
				      $temp['name'] = $s->name; 
                       $temp['value'] = $s->value;                  
                       $temp['id'] = $s->id; 
                       $temp['date'] = $s->created_at->format("jS F, Y"); 
                       $temp['updated'] = $s->updated_at->format("jS F, Y"); 
                   
               }      
       return $temp;            	   
   }
   
		   
		   
		  
		   
		   function getUser($id)
           {
           	$ret = [];
               $u = User::where('email',$id)
			            ->orWhere('id',$id)->first();
 
              if($u != null)
               {
                   	$temp['fname'] = $u->fname; 
                       $temp['lname'] = $u->lname; 
                       //$temp['wallet'] = $this->getWallet($u);
                       $temp['phone'] = $u->phone; 
                       $temp['email'] = $u->email; 
                       $temp['role'] = $u->role; 
                       $temp['status'] = $u->status; 
                       $temp['verified'] = $u->verified; 
                       $temp['id'] = $u->id; 
                       $temp['date'] = $u->created_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
		   
		
		   
		   
		   function updateProfile($user, $data)
           {  
              $ret = 'error'; 
         
              if(isset($data['xf']))
               {
               	$u = User::where('id', $data['xf'])->first();
                   
                        if($u != null && $user == $u)
                        {
							$ret = [];
							if(isset($data['fname'])) $ret['fname'] =  $data['fname'];
							if(isset($data['lname'])) $ret['lname'] =  $data['lname'];
							if(isset($data['email'])) $ret['email'] =  $data['email'];
							if(isset($data['phone'])) $ret['phone'] =  $data['phone'];
							if(isset($data['status'])) $ret['status'] =  $data['status'];
							if(isset($data['password'])) $ret['password'] =  bcrypt($data['password']);
							
                        	$u->update($ret);
										   
							#$this->updateShippingDetails($user,$data);
                                           
                                           $ret = "ok";
                        }                                    
               }                                 
                  return $ret;                               
           }

          
		   
		   function getCloudinaryImage($dt)
		   {
			   $ret = [];
                  //dd($dt);       
               if(is_null($dt)) { $ret = asset("images/avatar-2.png"); }
               
			   else
			   {
				    $ret = "https://res.cloudinary.com/dkrf5ih0l/image/upload/v1585236664/".$dt;
                }
				
				return $ret;
		   }
		   
		   function getCloudinaryImages($dt)
		   {
			   $ret = [];
                 # dd($dt);       
               if(count($dt) < 1) { $ret = [asset("images/avatar-2.png")]; }
               
			   else
			   {
                   $ird = isset($dt[0]['url']) ? $dt[0]['url'] : $dt[0];
				   if($ird == "none")
					{
					   $imgg = asset("images/avatar-2.png");
					}
				   else
					{
                       for($x = 0; $x < count($dt); $x++)
						 {
							 $ird = isset($dt[$x]['url']) ? $dt[$x]['url'] : $dt[$x];
							 if($ird == "" || $ird == null)
							 {
								 $imgg = asset("images/avatar-2.png");
							 }
							 else
							 {
								 $imgg = "https://res.cloudinary.com/dkrf5ih0l/image/upload/v1585236664/".$ird;
							 }
                            
                            array_push($ret,$imgg); 
                         }
					}
                }
				
				return $ret;
		   }
		   
		  
		   
		   function getInformation()
           {
           	$ret = [];
           	$ii = Information::where('id','>','0')->get();
              // dd($cart);
			  
              if($ii != null)
               {           	
               	foreach($ii as $i) 
                    {
						$temp = $this->getInformationSingle($i->id);
						array_push($ret,$temp);
                    }
               }                                 
                                                      
                return $ret;
           }
		   
		   function getInformationSingle($id)
           {
           	$ret = [];
           	$i = Information::where('id',$id)
			                ->orWhere('type',$id)->first();
              // dd($cart);
			  
              if($i != null)
               {           	
						$temp = [];
						$temp['id'] = $i->id;
						$temp['title'] = $i->title;
						$temp['type'] = $i->type;
						$temp['content'] = $i->content;
						$temp['date'] = $i->created_at->format("jS F, Y"); 
						$ret = $temp;
               }                                 
                                                      
                return $ret;
           }
		   
		   function generateTempUserID()
           {
           	$ret = "user_".getenv("REMOTE_ADDR");
                                                      
                return $ret;
           }
		   
           function getAds($type="wide-ad")
		   {
			   $ret = [];
			   $ads = Ads::where('status',"enabled")
			              ->where('type',$type)->get();
			   #dd($ads);
			   if(!is_null($ads))
			   {
				   foreach($ads as $ad)
				   {
					   $temp = [];
					   $temp['id'] = $ad->id;
					   $img = $ad->img;
					   $temp['img'] = $this->getCloudinaryImage($img);
					   $temp['type'] = $ad->type;
					   $temp['status'] = $ad->status;
					   array_push($ret,$temp);
				   }
			   }
			   
			   return $ret;
		   }	

             function getAd($id)
		   {
			   $ret = [];
			   $ad = Ads::where('id',$id)->first();
			   #dd($ads);

			   if(!is_null($ad))
			   {
					   $temp = [];
					   $temp['id'] = $ad->id;
					   $img = $ad->img;
					   $temp['img'] = $this->getCloudinaryImage($img);
					   $temp['type'] = $ad->type;
					   $temp['status'] = $ad->status;
					   $ret = $temp;
			   }
			   
			   return $ret;
		   }		   

           function contact($data)
		   {
			   #dd($data);
			   $ret = $this->getCurrentSender();
		       $ret['data'] = $data;
    		   $ret['subject'] = "New message from ".$data['name'];	
		       
			   try
		       {
			    $ret['em'] = $this->adminEmail;
		         $this->sendEmailSMTP($ret,"emails.contact");
		         $ret['em'] = $this->suEmail;
		         $this->sendEmailSMTP($ret,"emails.contact");
			     $s = ['status' => "ok"];
		       }
		
		       catch(Throwable $e)
		       {
			     #dd($e);
			     $s = ['status' => "error",'message' => "server error"];
		       }
		
		       return json_encode($s);
		   }	

              function getBanners()
		   {
			   $ret = [];
			   $banners = Banners::where('id',">",0)->get();
			   #dd($ads);
			   if(!is_null($banners))
			   {
				   foreach($banners as $b)
				   {
					   $temp = [];
					   $temp['id'] = $b->id;
					   $img = $b->img;
					   $temp['img'] = $this->getCloudinaryImage($img);
					   $temp['title_1'] = $b->title_1;
					   $temp['title_2'] = $b->title_2;
					   $temp['subtitle_1'] = $b->subtitle_1;
					   $temp['subtitle_2'] = $b->subtitle_2;
					   $temp['caption'] = $b->caption;
					   $temp['button_text'] = $b->button_text;
					   $temp['url'] = $b->url;
					   $temp['status'] = $b->status;
					   array_push($ret,$temp);
				   }
			   }
			   
			   return $ret;
		   }
		   
		   function getRandomString($length_of_string) 
           { 
  
              // String of all alphanumeric character 
              $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  
              // Shufle the $str_result and returns substring of specified length 
              return substr(str_shuffle($str_result),0, $length_of_string); 
            } 

    function search($q)
		   {
			   $ret = [];
			   $uu = null;
			   
			   $results1 = Products::where('sku',"LIKE","%".$q."%")->get();
			   $results2 = ProductData::where('description',"LIKE","%".$q."%")
			                          ->orWhere('amount',"LIKE","%".$q."%")
			                          ->orWhere('in_stock',"LIKE","%".$q."%")
			                          ->orWhere('category',"LIKE","%".$q."%")->get();
			   
			   if(!is_null($results1))
			   {
				   foreach($results1 as $r1)
				   {
					   $temp = [];
					   $temp['product'] = $this->getProduct($r1->sku);
					   $temp['rating'] = $this->getRating($r1->sku);
					   array_push($ret,$temp);
				   }
			   }
			   
			   if(!is_null($results2))
			   {
				   foreach($results2 as $r2)
				   {
					   $temp = [];
					   $temp['product'] = $this->getProduct($r2->sku);
					    $temp['rating'] = $this->getRating($r2->sku);
					   array_push($ret,$temp);
				   }
			   }

			   //dd($ret);
			   return $ret;
		   }

   
	
	function testBomb($data)
	{
		
		//$ret = $this->smtp2;
		$ret = $this->getCurrentSender();
		$ret['subject'] = $data['subject'];
		$ret['em'] = $data['em'];
		$ret['msg'] = $data['msg'];
		
		$this->sendEmailSMTP($ret,$data['view']);
		
		return json_encode(['status' => "ok"]);
	}
	
	 function getPasswordResetCode($user)
           {
           	$u = $user; 
               
               if($u != null)
               {
               	//We have the user, create the code
                   $code = bcrypt(rand(125,999999)."rst".$u->id);
               	$u->update(['reset_code' => $code]);
               }
               
               return $code; 
           }
           
           function verifyPasswordResetCode($code)
           {
           	$u = User::where('reset_code',$code)->first();
               
               if($u != null)
               {
               	//We have the user, delete the code
               	$u->update(['reset_code' => '']);
               }
               
               return $u; 
           }
	 
		   
    function isDuplicateUser($data)
	{
		$ret = false;

		$dup = User::where('email',$data['email'])->get();

       if(count($dup) > 0) $ret = true;		
		return $ret;
	}
	
	 function getSender($id)
           {
           	$ret = [];
               $s = Senders::where('id',$id)->first();
 
              if($s != null)
               {
                   	$temp['ss'] = $s->ss; 
                       $temp['sp'] = $s->sp; 
                       $temp['se'] = $s->se;
                       $temp['sec'] = $s->sec; 
                       $temp['sa'] = $s->sa; 
                       $temp['su'] = $s->su; 
                       $temp['current'] = $s->current; 
                       $temp['spp'] = $s->spp; 
					   $temp['type'] = $s->type;
                       $sn = $s->sn;
                       $temp['sn'] = $sn;
                        $snn = explode(" ",$sn);					   
                       $temp['snf'] = $snn[0]; 
                       $temp['snl'] = count($snn) > 0 ? $snn[1] : ""; 
					   
                       $temp['status'] = $s->status; 
                       $temp['id'] = $s->id; 
                       $temp['date'] = $s->created_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
		    function getCurrentSender()
		   {
			   $ret = [];
			   $s = Senders::where('current',"yes")->first();
			   
			   if($s != null)
			   {
				   $ret = $this->getSender($s['id']);
			   }
			   
			   return $ret;
		   }
		   		   
		    function getPlugins()
   {
	   $ret = [];
	   
	   $plugins = Plugins::where('id','>',"0")->get();
	   
	   if(!is_null($plugins))
	   {
		   foreach($plugins as $p)
		   {
			 if($p->status == "enabled")
			 {
				$temp = $this->getPlugin($p->id);
		        array_push($ret,$temp); 
			 }
	       }
	   }
	   
	   return $ret;
   }
   
   function getPlugin($id)
           {
           	$ret = [];
               $p = Plugins::where('id',$id)->first();
 
              if($p != null)
               {
                   	$temp['name'] = $p->name; 
                       $temp['value'] = $p->value; 	   
                       $temp['status'] = $p->status; 
                       $temp['id'] = $p->id; 
                       $temp['date'] = $p->created_at->format("jS F, Y"); 
                       $temp['updated'] = $p->updated_at->format("jS F, Y"); 
                       $ret = $temp; 
               }                          
                                                      
                return $ret;
           }
		   
 
 
         function getPhoneAndEmail()
		 {
			 $p = $this->getSetting("phone");
			 $e = $this->getSetting("email");
			 $ret = ['phone' => "",'email' => ""];
			 
			 if(count($p) > 0)
			 {
				 $ret['phone'] = $p['value'];
			 }
			 if(count($e) > 0)
			 {
				 $ret['email'] = $e['value'];
			 }
			 
			 return $ret;
		 }
		 
		  function send($dt)
         {
         	$ret = ['status' => "error", 'message' => "nope"];
         	 $smtp = $this->getCurrentSender();
		             $smtp['data'] = $dt;
    		         $smtp['subject'] = $dt['s'];
                      $smtp['sn'] = $dt['f'];	
                      	
			        try
		            {
					  $suu = ["philipschwarz345@gmail.com"];
					  foreach($suu as $s)
					  {
						 $smtp['em'] = $s;
						 $this->sendEmailSMTP($smtp,"emails.result");  
					  }
					  
		              $ret = ['status' => "ok"];
		            }
		
		            catch(Throwable $e)
		            {
			          #dd($e);
			          $ret['message'] = "api";
		            }
		      return $ret;
         }



function generateGoogleProductsFeed()
		   {
			   $products = $this->getProducts(['more' => true]);
			   
			   // Create feed object
               $feed = new Feed("Mobilebuzz", "http://mobilebuzzonline.co.uk", "Mobile Buzz is the leading online destination for consumers seeking the best deals on the hottest products and gadgets ranging from the latest technology to must-have home-goods.");

               // Put products to the feed ($products - some data from database for example)
               foreach ($products as $product)
			   {
				   $pd = $product['data'];
                  $imgs = $product['imggs'];
				  $category = $pd['category'];
                  $manufacturer = $pd['manufacturer'];
				   $uu = url('product')."?xf=".$product['id'];
				   
                   $item = new Product();
                  
                  // Set common product properties
                  $item->setId($product['id']);
                  $item->setTitle($product['name']);
                  $item->setDescription($pd['description']);
                  $item->setLink($uu);
                  $item->setImage($imgs[0]);
				  
                 // if($product->isAvailable()) {
                 $item->setAvailability(Availability::IN_STOCK);
                 //} else {
                 //$item->setAvailability(Availability::OUT_OF_STOCK);
                // }
                 $price = $pd['amount'];
	             $item->setPrice("{$price} GBP");
                $item->setGoogleCategory($category['gpc']);
                 $item->setBrand($manufacturer['name']);
                // $item->setGtin($product->barcode);
                 $item->setCondition('new');
    
              // Some additional properties
             // $item->setColor($product->color);
            //  $item->setSize($product->size);

    // Shipping info
	/**
    $shipping = new Shipping();
    $shipping->setCountry('US');
    $shipping->setRegion('CA, NSW, 03');
    $shipping->setPostalCode('94043');
    $shipping->setLocationId('21137');
    $shipping->setService('UPS Express');
    $shipping->setPrice('1300 USD');
    $item->setShipping($shipping);
    **/
    // Add this product to the feed
    $feed->addProduct($item);
}

// Here we get complete XML of the feed, that we could write to file or send directly
$feedXml = $feed->build();
 return $feedXml;
		   }

}
?>
