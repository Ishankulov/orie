<?php

namespace App\Http\Controllers\Client;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banners;
use App\Models\Feedback;
use App\Models\News;
use App\Models\Teams;
use App\Models\Price;
use App\Models\Faq;

class ClientHomeController extends Controller
{
    public function getHome()
    {
        $faqs = Faq::all();
        $prices = Price::all();
        $teams = Teams::all();
        $feedbacks = Feedback::all();
        $newsletter = News::latest()->paginate(2);
        $banner = Banners::all(); 
        $banner_footer = Banners::where('types', 'footer')->first();
        $banner_content = Banners::where('types', 'content')->first();
        return view('welcome', compact('banner', 'banner_footer', 'banner_content', 'newsletter', 'feedbacks', 'teams', 'prices', 'faqs'));
    }

    public function getmail()
    {
        $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();

    }
   
}
