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
 * The subject test.
 *
 * @since 1.0.0
 */
class SubjectTest extends \PHPUnit_Framework_TestCase
{
	/** @var The subject. */
	private $subject;

	/** @var The observer. */
	private $observer;

	/** @var The flag. */
	public static $flag;

	public function seTup()
	{
		$this->subject = new SubjectTraitTestMock();
		$this->observer = new ObserverMock();
		self::$flag = false;
	}

	public function testAttach()
	{
		$this->assertTrue($this->subject->attach($this->observer));
		$this->assertFalse($this->subject->attach($this->observer));
	}

	/**
	 * @depends testAttach
	 */
	public function testDetach()
	{
		$this->subject->attach($this->observer);
		$this->assertTrue($this->subject->detach($this->observer));
		$this->assertFalse($this->subject->detach($this->observer));
	}

	/**
	 * @depends testAttach
	 */
	public function testNotify()
	{
		$this->subject->attach($this->observer);
		$this->assertNull($this->subject->notify());
		$this->assertTrue(self::$flag);
	}
}

class SubjectTraitTestMock implements SubjectInterface
{
	use SubjectTrait;
}

class ObserverMock implements ObserverInterface
{
	public function update(SubjectInterface $subject, $arguments = null)
	{
		SubjectTest::$flag = true;
	}
}
