<?php  
class SMS{

	private $number;
	private $message;

	public function __construct($phone,$mess){
		$this->number = $phone;
		$this->message = $mess;
	}

	public function envio(){
		$data = array('dst_number' => $this->number,
              'sms_content' => $this->message);
	    $data_string = json_encode($data);
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, 'https://api.connectus.cl/api_v2/send_sms');
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_USERPWD, '28d2b784dfce4b4781a0da8dc1c34899:d81125c5e39b49cbaec1543a342f0535');
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	    curl_setopt($ch, CURLOPT_HEADER, 1);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	        'Accept: application/json',
	        'Content-Type: application/json')
	    );
	    if(curl_exec($ch) === false){
	        echo 'Curl error: ' . curl_error($ch);
	    }
	    curl_close($ch);
	}
}
?>