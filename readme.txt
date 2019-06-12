GET method .

token or api_key  auth

https://api.domain.com/token/sendMessage?key_value => 

https:/api.domain.com/api.php?token .......
token : 
workflow send sms this api : 
	
	reception 	required 	int 09124444441
	text_message    required 	string (max char 140)
	title 		optional 	string 
	area		optional	int
	operator	optional	int/string
	send_date	optional	timestamp (current)