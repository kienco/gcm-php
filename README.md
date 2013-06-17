gcm-php
=======
<h2 style="color: #0099cc;">How to use this class ? </h2>

  <b>$Mobile_Push_Gcm = new Mobile_Push_Gcm();</b>

  <b>$Mobile_Push_Gcm->setApiKey('YOUR_API_KEY_HERE');</b>
  <b>$Mobile_Push_Gcm->setDevices('YOUR_REGID_DEVICES_ARRAY');</b>
  
  <b>$message = array('key' => value);</b>
  <b>var_dump($Mobile_Push_Gcm->send($message));</b>
