<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Observer;

/**
 * The subject trait of the observer pattern.
 *
 * @see http://en.wikipedia.org/wiki/Observer_pattern
 * @since 1.0.0
 */
trait SubjectTrait
{
	/** @var ObserverInterface[] The attached observers. */
	private $observers = [];

	/**
	 * Returns true if the observer is attached to the subject.
	 *
	 * @param ObserverInterface $observer
	 * @return bool true if the observer is attached to the subject.
	 */
	public function isAttached(ObserverInterface $observer)
	{
		return in_array($observer, $this->observers);
	}

	/**
	 * Returns true if the observer is attached successfully.
	 *
	 * @param ObserverInterface $observer
	 * @return bool true if the observer is attached successfully.
	 */
	public function attach(ObserverInterface $observer)
	{
		if ($this->isAttached($observer)) {
			return false;
		}

		$this->observers[] = $observer;

		return true;
	}

	/**
	 * Returns true if the observer is detached successfully.
	 *
	 * @param ObserverInterface $observer
	 * @return bool true if the observer is detached successfully.
	 */
	public function detach(ObserverInterface $observer)
	{
		foreach ($this->observers as $key => $value) {
			if ($value === $observer) {
				unset($this->observers[$key]);

				return true;
			}
		}

		return false;
	}

	/**
	 * Notify all the attached observers.
	 *
	 * @param mixed $arguments
	 * @return null
	 */
	public function notify($arguments = null)
	{
		foreach ($this->observers as $observer) {
			$observer->update($this, $arguments);
		}
	}
}
