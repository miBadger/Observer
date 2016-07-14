# ObserverInterface

The observer interface.

## Example(s)

```php
<?php

use miBadger\Observer\ObserverInterface;

/**
 * The subject updates al attached observers when he is notified.
 */
$observer->update(SubjectInterface $subject, $arguments = null);
```
