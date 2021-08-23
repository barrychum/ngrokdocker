<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network information</title>
</head>
<body>
    

<?php function getFlags($code){
    $code = strtoupper($code);
    if($code == 'AD') return '🇦🇩';
    if($code == 'AE') return '🇦🇪';
    if($code == 'AF') return '🇦🇫';
    if($code == 'AG') return '🇦🇬';
    if($code == 'AI') return '🇦🇮';
    if($code == 'AL') return '🇦🇱';
    if($code == 'AM') return '🇦🇲';
    if($code == 'AO') return '🇦🇴';
    if($code == 'AQ') return '🇦🇶';
    if($code == 'AR') return '🇦🇷';
    if($code == 'AS') return '🇦🇸';
    if($code == 'AT') return '🇦🇹';
    if($code == 'AU') return '🇦🇺';
    if($code == 'AW') return '🇦🇼';
    if($code == 'AX') return '🇦🇽';
    if($code == 'AZ') return '🇦🇿';
    if($code == 'BA') return '🇧🇦';
    if($code == 'BB') return '🇧🇧';
    if($code == 'BD') return '🇧🇩';
    if($code == 'BE') return '🇧🇪';
    if($code == 'BF') return '🇧🇫';
    if($code == 'BG') return '🇧🇬';
    if($code == 'BH') return '🇧🇭';
    if($code == 'BI') return '🇧🇮';
    if($code == 'BJ') return '🇧🇯';
    if($code == 'BL') return '🇧🇱';
    if($code == 'BM') return '🇧🇲';
    if($code == 'BN') return '🇧🇳';
    if($code == 'BO') return '🇧🇴';
    if($code == 'BQ') return '🇧🇶';
    if($code == 'BR') return '🇧🇷';
    if($code == 'BS') return '🇧🇸';
    if($code == 'BT') return '🇧🇹';
    if($code == 'BV') return '🇧🇻';
    if($code == 'BW') return '🇧🇼';
    if($code == 'BY') return '🇧🇾';
    if($code == 'BZ') return '🇧🇿';
    if($code == 'CA') return '🇨🇦';
    if($code == 'CC') return '🇨🇨';
    if($code == 'CD') return '🇨🇩';
    if($code == 'CF') return '🇨🇫';
    if($code == 'CG') return '🇨🇬';
    if($code == 'CH') return '🇨🇭';
    if($code == 'CI') return '🇨🇮';
    if($code == 'CK') return '🇨🇰';
    if($code == 'CL') return '🇨🇱';
    if($code == 'CM') return '🇨🇲';
    if($code == 'CN') return '🇨🇳';
    if($code == 'CO') return '🇨🇴';
    if($code == 'CR') return '🇨🇷';
    if($code == 'CU') return '🇨🇺';
    if($code == 'CV') return '🇨🇻';
    if($code == 'CW') return '🇨🇼';
    if($code == 'CX') return '🇨🇽';
    if($code == 'CY') return '🇨🇾';
    if($code == 'CZ') return '🇨🇿';
    if($code == 'DE') return '🇩🇪';
    if($code == 'DJ') return '🇩🇯';
    if($code == 'DK') return '🇩🇰';
    if($code == 'DM') return '🇩🇲';
    if($code == 'DO') return '🇩🇴';
    if($code == 'DZ') return '🇩🇿';
    if($code == 'EC') return '🇪🇨';
    if($code == 'EE') return '🇪🇪';
    if($code == 'EG') return '🇪🇬';
    if($code == 'EH') return '🇪🇭';
    if($code == 'ER') return '🇪🇷';
    if($code == 'ES') return '🇪🇸';
    if($code == 'ET') return '🇪🇹';
    if($code == 'FI') return '🇫🇮';
    if($code == 'FJ') return '🇫🇯';
    if($code == 'FK') return '🇫🇰';
    if($code == 'FM') return '🇫🇲';
    if($code == 'FO') return '🇫🇴';
    if($code == 'FR') return '🇫🇷';
    if($code == 'GA') return '🇬🇦';
    if($code == 'GB') return '🇬🇧';
    if($code == 'GD') return '🇬🇩';
    if($code == 'GE') return '🇬🇪';
    if($code == 'GF') return '🇬🇫';
    if($code == 'GG') return '🇬🇬';
    if($code == 'GH') return '🇬🇭';
    if($code == 'GI') return '🇬🇮';
    if($code == 'GL') return '🇬🇱';
    if($code == 'GM') return '🇬🇲';
    if($code == 'GN') return '🇬🇳';
    if($code == 'GP') return '🇬🇵';
    if($code == 'GQ') return '🇬🇶';
    if($code == 'GR') return '🇬🇷';
    if($code == 'GS') return '🇬🇸';
    if($code == 'GT') return '🇬🇹';
    if($code == 'GU') return '🇬🇺';
    if($code == 'GW') return '🇬🇼';
    if($code == 'GY') return '🇬🇾';
    if($code == 'HK') return '🇭🇰';
    if($code == 'HM') return '🇭🇲';
    if($code == 'HN') return '🇭🇳';
    if($code == 'HR') return '🇭🇷';
    if($code == 'HT') return '🇭🇹';
    if($code == 'HU') return '🇭🇺';
    if($code == 'ID') return '🇮🇩';
    if($code == 'IE') return '🇮🇪';
    if($code == 'IL') return '🇮🇱';
    if($code == 'IM') return '🇮🇲';
    if($code == 'IN') return '🇮🇳';
    if($code == 'IO') return '🇮🇴';
    if($code == 'IQ') return '🇮🇶';
    if($code == 'IR') return '🇮🇷';
    if($code == 'IS') return '🇮🇸';
    if($code == 'IT') return '🇮🇹';
    if($code == 'JE') return '🇯🇪';
    if($code == 'JM') return '🇯🇲';
    if($code == 'JO') return '🇯🇴';
    if($code == 'JP') return '🇯🇵';
    if($code == 'KE') return '🇰🇪';
    if($code == 'KG') return '🇰🇬';
    if($code == 'KH') return '🇰🇭';
    if($code == 'KI') return '🇰🇮';
    if($code == 'KM') return '🇰🇲';
    if($code == 'KN') return '🇰🇳';
    if($code == 'KP') return '🇰🇵';
    if($code == 'KR') return '🇰🇷';
    if($code == 'KW') return '🇰🇼';
    if($code == 'KY') return '🇰🇾';
    if($code == 'KZ') return '🇰🇿';
    if($code == 'LA') return '🇱🇦';
    if($code == 'LB') return '🇱🇧';
    if($code == 'LC') return '🇱🇨';
    if($code == 'LI') return '🇱🇮';
    if($code == 'LK') return '🇱🇰';
    if($code == 'LR') return '🇱🇷';
    if($code == 'LS') return '🇱🇸';
    if($code == 'LT') return '🇱🇹';
    if($code == 'LU') return '🇱🇺';
    if($code == 'LV') return '🇱🇻';
    if($code == 'LY') return '🇱🇾';
    if($code == 'MA') return '🇲🇦';
    if($code == 'MC') return '🇲🇨';
    if($code == 'MD') return '🇲🇩';
    if($code == 'ME') return '🇲🇪';
    if($code == 'MF') return '🇲🇫';
    if($code == 'MG') return '🇲🇬';
    if($code == 'MH') return '🇲🇭';
    if($code == 'MK') return '🇲🇰';
    if($code == 'ML') return '🇲🇱';
    if($code == 'MM') return '🇲🇲';
    if($code == 'MN') return '🇲🇳';
    if($code == 'MO') return '🇲🇴';
    if($code == 'MP') return '🇲🇵';
    if($code == 'MQ') return '🇲🇶';
    if($code == 'MR') return '🇲🇷';
    if($code == 'MS') return '🇲🇸';
    if($code == 'MT') return '🇲🇹';
    if($code == 'MU') return '🇲🇺';
    if($code == 'MV') return '🇲🇻';
    if($code == 'MW') return '🇲🇼';
    if($code == 'MX') return '🇲🇽';
    if($code == 'MY') return '🇲🇾';
    if($code == 'MZ') return '🇲🇿';
    if($code == 'NA') return '🇳🇦';
    if($code == 'NC') return '🇳🇨';
    if($code == 'NE') return '🇳🇪';
    if($code == 'NF') return '🇳🇫';
    if($code == 'NG') return '🇳🇬';
    if($code == 'NI') return '🇳🇮';
    if($code == 'NL') return '🇳🇱';
    if($code == 'NO') return '🇳🇴';
    if($code == 'NP') return '🇳🇵';
    if($code == 'NR') return '🇳🇷';
    if($code == 'NU') return '🇳🇺';
    if($code == 'NZ') return '🇳🇿';
    if($code == 'OM') return '🇴🇲';
    if($code == 'PA') return '🇵🇦';
    if($code == 'PE') return '🇵🇪';
    if($code == 'PF') return '🇵🇫';
    if($code == 'PG') return '🇵🇬';
    if($code == 'PH') return '🇵🇭';
    if($code == 'PK') return '🇵🇰';
    if($code == 'PL') return '🇵🇱';
    if($code == 'PM') return '🇵🇲';
    if($code == 'PN') return '🇵🇳';
    if($code == 'PR') return '🇵🇷';
    if($code == 'PS') return '🇵🇸';
    if($code == 'PT') return '🇵🇹';
    if($code == 'PW') return '🇵🇼';
    if($code == 'PY') return '🇵🇾';
    if($code == 'QA') return '🇶🇦';
    if($code == 'RE') return '🇷🇪';
    if($code == 'RO') return '🇷🇴';
    if($code == 'RS') return '🇷🇸';
    if($code == 'RU') return '🇷🇺';
    if($code == 'RW') return '🇷🇼';
    if($code == 'SA') return '🇸🇦';
    if($code == 'SB') return '🇸🇧';
    if($code == 'SC') return '🇸🇨';
    if($code == 'SD') return '🇸🇩';
    if($code == 'SE') return '🇸🇪';
    if($code == 'SG') return '🇸🇬';
    if($code == 'SH') return '🇸🇭';
    if($code == 'SI') return '🇸🇮';
    if($code == 'SJ') return '🇸🇯';
    if($code == 'SK') return '🇸🇰';
    if($code == 'SL') return '🇸🇱';
    if($code == 'SM') return '🇸🇲';
    if($code == 'SN') return '🇸🇳';
    if($code == 'SO') return '🇸🇴';
    if($code == 'SR') return '🇸🇷';
    if($code == 'SS') return '🇸🇸';
    if($code == 'ST') return '🇸🇹';
    if($code == 'SV') return '🇸🇻';
    if($code == 'SX') return '🇸🇽';
    if($code == 'SY') return '🇸🇾';
    if($code == 'SZ') return '🇸🇿';
    if($code == 'TC') return '🇹🇨';
    if($code == 'TD') return '🇹🇩';
    if($code == 'TF') return '🇹🇫';
    if($code == 'TG') return '🇹🇬';
    if($code == 'TH') return '🇹🇭';
    if($code == 'TJ') return '🇹🇯';
    if($code == 'TK') return '🇹🇰';
    if($code == 'TL') return '🇹🇱';
    if($code == 'TM') return '🇹🇲';
    if($code == 'TN') return '🇹🇳';
    if($code == 'TO') return '🇹🇴';
    if($code == 'TR') return '🇹🇷';
    if($code == 'TT') return '🇹🇹';
    if($code == 'TV') return '🇹🇻';
    if($code == 'TW') return '🇹🇼';
    if($code == 'TZ') return '🇹🇿';
    if($code == 'UA') return '🇺🇦';
    if($code == 'UG') return '🇺🇬';
    if($code == 'UM') return '🇺🇲';
    if($code == 'US') return '🇺🇸';
    if($code == 'UY') return '🇺🇾';
    if($code == 'UZ') return '🇺🇿';
    if($code == 'VA') return '🇻🇦';
    if($code == 'VC') return '🇻🇨';
    if($code == 'VE') return '🇻🇪';
    if($code == 'VG') return '🇻🇬';
    if($code == 'VI') return '🇻🇮';
    if($code == 'VN') return '🇻🇳';
    if($code == 'VU') return '🇻🇺';
    if($code == 'WF') return '🇼🇫';
    if($code == 'WS') return '🇼🇸';
    if($code == 'XK') return '🇽🇰';
    if($code == 'YE') return '🇾🇪';
    if($code == 'YT') return '🇾🇹';
    if($code == 'ZA') return '🇿🇦';
    if($code == 'ZM') return '🇿🇲';
    return '🏳';
} ?>

