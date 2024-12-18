To fix this, use strict comparison (`===`) to ensure both the type and value are identical:

```php
<?php
$a = "10";
$b = 10;
if ($a === $b) {
  echo "Equal";
} else {
  echo "Not Equal";
}
?>
```

Now, "Not Equal" will be printed, as expected, because the type of `$a` (string) is different from the type of `$b` (integer).  Strict comparison prevents unintended type coercion and leads to more reliable code.