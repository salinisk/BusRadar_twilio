BusRadar_twilio
===============

An App which uses twilio APIs to send messages about the next available bus

Put bussms.php file in a wellknown location in your server eg. www.example.com/bussms.php.


Create a Twilio account. You will be asked to verify you number. If yours is a trial account, you can
interact with Twilio with the verified number. Please make sure to verify the phone number before interacting 
with Twilio using that phone number. You will also get a phone number that is registered with 
Twilio(Lets call it TWILIO_NUMBER). This is the number you will call/ text to access the services of Twilio.


Once you have verified your number and got a TWILIO_NUMBER, you are ready to go!
Go to Number tab in your homepage and click on the number to edit its settings. Enter the address where 
you have hosted the file bussms.php in the request URL textbox of Messaging section(eg.www.example.com/bussms.php).

One final thing which you have to do is create a sqlite database "BusRadar" and create a table 
"bus_timings" with the following schema: 

"bus_number" as integer
"stop_id" as integer
"time" as real 
 
 
And insert some values in it. Thats it. You can send a text message to the TWILIO NUMBER from your verified 
number in the format: 

<Bus_number><space><Stop_id><space><depart-after-time>

Eg. 
2 178 10.30

We are assuming that clock is 24-hour clock.



