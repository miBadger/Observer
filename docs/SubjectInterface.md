# SubjectInterface

The subject interface.

## Example(s)

```php
<?php

use miBadger\Observer\SubjectInterface;

/**
 * Returns true if the observer is attached to the subject.
 */
$subject->isAttached(ObserverInterface $observer);

/**
 * Returns true if the observer is attached successfully.
 */
$subject->attach(ObserverInterface $observer);

/**
* Returns true if the observer is detached successfully.
 */
$subject->detach(ObserverInterface $observer);

/**
 * Notify all the attached observers.
 */
$subject->notify($arguments = null);
```
