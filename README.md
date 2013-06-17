gcm-php
=======
How to use this class ? 

  $Mobile_Push_Gcm = new Mobile_Push_Gcm();

  $Mobile_Push_Gcm->setApiKey('YOUR_API_KEY_HERE');
  $Mobile_Push_Gcm->setDevices('YOUR_REGID_DEVICES_ARRAY');
  
  $message = array('key' => value);
	var_dump($Mobile_Push_Gcm->send($message));
