<?php 

foreach ( $festivals as $festival ) { 
 
    $start  =   DateTime::createFromFormat('Y-m-d', $festival['start_date']);
    $end    =   DateTime::createFromFormat('Y-m-d', $festival['end_date']);


    if ( $festival['name'] === $page_title ) { 
        
        $name       =   preg_replace("/[^a-zA-Z]/", "", $festival['name']);
        $str        =   strtolower($name);
        $startDate  =   date_format($start, "M jS");
        $endDate    =   date_format($end, "jS");
        $year       =   date_format($start, "Y");
        $siteUrl    =   $festival['url'];
        $location   =   $festival['location'];
        
    }
}