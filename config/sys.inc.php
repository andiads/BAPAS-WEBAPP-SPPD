<?php
class mySys {
	
	public static function GetLastInt($cKey,$lUpdate=true,$nLen=0) {
          global $bapasDB;
          $nRow        = 0 ; 
          $dbData      = $bapasDB->GetData('suprin_code','Data',"Kode = '$cKey'") ;
          if($dbRow    = $bapasDB->GetRow($dbData)){
              $nRow    = (int) $dbRow['Data'] ; 
          }
          $nRow++ ;
          if($lUpdate){
              $vaArray     = array("Kode"=>$cKey,"Data"=>$nRow) ; 
              $bapasDB->Update("suprin_code",$vaArray,"Kode = '$cKey'",false) ;       
          }
          return self::Padl(trim(strval($nRow)),$nLen,"0") ; 
    }

    public static function Padl($cText,$nLength,$cChar="") {
          $cPad     = "" ; 
          if(strlen($cText) < $nLength){
            $cPad     = str_repeat($cChar, $nLength - strlen($cText));  
          }
          return $cPad  . $cText ; 
   }
}
?>