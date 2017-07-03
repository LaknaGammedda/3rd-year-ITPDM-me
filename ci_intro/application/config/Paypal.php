
<?php
 /** set your paypal credential **/
  $config['client_id'] = 'Ad4AEdv5XP5Ws-qioRsxEgy5KWMMaSdNXYt5f2rzajX8FEpKdGCMwvaoM4ZlbO9N5LSMyLg8f8PscjZk'; 
  $config['secret'] = 'EO7v5UsIqMF3lqU7iOi9huXFeGa9Rriafn8xJMOPfw3FR90O7gAn0eYPFy8a6puGXcswDolEJq_u1OJZ';

  $config['settings'] = array(

  	'mode' => 'sandbox',
  	
     // Specify the max request time in seconds 
  	'http.ConnectionTimeOut' => 1000,

  	//Whether want to log to a file
  	'log.LogEnabled' => true,

  	//Specify the file that want to write on
  	'log.FileName' => 'application/logs/paypal.log',

  	/** * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
  	 * * Logging is most verbose in the 'FINE' level and decreases as you
  	  * proceed towards ERROR */
  	'log.LogLevel' => 'FINE'
  	);