This code uses the `mysql_*` functions, which are deprecated and removed in PHP 7.0 and later versions.  Using deprecated functions can lead to security vulnerabilities and prevent your code from running on newer PHP installations.

```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('databaseName', $link);
$result = mysql_query("SELECT * FROM table", $link);
while ($row = mysql_fetch_assoc($result)) {
    // process each row
}
mysql_close($link);
?>
```