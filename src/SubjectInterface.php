<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Observer;

/**
 * The subject interface of the observer pattern.
 *
 * @see http://en.wikipedia.org/wiki/Observer_pattern
 * @since 1.0.0
 */
interface SubjectInterface
{
	/**
	 * Returns true if the observer is attached to the subject.
	 *
	 * @param ObserverInterface $observer
	 * @return bool true if the observer is attached to the subject.
	 */
	public function isAttached(ObserverInterface $observer);

	/**
	 * Returns true if the observer is attached successfully.
	 *
	 * @param ObserverInterface $observer
	 * @return bool true if the observer is attached successfully.
	 */
	public function attach(ObserverInterface $observer);

	/**
	 * Returns true if the observer is detached successfully.
	 *
	 * @param ObserverInterface $observer
	 * @return bool true if the observer is detached successfully.
	 */
	public function detach(ObserverInterface $observer);

	/**
	 * Notify all the attached observers.
	 *
	 * @param mixed $arguments = null
	 * @return null
	 */
	public function notify($arguments = null);
}
