# pharout
Testing grounds for Phars

## Testing Steps
1. Delete `test.phar`
1. Generate a new `test.phar` by running `php make-phar.php`
1. Check that it worked by running `php phartester.php`. It will output all declared classes and interfaces and also "hello world";

## Todos
- Investigate including an autoloader in the `phar-index.php` (see e.g. https://github.com/amzn/amazon-instant-access-sdk-php/blob/master/phar-stub.php )


## Thanks to
- https://stackoverflow.com/questions/38214154/how-do-i-correctly-create-and-then-require-a-phar-file?noredirect=1&lq=1
- https://stackoverflow.com/questions/26050054/strange-error-message-with-phar
- http://us1.php.net/manual/en/phar.setdefaultstub.php