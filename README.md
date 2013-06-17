gcm-php
=======
<h2>How to use this class ? </h2>
  <b>include("mobile_push_gcm.class.php");</b> <br/>
  <b>$Mobile_Push_Gcm = new Mobile_Push_Gcm();</b> <br/>

  <b>$Mobile_Push_Gcm->setApiKey('YOUR_API_KEY_HERE');</b> <br/>
  <b>$Mobile_Push_Gcm->setDevices('YOUR_REGID_DEVICES_ARRAY');</b> <br/>
  
  <b>$message = array('key' => value);</b> <br/>
  <b>var_dump($Mobile_Push_Gcm->send($message));</b> <br/>
