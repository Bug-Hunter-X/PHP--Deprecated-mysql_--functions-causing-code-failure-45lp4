This updated code uses the `mysqli_*` functions, a more secure and supported alternative to the deprecated `mysql_*` functions.

```php
<?php
$link = mysqli_connect('localhost', 'user', 'password', 'databaseName');
if (!$link) {
die('Could not connect: ' . mysqli_connect_error());
}
$result = mysqli_query($link, "SELECT * FROM table");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // process each row
    }
    mysqli_free_result($result);
} else {
    die('Query failed: ' . mysqli_error($link));
}
mysqli_close($link);
?>
```

For even better security and flexibility, consider using PDO (PHP Data Objects).  PDO offers a more consistent and robust approach to database interaction.