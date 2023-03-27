# Laravel-SMSss

SMS package to use Airtel SMS Provider or any SMS Provider that use GET method to send messages.

- [Laravel - SMS](#laravel-sms)
    - [Requirements](#requirements)
    - [Installation](#installation)
        - [Add repositories](#step1)
        - [Installation ](#step2)
        - [Env Keys](#env-keys)
    - [Usage](#usage)
    - [Contributing](#contributing)
    - [Contact](#Contact)

## Requirements
- guzzlehttp >= 7.0.1

## Installation

### Step 1
The package is now only supported via repositories, add the following to your root composer.json :

```php
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/tiganii/laravel-sms.git"
        }
    ],
```
### Step 2
You can install the package via composer :

```shell
composer require tigani/laravel-sms
```

#### Env Keys
```dotenv
SMS_API=
SMS_USERNAME=
SMS_PASSWORD=
SMS_FROM=
```
## Usage
```php
//using betaSMS
use Tigani\SMS\SMS;

$sms = new SMS();
$sms->send(['+249xxxxxxxxx'], 'This is a message text from github installed package');
//returns true if the message is sent. Or false if error occured.
//The numbers are sent as a list.
//If from parameter is received is will be used, otherwise the SMS_FROM from .env will be used
//You can get exception via getException() or get the server response via getResponse()
```

## Contributing
- Fork this project
- Clone your forked repo

## Contact
- tigani.ismail@gmail.com