<?php function ipinfo ($ip) {
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    return $details;
} ?>

<?php function ip_is_private ($ip) {
    $pri_addrs = array (
                      '10.0.0.0|10.255.255.255', // single class A network
                      '172.16.0.0|172.31.255.255', // 16 contiguous class B network
                      '192.168.0.0|192.168.255.255', // 256 contiguous class C network
                      '169.254.0.0|169.254.255.255', // Link-local address also refered to as Automatic Private IP Addressing
                      '127.0.0.0|127.255.255.255' // localhost
                     );

    $long_ip = ip2long ($ip);
    if ($long_ip != -1) {
        foreach ($pri_addrs AS $pri_addr) {
            list ($start, $end) = explode('|', $pri_addr);
             if ($long_ip >= ip2long ($start) && $long_ip <= ip2long ($end)) {
                 return true;
             }
        }
    }
    return false;
} ?>

<?php function check_ip_string($myString) {
    $ip = '';
    $myArray = explode(',', $myString);
    for($i = 0; $i < count($myArray); $i++) {
        $ip = trim($myArray[$i]);

        if (ip_is_private($ip)) {
            echo '<tt>'. $myString . '</tt>, private IP<br>';
        } else {
            $details = ipinfo($ip);  
            echo '<tt>'.$details->ip . '</tt>, ';
            echo $details->city . ', ';
            echo $details->region . ', ';
            echo $details->country . ' ';
            // echo '<font size="+1">'.getFlags($details->country).'</font>';
            // echo '<br>';
            echo '<img src="png250px/'.strtolower($details->country).'.png" height="20"><br>';
            echo $details->timezone;
            echo '<br>';
            echo $details->org;
            echo '<br>';              
        }
        echo '<br>';
    }
}
?>

<?php function check_http_tag($tag) {
    if (getenv($tag)) {
        echo $tag.'<br>';
        check_ip_string (getenv($tag));
    }
} ?>

<h3>Source(s) of incoming request :</h3>

<?php
    echo $_SERVER['HTTP_USER_AGENT'] . "<br><br>";
    $ip_address = '';
    echo 'Incoming request details :<br><br>';
    check_http_tag ('HTTP_X_CLUSTER_CLIENT_IP');
    check_http_tag ('HTTP_CLIENT_IP');
    check_http_tag ('HTTP_X_FORWARDED_FOR');
    check_http_tag ('HTTP_X_FORWARDED');
    check_http_tag ('HTTP_FORWARDED_FOR');
    check_http_tag ('HTTP_FORWARDED');
    check_http_tag ('REMOTE_ADDR');

//    echo '<br>** Test **<br>';
//    $myString = '192.3.35.35, 121.51.228.204, 39.12.62.54, 119.81.168.14';
//    check_ip_string($myString);
?>


</body>
</html>