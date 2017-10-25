<?php
	class bootstrap extends AppController{
		
		public function __construct(){
			
			$this->getView("bootstrapHeader");
			$this->getView("bootstrapBody",array(
				"navbar"=>array(
					"Homepage"=>"#",
					"About Us"=>"#",
					"Contact Us"=>"#"
				)
			));
			$this->getView("bootstrapFooter");
			
		}
		
	}
?>