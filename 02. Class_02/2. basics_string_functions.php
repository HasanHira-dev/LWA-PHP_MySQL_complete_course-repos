<?php
    
    // String Functions
    // - strlen()  = For string length
    $country = "Bangladesh is my country";
    // echo strlen($country);

    // - strtoupper() = For string uppercase
    $strup = strtoupper($country);
    // echo $strup;

    // - strtolower() = For string lowercase
    $strlow = strtolower($country);
    // echo $strlow;

    // - ucwords() = For Capitalize string's words
    $strupwords = ucwords($country);
    // echo $strupwords;

    // - trim() = For remove unusual spaces
    $spacedstr = ' Ha! Ha!!    Ha!, I am a      Ghost, "You     can\'t  see    me   ."';
    $trimstring = trim($spacedstr);
    // echo $trimstring;

    // - str_replace() = For replace string(s)
    //   - str_replace(search, replace, string);
    $strrep = str_replace("Ghost", "Magician", $trimstring);
    echo $strrep;









?>