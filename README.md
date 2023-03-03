# Packagist

https://packagist.org/packages/berkaykaradeniz/create-log

# createLog
It is for easy log class for all users.

# Install

create a composer.json Like

{
    "require": {
        "berkaykaradeniz/create-log": "dev-main"
    }
}

composer install

# Usage

require_once('vendor/berkaykaradeniz/create-log/createLog.php');

$createLog = new createLog("logs", "Error");
if ($createLog->createLog())
	echo "Log Başarılı";
else
	echo "Log Başarısız.";
