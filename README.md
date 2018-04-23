# Email subscription API ✉️

<br>

> Email Subscription API Using PHP Slim Restful 🔌

<br>

<p>PHP Rest API for Collects the Website/Blog Visitors Email into Database.</p>

<p>
<a target="_blank" href="https://www.slimframework.com/" title="Slim Framework 3"><img src="https://img.shields.io/badge/PHP-Slim%20Framework%203-brightgreen.svg"></a>
<a target="_blank" href="https://github.com/mskian/email-subscription-api/blob/master/LICENSE" title="License: MIT"><img src="https://img.shields.io/badge/License-MIT-yellowgreen.svg"></a>
</p>

## Requirements

- PHP Slim Framework 3
- Cross-Origin Resource Sharing (CORS) - Cross Domain Access

## Installation

- Clone this Respo or Download

```
git clone https://github.com/mskian/email-subscription-api.git
```

- Create Database Tables

```
CREATE TABLE `emsubs` (
 `id` INT NOT NULL AUTO_INCREMENT,
 `name` VARCHAR (100) NOT NULL, 
 `email` VARCHAR (100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

- Next Open `Config.php` & Add Database Username, password & DB Name

## PHP cURL

```
<?php

/*
* Post data's via PHP cURL
*/
    
    // POST Fields
    $data = array(
        'name' => 'Santhosh Veer',
        'email' => 'hello@example.com'
    );

// REST API URL
$url = "http://localhost/v2/register";

    // cURL 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_HEADER ,0);  // DO NOT RETURN HTTP HEADERS
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Print Output
    $output = curl_exec($ch);
    $err = curl_error($ch);

    curl_close($ch);

    //echo $output;

    if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        echo $output;
      }
```

## Responses

- For Post Method

API URL ➡️ `https://api.example.com/register`

**Insert**

```
{
	"error": false,
	"message": "Registered successfully",
	"user": {
		"id": 2,
		"name": "Santhosh veer",
		"email": "support@Example.com"
	}
}
```

**Check if Email Already Exist**

```
{
	"error": true,
	"message": "This email already exist"
}
```

**Check if the Field is Missing**

```
{
	"error": true,
	"message": "Required field(s) name is missing or empty"
}
```

- For GET Method

API URL ➡️ `https://api.example.com/users`

```
{
	"users": [
		{
			"id": 1,
			"name": "Santhosh veer",
			"email": "Hello@Example.com"
		},
		{
			"id": 2,
			"name": "Santhosh veer",
			"email": "support@Example.com"
		}
	]
}
```

## Contribution

Just Fork this respo & Send Pull Request

**Contributors** 👇

1 - <a href="https://github.com/InterferenceObject" title="InterferenceObject">@InterferenceObject</a> ▶️ `Added data sanitization for extra security`

## License

MIT
