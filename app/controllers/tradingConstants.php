<?php
/********************************************
tradingConstants.php

Constants used for Trading API calls.
Replace keys and tokens with your information.

********************************************/

// eBay site to use - 0 = United States
DEFINE("SITEID",0);

// production vs. sandbox flag - true=production
DEFINE("FLAG_PRODUCTION",true);

// eBay Trading API version to use
DEFINE("API_COMPATIBILITY_LEVEL",779);
    
/* Set the Dev, App and Cert IDs
Create these on developer.ebay.com
check if need to use production or sandbox keys */
if (FLAG_PRODUCTION) {

	// PRODUCTION
	// Set the production URL for Trading API
	DEFINE("API_URL",'https://api.ebay.com/ws/api.dll');
	
	// Set production credentials (from developer.ebay.com)
	DEFINE("API_DEV_NAME",'54822021-c4f7-4b5f-83fd-42b5c4f80f45');
	DEFINE("API_APP_NAME",'ArgyleIn-66f3-4bb6-89ef-c8066d7d1d86');
	DEFINE("API_CERT_NAME",'cf0005ff-5eec-4850-ad9f-f7ba23478771');
	
	// Set the auth token for the user profile used
	DEFINE("AUTH_TOKEN",'AgAAAA**AQAAAA**aAAAAA**ppYiVQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wMkYaoDJCEpQqdj6x9nY+seQ**xpsCAA**AAMAAA**tr9nJozAr/MrE5yvPGvmof4jwwl93AihI1IswFBZ7DQLwVQEwwODCXv9MA6zZ2EgD5M/75vrjpqf34tfGYXYRrH5ZyT2T4D57GrSS7tySl1aP97XHgntKCLSlBtu9FeLZWlaBtD8+dUHmDV75PGuTB6LcLZsjHFH/Ccgtu7rGnKpUXtMtqrQui0kA5HMzU0/lKJFK27TUaZMDO3MCMX0bBU93iFpv9zps/IGrCp4LA/scgaR01odDMJNjo4uQFn/RCiRy5XZQDYt5IFhzYjkcUaWH8KdhG9aMM2vSBHAyk4VH3XBWL0BkgcTsud2OpphwDchwL5w0RnmghwQdW8mZBQwC/me5QJ+EOksoKRZBLjZEJpTzOX6wF8J3HoHPQP/wfIr1uByxIlaYMAg8q2rY6BXauyWFBNgM0YqNaFpxouTNflEDKEU95i+8lbVeWuvx/prhLec3IF0lG0vpzB3EXlOOg6fze7NvqcAAZZFQyunZTh/Gj3kITkDAZgB2VP7m0ckht0v08uWO39vqP62tS4PilrPUKw8dT/rdgwaN0yRWAL4hmvHeLYhpTcOs/HhSjLJWIfdOrKEQOgj83LX1H9uMaOFO8bwISUNWl/bpG5EzR6iuqF5/9PL7FVP8hC8625+SfflOJVcHFJMekpk+LFhoa8/j8Nyv/MGjytKuv/3hiRN7fsYJBNRKr4qycYPopAGTjuEI8KsxESo4a3dcHmC146zcN3dwpyigTJPafeLzcSslNb4etDCpdWuHHEq'); 
	         
} else {  

	// SANDBOX
	// Set the sandbox URL for Trading API calls
	DEFINE("API_URL",'https://api.sandbox.ebay.com/ws/api.dll');
	
	// Set sandbox credentials (from developer.ebay.com)
	DEFINE("API_DEV_NAME",'54822021-c4f7-4b5f-83fd-42b5c4f80f45');
	DEFINE("API_APP_NAME",'ArgyleIn-ecc9-4986-b337-97582248a312');
	DEFINE("API_CERT_NAME",'f17d92c8-b3f7-4e2d-96a8-63ba40e5412e');
	
	// Set the auth token for the user profile used
	DEFINE("AUTH_TOKEN",'AgAAAA**AQAAAA**aAAAAA**ppYiVQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wMkYaoDJCEpQqdj6x9nY+seQ**xpsCAA**AAMAAA**tr9nJozAr/MrE5yvPGvmof4jwwl93AihI1IswFBZ7DQLwVQEwwODCXv9MA6zZ2EgD5M/75vrjpqf34tfGYXYRrH5ZyT2T4D57GrSS7tySl1aP97XHgntKCLSlBtu9FeLZWlaBtD8+dUHmDV75PGuTB6LcLZsjHFH/Ccgtu7rGnKpUXtMtqrQui0kA5HMzU0/lKJFK27TUaZMDO3MCMX0bBU93iFpv9zps/IGrCp4LA/scgaR01odDMJNjo4uQFn/RCiRy5XZQDYt5IFhzYjkcUaWH8KdhG9aMM2vSBHAyk4VH3XBWL0BkgcTsud2OpphwDchwL5w0RnmghwQdW8mZBQwC/me5QJ+EOksoKRZBLjZEJpTzOX6wF8J3HoHPQP/wfIr1uByxIlaYMAg8q2rY6BXauyWFBNgM0YqNaFpxouTNflEDKEU95i+8lbVeWuvx/prhLec3IF0lG0vpzB3EXlOOg6fze7NvqcAAZZFQyunZTh/Gj3kITkDAZgB2VP7m0ckht0v08uWO39vqP62tS4PilrPUKw8dT/rdgwaN0yRWAL4hmvHeLYhpTcOs/HhSjLJWIfdOrKEQOgj83LX1H9uMaOFO8bwISUNWl/bpG5EzR6iuqF5/9PL7FVP8hC8625+SfflOJVcHFJMekpk+LFhoa8/j8Nyv/MGjytKuv/3hiRN7fsYJBNRKr4qycYPopAGTjuEI8KsxESo4a3dcHmC146zcN3dwpyigTJPafeLzcSslNb4etDCpdWuHHEq');                
}
?>