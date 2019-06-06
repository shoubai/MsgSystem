<?php
class uploadfile{
	private $filename;
	//函数里面加等号 默认值
	public function 
		upload($file, $filedir = 'uploads/', 
			   $exts = array('.jpg', '.png', '.gif'),
			   $maxsize = 10 * 1024 * 1024 * 8){
				if($file['error'] != 0){
					return array('code' => 0, 'msg' => '参数错误： code:'.$file['error']);
				}
					$this->filename = $file['name'];
					$ext = $this->getExt();
					if(!in_array(strtolower($ext),$exts)){
						return array('code' => 0, 'msg' =>'不被允许的上传文件类型');
					}
					if($file['size']>$maxsize){
						return array('code' => 0,'msg' => '上传文件超过最大允许值');
					}
					$newFilename = rand(1000,9999).$ext;
					$newFileDir = $filedir.date('Y/m');
					$this->mkdir($newFileDir);
					//echo $newFilename;
					$newFilename = $newFileDir.'/'.$newFilename;
				
					if(move_uploaded_file($file['tmp_name'],$newFilename)){
						return array('code' => 1,'msg' => '上传成功','url' => $newFilename);
					}else{
						return array('code' => 0,'msg' => '上传失败');
					}
					
	}
	private function getExt(){
		return substr($this->filename, strrpos($this->filename, '.'));
		
	}
	
	private function mkdir($dir){
		//分割元素
		$dirs = explode('/',trim($dir,'/'));
		$tmp = "";
		foreach ($dirs as $value){
			$tmp .= $value . '/';
			if(!is_dir($tmp)){
				mkdir($tmp);
			}
		}
	}
}