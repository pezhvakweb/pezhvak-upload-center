<?php
ini_set("display_errors", 0); // جهت مخفی کردن خطا ها نیاز است

// تنظیم حجم هر فایل
$max_file_size="1024000";

// تنظیم حجم کلی فایل ها جهت آپلود
$max_combined_size="1024000";

// تنظیم تعداد همزمان آپلود فایل
$file_uploads="1";

// نام وب سایت
$websitename="آپلود سنتر پژواک وب";

// آدرس کامل محل نصب اسکریپت
$full_url="http://localhost/2/upload/";

// محل ذخیره فایل ها
$folder="./upload/";

// ایجاد نام اتفاقی برای فایل
$random_name=true;

// فرمت های قابل قبول
$allow_types=array("jpg","gif","png","zip","rar","doc","bmp","7z");

// تغییر ندهید
$fullpath="";


// ایجاد کلید
function get_ext($key) { 
	$key=strtolower(substr(strrchr($key, "."), 1));
	$key=str_replace("jpeg","jpg",$key);
	return $key;
}

// فیلتر کاراکترهای نامعتبر
function cln_file_name($string) {
	$cln_filename_find=array("/\.[^\.]+$/", "/[^\d\w\s-]/", "/\s\s+/", "/[-]+/", "/[_]+/");
	$cln_filename_repl=array("", ""," ", "-", "_");
	$string=preg_replace($cln_filename_find, $cln_filename_repl, $string);
	return trim($string);
}

If(($_POST['submit']==true)) {

	If(array_sum($_FILES['file']['size']) > $max_combined_size*1024) {
		
		$error.="<b>توجه :</b> فایل انتخابی شما حجم زیادی دارد <br />";
	
	} Else {

		For($i=0; $i <= $file_uploads-1; $i++) {
			
			If($_FILES['file']['name'][$i]) {

				$file_ext[$i]=get_ext($_FILES['file']['name'][$i]);
				
				// مدیریت خطاها
				If($random_name){
					$file_name[$i]=time()+rand(0,100000);
				} Else {
					$file_name[$i]=cln_file_name($_FILES['file']['name'][$i]);
				}
	
				If(str_replace(" ", "", $file_name[$i])=="") {
					
					$error.= "<b>توجه :</b> ".$_FILES['file']['name'][$i]." نام پرونده معتبر نیست<br />";
				
				
				}	ElseIf(!in_array($file_ext[$i], $allow_types)) {
								
					$error.= "<b>توجه :</b> ".$_FILES['file']['name'][$i]." فرمت فایل ارسالی شما توسط سیستم پشتیبانی نمی شود.<br />";
								
			
				} Elseif($_FILES['file']['size'][$i] > ($max_file_size*1024)) {
					
					$error.= "<b>توجه :</b> ".$_FILES['file']['name'][$i]." فایل ارسالی شما بیش از حد بزرگ است!<br />";
					

				} Elseif(file_exists($folder.$file_name[$i].".".$file_ext[$i])) {
	
					$error.= "<b>توجه :</b> ".$_FILES['file']['name'][$i]." ظاهرا قبلا فایلی با همین نام در سرور ذخیره شده است لطفا نام فایل خود را تغییر دهید<br />";
					
				} Else { // در غیر این صورت
					
					// انتقال فایل به پوشه انتخابی و تغییر نام آن
					If(move_uploaded_file($_FILES['file']['tmp_name'][$i],$folder.$file_name[$i].".".$file_ext[$i])) {
						
						$success.="نام تغییر یافته :
                        <a.".$file_ext[$i]."\" target=\"_blank\">".$_FILES['file']['name'][$i]."</a><br />";
                        
						$success.="آدرس فایل :
                        <a class=\"am-badge am-badge-success\" href=\"".$full_url.$file_name[$i].".".$file_ext[$i]."\" target=\"_blank\">".$full_url.$file_name[$i].".".$file_ext[$i]."</a>
                        <br />";
						
					} Else {
						$error.="<b>توجه :</b> ".$_FILES['file']['name'][$i]." به دلایل نامعلومی عملیات آپلود شکست خورد لطفا مجددا تلاش نمایید<br />";
					}
					
				}
							
			} 
		
		} 
		
	} 
	If(($error=="") AND ($success=="")) {
		$error.="<b>توجه :</b> لطفا قوانین آپلود فایل را مطالعه نمایید <br />";
	}
	$display_message=$success.$error;
}
?>