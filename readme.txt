GET method .

token or api_key  auth

https://api.domain.com/token/sendMessage?key_value  

https:/api.domain.com/api.php?token= .......

workflow send sms this api : 
	token		required 	string
	reception 	required 	int 09124444441
	text_message    required 	string (max char 140)
	title 		optional 	string 
	area		optional	int
	operator	optional	int/string
	send_date	optional	timestamp (current)
How to use :
 1.
	cheang information to customer/init.php
		const BASE_URL = '' ;
		const BASE_PATH = '' ;
 2.
	run customer/index.php
	insert information and submit form .
	check the customer/panel/view.php (is there information ? ) please checked by url .
	check the phone/	please checked by path.
	check the customer/db/sms.json (is it exsist there ? ) please checked by path.
