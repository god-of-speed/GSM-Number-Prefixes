<?php namespace ebukaubah\GsmNumberPrefixes;

/**
*  Index class
*
*  The Index class provides a getNetworkProvider function that obtains the correct provider of
*  a particular mobile number passed to the function as arguement.
*
*  @author Ebuka Ubah
*/
class GsmNumberPrefix{

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
   private $m_SampleProperty = '';
 
  /**
  * getNetworkProvider Method
  *
  * A function to retrieve the network provider for the mobile number passed in as an arguement $number.
  * 
  *
  * @param string $number A string containing the mobile number you want to ascertain its network provider
  *
  * @return string
  */
   public function getNetworkProvider($number){
      $mobileNetworkPrefixes = [
         "0703" => "mtn",
         "0706" => "mtn",
         "0803" => "mtn",
         "0806" => "mtn",
         "0810" => "mtn",
         "0813" => "mtn",
         "0814" => "mtn",
         "0816" => "mtn",
         "0903" => "mtn",
         "0906" => "mtn",
         "0705" => "glo",
         "0805" => "glo",
         "0807" => "glo",
         "0811" => "glo",
         "0815" => "glo",
         "0905" => "glo",
         "0701" => "airtel",
         "0708" => "airtel",
         "0802" => "airtel",
         "0808" => "airtel",
         "0812" => "airtel",
         "0902" => "airtel",
         "0907" => "airtel",
         "0901" => "airtel",
         "0809" => "9mobile",
         "0817" => "9mobile",
         "0818" => "9mobile",
         "0908" => "9mobile",
         "0909" => "9mobile",
         "07028" => "starcomms",
         "07029" => "starcomms",
         "0819" => "starcomms",
         "07025" => "visafone",
         "07026" => "visafone",
         "0704" => "visafone",
         "07027" => "multilinks",
         "0709" => "multilinks",
         "0707" => "zoom",
         "0804" => "ntel",
         "0702" => "smile"
     ];

      //check if its a phone number 
      $firstCharacter = substr($number,0,1);
      $firstThreeCharacters = substr($number,0,3);
      if($firstCharacter == 0 && count($number) == 11) {
            //get the first 4 digits
            $firstFourDigits = substr($number,0,4);
            $firstFiveDigits = substr($number,0,5);

            echo [$firstFourDigits,$firstFiveDigits];die();
            if(isset($mobileNetworkPrefixes[$firstFourDigits]) && !empty($mobileNetworkPrefixes[$firstFourDigits])) {
               return $mobileNetworkPrefixes[$firstFourDigits];
            }elseif(isset($mobileNetworkPrefixes[$firstFiveDigits]) && !empty($mobileNetworkPrefixes[$firstFiveDigits])) {
               return $mobileNetworkPrefixes[$firstFiveDigits];
            }else{
               return "unknown";
            }
      }
      elseif($firstCharacter == "+" && count($number) == 14) {
            $firstThreeCharacters = substr($number,1,3);
            if($firstThreeCharacters == "234") {
               $firstFourDigits = "0".substr($number,4,3);
               $firstFiveDigits = "0".substr($number,4,4);
               if(isset($mobileNetworkPrefixes[$firstFourDigits]) && !empty($mobileNetworkPrefixes[$firstFourDigits])) {
                  return $mobileNetworkPrefixes[$firstFourDigits];
               }elseif(isset($mobileNetworkPrefixes[$firstFiveDigits]) && !empty($mobileNetworkPrefixes[$firstFiveDigits])) {
                  return $mobileNetworkPrefixes[$firstFiveDigits];
               }else{
                  return "unknown";
               }
            }else{
               return "unknown";
            }
      }
      elseif($firstThreeCharacters == "234" && count($number) == 13) {
            $firstFourDigits = "0".substr($number,3,3);
            $firstFiveDigits = "0".substr($number,3,4);
            if(isset($mobileNetworkPrefixes[$firstFourDigits]) && !empty($mobileNetworkPrefixes[$firstFourDigits])) {
               return $mobileNetworkPrefixes[$firstFourDigits];
            }elseif(isset($mobileNetworkPrefixes[$firstFiveDigits]) && !empty($mobileNetworkPrefixes[$firstFiveDigits])) {
               return $mobileNetworkPrefixes[$firstFiveDigits];
            }else{
               return "unknown";
            }
      }else{
            return "unknown";
      }
   }
}