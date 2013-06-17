gcm-php
=======
<h2>How to use this class ? </h2>

  <b>$Mobile_Push_Gcm = new Mobile_Push_Gcm();<b>

  $Mobile_Push_Gcm->setApiKey('YOUR_API_KEY_HERE');
  $Mobile_Push_Gcm->setDevices('YOUR_REGID_DEVICES_ARRAY');
  
  $message = array('key' => value);
	var_dump($Mobile_Push_Gcm->send($message));
