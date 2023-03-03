# createLog Package
The createLog package is a PHP class that allows you to easily create log files for various types of data. With this package, you can log errors, warnings, messages, or any other type of data you want to track in your application.

# Installation
To install the createLog package, follow these steps:

1. Open your terminal or command prompt.
2. Navigate to your project directory.
3. Run the following command:

```
composer require berkaykaradeniz/create-log
```
4. The package will be installed in your vendor directory.

# Run
```
composer install
```

# Usage

Here's an example of how to use the c'reateLog' class:
```
require_once('vendor/berkaykaradeniz/create-log/createLog.php');

$createLog = new createLog("logs", "Error");
if ($createLog->createLog())
	echo "Log Başarılı";
else
	echo "Log Başarısız.";

```

# Troubleshooting
If you encounter any issues when using the createLog package, here are a few troubleshooting tips:

- Check that the log file name and directory are correct.
- Ensure that the file permissions allow for writing to the log file.
- Double-check that the correct methods are being called with the correct parameters.

# Conclusion
With the createLog package, you can easily add logging functionality to your PHP applications. By following the steps outlined in this documentation, you can get started with the package quickly and easily.


# Packagist

https://packagist.org/packages/berkaykaradeniz/create-log
