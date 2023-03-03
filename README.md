# createLog
It is for easy log class for all users.

# Composer.json
```
{
    "require": {
        "berkaykaradeniz/create-log": "dev-main"
    }
}
```
# Run
```
composer install
```

# Usage
```
require_once('vendor/berkaykaradeniz/create-log/createLog.php');

$createLog = new createLog("logs", "Error");
if ($createLog->createLog())
	echo "Log Başarılı";
else
	echo "Log Başarısız.";

```
# Packagist

https://packagist.org/packages/berkaykaradeniz/create-log
