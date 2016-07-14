# Observer

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Observer/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Observer/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Observer/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Observer/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Observer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Observer/?branch=master)

The Observer Component.

## Example

```php
<?php

use miBadger\Observer\ObserverInterface;
use miBadger\Observer\SubjectInterface;
use miBadger\Observer\SubjectTrait;

/**
 * The observer class.
 */
class Observer implements ObserverInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function update(SubjectInterface $subject, $arguments = null)
	{
		echo 'test';
	}
}

/**
 * The subject class.
 */
class Subject implement SubjectInterface
{
	use SubjectTrait;
}

```

```php
<?php

/**
 * Create a new subject.
 */
$subject = new Subject();

/**
 * Create a new observer.
 */
$observer = new Observer()

/**
 * Attach observer.
 */
$subject->attach($observer);

/**
 * Notify the attached observers.
 */
$subject->notify();
```
