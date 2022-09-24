<?php 
function is_file_exists($img_path = "",$img_placeholder = ""){
	if(file_exists(FCPATH . $img_path)){
		return base_url($img_path);
	}else if(file_exists(FCPATH . $img_placeholder)){
		return base_url($img_placeholder);
	}else {
		return base_url("uploads/c.png");
	}
}