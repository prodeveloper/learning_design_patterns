<?php
/**
 * 
 */
class MultiFileUploader  {
	private $uploader=array();
    function addUploader(UploaderCommand $uploader){
        $this->uploader[]=$uploader;
            }
    function run(){
        foreach ($this->uploader as $uploader) {
            $uploader->execute();
        }
    }
}

