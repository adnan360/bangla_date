Bangla Date functions by Adnan
==============================

This repo is for showing Bangla Date in PHP websites. I didn't found a comprehensive function to use, so I made my own.

It has 2 functions, one for translating English numbers to Bangla numbers, another one is for formatting the Bangla Date properly.

### Supported format parameters

It is not complete. The code does not support all the parameters. By far it supports the following:

d, D, j, l, F, m, M, n, t, Y, y, g, G, h, H, i, s, a, A

Although that should be enough to cover the most common usages.

### Usage:

Check out test.php for details. But it basically works like this:

```
<?php

include ('bangla_date.php');

header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('Asia/Dhaka');

echo bangla_date('g:i:s - d/m/y - l d M Y');

?>
```
