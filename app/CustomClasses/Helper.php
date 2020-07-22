<?php 
/**
 * Created: Muhammad
 * Date: 21.10.2019
 * Description: The class Helper uses for getting dynamically the getPhone 
 * and other base information for web-site
 */
namespace App\CustomClasses;

use App\Models\BaseSiteInformation;
class Helper{
    
    /**
     * Get phone dynamic from baseSiteInformation
     */
    public static function getPhone()
    {
       $phones =  BaseSiteInformation::all();
       if($phones->count() == 0)
       {
           return '';
       }
       else
       {
           return $phones[0]->phone;
       }
    }

    public static function getEmail()
    {
       $emails =  BaseSiteInformation::all();
       if($emails->count() == 0)
       {
           return '';
       }
       else
       {
           return $emails[0]->email;
       }
    }

    public static function getAddres()
    {
       $address =  BaseSiteInformation::all();
       if($address->count() == 0)
       {
           return '';
       }
       else
       {
           return $address[0]->addres;
       }
    }
}