<?php 
function is_img_exists($img_path = "",$img_placeholder = ""){
	if(file_exists(FCPATH . $img_path)){
		return base_url($img_path);
	}else if(file_exists(FCPATH . $img_placeholder)){
		return base_url($img_placeholder);
	}else {
		return base_url("uploads/c.png");
	}
}
function getFileInfo($file_path){
	$info = pathinfo(FCPATH.$file_path);
	$info['byte_size'] = filesize(FCPATH.$file_path);
	$info['kb_size'] = $info['byte_size']/1024;
	$info['mb_size'] = $info['kb_size']/1024;
	$info['url'] = base_url($file_path);
	return $info;
}
function scanDirectory($dir,$extension=""){
	$file_list = array_diff(scandir(FCPATH.$dir), array('.', '..'));
	if($extension){
		$file_list_with_specific_extension = array();
		foreach($file_list as $row){
			$file_info = getFileInfo($dir."\\".$row);
			if($extension == $file_info['extension']){
				$file_list_with_specific_extension[] = $row;
			}
		}
		return $file_list_with_specific_extension;
	}else{
		return 	$file_list;
	}
}
function getDeviceInfo(){
	return get_browser();
}