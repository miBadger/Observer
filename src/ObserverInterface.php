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
 * The subject interface of the observer pattern.
 *
 * @see http://en.wikipedia.org/wiki/Observer_pattern
 * @since 1.0.0
 */
interface ObserverInterface
{
	/**
	 * The subject updates al attached observers when he is notified.
	 *
	 * @param SubjectInterface $subject
	 * @param mixed $arguments = null
	 * @return null
	 */
	public function update(SubjectInterface $subject, $arguments = null);
}
