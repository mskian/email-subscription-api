# Email subscription API ✉️

<br>

> Email Subscription API Using PHP Slim Restful 🔌

<br>

<p>PHP Rest API for Collects the Website/Blog Visitors Email into Database.</p>

<p>
<a target="_blank" href="https://www.slimframework.com/" title="Slim Framework 3"><img src="https://img.shields.io/badge/PHP-Slim%20Framework%203-brightgreen.svg"></a>
<a target="_blank" href="https://github.com/mskian/email-subscription-api/blob/master/LICENSE" title="License: GPL"><img src="https://img.shields.io/badge/License-MIT-yellowgreen.svg"></a>
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

## License

MIT
