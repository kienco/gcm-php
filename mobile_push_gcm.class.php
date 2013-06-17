<?php

	/*
		Author: Nguyen Van Kien
		Date: 16/06/2013
		Document Refer : Zend Framework
		Blog: http://www.nvkien.wordpress.com
	*/
	require_once('mobile_push_exception.class.php');	
	
	class Mobile_Push_Gcm {

	     /**
	     * @const string Server URI
	     */
    	    const SERVER_URI = 'https://android.googleapis.com/gcm/send';

    	    /**
	     * API Key
	     *
	     * @var string
	    */
	    private $_apiKey;

	    /**
	     * Get API Key
	     *
	     * @return string
	    */
	    public function getApiKey(){
	        return $this->_apiKey;
	    }

	    /**
	     * Set API Key
	     *
	     * @param  string $key
	     * @return Zend_Mobile_Push_Gcm
	     * @throws Zend_Mobile_Push_Exception
	     */
	     public function setApiKey($key){
		        if (!is_string($key) || empty($key)) {
		        echo 'The api key must be a string and not empty';
		            //throw new Mobile_Push_Exception('The api key must be a string and not empty');
		        }
		        $this->_apiKey = $key;
		        //return $this;
	     }

	     /**
	     * List of devices Id 
	     *
	     * @var string
	    */
		private $devices = array();

	     /**
	     * Set list of devices Id 
	     *
	     * @param  string $key
	     */
		public function setDevices($deviceIds){
			if(is_array($deviceIds)){
				$this->devices = $deviceIds;
			} else {
				$this->devices = array($deviceIds);
			}
		}

	     /**
	     * Send Message
	     *
	     * @param $message
	     * @return Json array contain detail information that GCM server return
	     * @throws Mobile_Push_Exception
	     */
	    public function send($message){
	        
	    	if(!is_array($this->devices) || count($this->devices) == 0){
	    		throw new Mobile_Push_Gcm_Exception ('No devices set');
			}

			if(strlen($this->_apiKey) < 8){
				throw new Mobile_Push_Gcm_Exception ('Server API Key not set');
			}

			$fields = array(
				'registration_ids'  => $this->devices,
				'data'              => $message ,
			);

			$headers = array( 
				'Authorization: key=' . $this->getApiKey(),
				'Content-Type: application/json'
			);

			// Open connection
			$ch = curl_init();
			
			// Set the url, number of POST vars, POST data
		        curl_setopt($ch, CURLOPT_URL,  self::SERVER_URI);
		 
		        curl_setopt($ch, CURLOPT_POST, true);
		        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 
		        // Disabling SSL Certificate support temporarly
		        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		 
		        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        

			// Execute post
			$result = curl_exec($ch);

			// Close connection
			curl_close($ch);

			return $result;
		}

	} 

		
/* End of file mobile_push_gcm.class.php */
/* Location: ./www/ */
