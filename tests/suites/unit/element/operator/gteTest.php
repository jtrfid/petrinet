<?php
/**
 * @package     Tests.Unit
 * @subpackage  Operator
 *
 * @copyright   Copyright (C) 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for PNElementOperatorGte.
 *
 * @package     Tests.Unit
 * @subpackage  Operator
 * @since       1.0
 */
class PNElementOperatorGteTest extends TestCase
{
	/**
	 * @var    PNElementOperatorGte  A PNElementOperatorGte instance.
	 * @since  1.0
	 */
	protected $object;

	/**
	 * Setup.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->object = new PNElementOperatorGte;
	}

	/**
	 * Data provider for the execute method.
	 *
	 * @return  array  The data.
	 */
	public function provider()
	{
		return array(
			array(3.2, 3 ,true),
			array('2.8', 3, false),
			array('3', '3', true),
		);
	}

	/**
	 * Execute the Comparison.
	 *
	 * @param   mixed    $leftValue   The left value.
	 * @param   mixed    $rightValue  The right value.
	 * @param   boolean  $expected    The expected return value.
	 *
	 * @return  void
	 *
	 * @dataProvider  provider
	 * @covers        PNElementOperatorGte::execute
	 * @since         1.0
	 */
	public function testExecute($leftValue, $rightValue, $expected)
	{
		$return = $this->object->execute($leftValue, $rightValue);

		$this->assertEquals($expected, $return);
	}
}