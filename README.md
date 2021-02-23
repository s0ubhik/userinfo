# UserInfo
get User IP address, Browser, Operating system and Device in PHP

## Index
```php
class UserInfo {
    public static function ip () { return $IP } /* get User IP Adress */
    public static function os () { return $OS } /* get User Operarting */
    public static function device () { return $user_device } /* get User Device */
    public static function browser () { return $user_browser } /* get User Browswer */
}
```


## Examples
### Initialze 
```php
require("UserInfo.php")
```

### Get Client IP Address
```php
echo(UserInfo::ip());
// output: 123.45.67.89
```

### Get Client Operating System
```php
echo(UserInfo::os());
// output: Mac OS X
```

### Get Client Device
```php
echo(UserInfo::device());
// output: Computer
```

### Get Client Browser
```php
echo(UserInfo::browser());
// output: Chrome
```

