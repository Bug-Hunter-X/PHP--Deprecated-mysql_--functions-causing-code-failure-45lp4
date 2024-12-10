# PHP: Deprecated mysql_* functions

This repository demonstrates a common error in PHP code: the use of deprecated `mysql_*` functions. These functions are insecure and no longer supported in modern PHP versions.

The `bug.php` file shows the problematic code using `mysql_connect`, `mysql_select_db`, `mysql_query`, `mysql_fetch_assoc`, and `mysql_close`. This code will not work correctly on PHP 7 and later.

The `bugSolution.php` file presents a corrected version using the recommended `mysqli_*` or PDO extensions.  This corrected version is secure and compatible with modern PHP installations.

## How to fix the issue

Replace the outdated `mysql_*` functions with the improved `mysqli_*` or PDO alternatives.  This is crucial for security and compatibility.

Remember to update your database connection parameters accordingly.