<?php

namespace Core\Database;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-12-12 at 22:46:38.
 */
class QueryBuilderTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var QueryBuilder
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new QueryBuilder(new Query);
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	/**
	 * Generated from @assert select()->from('user')->text() [==] "SELECT * FROM `user`".
	 *
	 * @covers Core\Database\QueryBuilder::from
	 */
	public function testFrom()
	{

		$this->assertEquals(
		"SELECT * FROM `user`", $this->object->select()->from('user')->text()
		);
	}

	/**
	 * Generated from @assert select()->from('user a', 'user b')->text() [==] "SELECT * FROM `user` AS `a`, `user` AS `b`".
	 *
	 * @covers Core\Database\QueryBuilder::from
	 */
	public function testFrom2()
	{

		$this->assertEquals(
		"SELECT * FROM `user` AS `a`, `user` AS `b`", $this->object->select()->from('user a', 'user b')->text()
		);
	}

	/**
	 * Generated from @assert insert('user', array('id' => 1, 'name' => 'test'))->text() [==] "INSERT INTO `user` (`id`, `name`) VALUES (:id, :name)".
	 *
	 * @covers Core\Database\QueryBuilder::insert
	 */
	public function testInsert()
	{

		$this->assertEquals(
		"INSERT INTO `user` (`id`, `name`) VALUES (:id, :name)", $this->object->insert('user', array('id' => 1, 'name' => 'test'))->text()
		);
	}

	/**
	 * Generated from @assert join('user U', 'INNER', 1)->text() [==] " INNER JOIN `user` AS U ON `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::join
	 */
	public function testJoin()
	{

		$this->assertEquals(
		" INNER JOIN `user` AS U ON `id`=1", $this->object->join('user U', 'INNER', 1)->text()
		);
	}

	/**
	 * Generated from @assert join('user U', 'INNER', array('U.id', 'A.id'))->text() [==] " INNER JOIN `user` AS U ON U.`id`=A.`id`".
	 *
	 * @covers Core\Database\QueryBuilder::join
	 */
	public function testJoin2()
	{

		$this->assertEquals(
		" INNER JOIN `user` AS U ON U.`id`=A.`id`", $this->object->join('user U', 'INNER', array('U.id', 'A.id'))->text()
		);
	}

	/**
	 * Generated from @assert join('user U', 'INNER', array('U.id', '=', 'A.id'))->text() [==] " INNER JOIN `user` AS U ON U.`id`=A.`id`".
	 *
	 * @covers Core\Database\QueryBuilder::join
	 */
	public function testJoin3()
	{

		$this->assertEquals(
		" INNER JOIN `user` AS U ON U.`id`=A.`id`", $this->object->join('user U', 'INNER', array('U.id', '=', 'A.id'))->text()
		);
	}

	/**
	 * Generated from @assert join('user U', 'INNER', array('id', '=', 1))->text() [==] " INNER JOIN `user` AS U ON `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::join
	 */
	public function testJoin4()
	{

		$this->assertEquals(
		" INNER JOIN `user` AS U ON `id`=1", $this->object->join('user U', 'INNER', array('id', '=', 1))->text()
		);
	}

	/**
	 * Generated from @assert join('user U', 'INNER', array(array('U.id', 'A.id'), array('U.id', 'A.id')))->text() [==] " INNER JOIN `user` AS U ON U.`id`=A.`id` AND U.`id`=A.`id`".
	 *
	 * @covers Core\Database\QueryBuilder::join
	 */
	public function testJoin5()
	{

		$this->assertEquals(
		" INNER JOIN `user` AS U ON U.`id`=A.`id` AND U.`id`=A.`id`", $this->object->join('user U', 'INNER', array(array('U.id', 'A.id'), array('U.id', 'A.id')))->text()
		);
	}

	/**
	 * Generated from @assert limit(10)->text() [==] " LIMIT 10".
	 *
	 * @covers Core\Database\QueryBuilder::limit
	 */
	public function testLimit()
	{

		$this->assertEquals(
		" LIMIT 10", $this->object->limit(10)->text()
		);
	}

	/**
	 * Generated from @assert limit(10, 1)->text() [==] " LIMIT 1,10".
	 *
	 * @covers Core\Database\QueryBuilder::limit
	 */
	public function testLimit2()
	{

		$this->assertEquals(
		" LIMIT 1,10", $this->object->limit(10, 1)->text()
		);
	}

	/**
	 * Generated from @assert order('id', 'id ASC')->text() [==] " ORDER BY `id`, `id` ASC".
	 *
	 * @covers Core\Database\QueryBuilder::order
	 */
	public function testOrder()
	{

		$this->assertEquals(
		" ORDER BY `id`, `id` ASC", $this->object->order('id', 'id ASC')->text()
		);
	}

	/**
	 * Generated from @assert order('id ASC')->text() [==] " ORDER BY `id` ASC".
	 *
	 * @covers Core\Database\QueryBuilder::order
	 */
	public function testOrder2()
	{

		$this->assertEquals(
		" ORDER BY `id` ASC", $this->object->order('id ASC')->text()
		);
	}

	/**
	 * Generated from @assert order('user.id DESC')->text() [==] " ORDER BY `user`.`id` DESC".
	 *
	 * @covers Core\Database\QueryBuilder::order
	 */
	public function testOrder3()
	{

		$this->assertEquals(
		" ORDER BY `user`.`id` DESC", $this->object->order('user.id DESC')->text()
		);
	}

	/**
	 * Generated from @assert order('id ASCD')->text() [==] "".
	 *
	 * @covers Core\Database\QueryBuilder::order
	 */
	public function testOrder4()
	{

		$this->assertEquals(
		"", $this->object->order('id ASCD')->text()
		);
	}

	/**
	 * Generated from @assert select('id', 'email name')->from('user')->where('`id`=1')->text() [==] "SELECT `id`,`email` AS `name` FROM `user` WHERE `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::select
	 */
	public function testSelect()
	{

		$this->assertEquals(
		"SELECT `id`,`email` AS `name` FROM `user` WHERE `id`=1", $this->object->select('id', 'email name')->from('user')->where('`id`=1')->text()
		);
	}

	/**
	 * Generated from @assert select()->text()  [==] "SELECT *".
	 *
	 * @covers Core\Database\QueryBuilder::select
	 */
	public function testSelect2()
	{

		$this->assertEquals(
		"SELECT *", $this->object->select()->text()
		);
	}

	/**
	 * Generated from @assert selectCount()->from('user')->text() [==] "SELECT COUNT(*) AS `count` FROM `user`".
	 *
	 * @covers Core\Database\QueryBuilder::selectCount
	 */
	public function testSelectCount()
	{

		$this->assertEquals(
		"SELECT COUNT(*) AS `count` FROM `user`", $this->object->selectCount()->from('user')->text()
		);
	}

	/**
	 * Generated from @assert selectCount('id ids')->from('user')->text() [==] "SELECT COUNT(`id`) AS `ids` FROM `user`".
	 *
	 * @covers Core\Database\QueryBuilder::selectCount
	 */
	public function testSelectCount2()
	{

		$this->assertEquals(
		"SELECT COUNT(`id`) AS `ids` FROM `user`", $this->object->selectCount('id ids')->from('user')->text()
		);
	}

	/**
	 * Generated from @assert selectCount('id ids', 'field alias')->from('user')->text() [==] "SELECT COUNT(`id`) AS `ids`, COUNT(`field`) AS `alias` FROM `user`".
	 *
	 * @covers Core\Database\QueryBuilder::selectCount
	 */
	public function testSelectCount3()
	{

		$this->assertEquals(
		"SELECT COUNT(`id`) AS `ids`, COUNT(`field`) AS `alias` FROM `user`", $this->object->selectCount('id ids', 'field alias')->from('user')->text()
		);
	}

	/**
	 * Generated from @assert selectDistinct('id')->from('user')->text() [==] "SELECT DISTINCT `id` FROM `user`".
	 *
	 * @covers Core\Database\QueryBuilder::selectDistinct
	 */
	public function testSelectDistinct()
	{

		$this->assertEquals(
		"SELECT DISTINCT `id` FROM `user`", $this->object->selectDistinct('id')->from('user')->text()
		);
	}

	/**
	 * Generated from @assert update('user')->set(array('key1'=>'value1', 'key2'=>2))->where(1)->text() [==] "UPDATE `user` SET `key1`=:key1, `key2`=:key2 WHERE `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::set
	 */
	public function testSet()
	{

		$this->assertEquals(
		"UPDATE `user` SET `key1`=:key1, `key2`=:key2 WHERE `id`=1", $this->object->update('user')->set(array('key1' => 'value1', 'key2' => 2))->where(1)->text()
		);
	}

	/**
	 * Generated from @assert update('user')->set(array('key1'=>'value1', 'key2'=>2))->where(array(array('id', 1), array('id', 1)))->text() [==] "UPDATE `user` SET `key1`=:key1, `key2`=:key2 WHERE `id`=1 AND `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::update
	 */
	public function testUpdate()
	{

		$this->assertEquals(
		"UPDATE `user` SET `key1`=:key1, `key2`=:key2 WHERE `id`=1 AND `id`=1", $this->object->update('user')->set(array('key1' => 'value1', 'key2' => 2))->where(array(array('id', 1), array('id', 1)))->text()
		);
	}

	/**
	 * Generated from @assert where(1)->text() [==] " WHERE `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere()
	{

		$this->assertEquals(
		" WHERE `id`=1", $this->object->where(1)->text()
		);
	}

	/**
	 * Generated from @assert where(array('id', 1))->text() [==] " WHERE `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere2()
	{

		$this->assertEquals(
		" WHERE `id`=1", $this->object->where(array('id', 1))->text()
		);
	}

	/**
	 * Generated from @assert where(array('id', '1'))->text() [==] " WHERE `id`='1'".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere3()
	{

		$this->assertEquals(
		" WHERE `id`='1'", $this->object->where(array('id', '1'))->text()
		);
	}

	/**
	 * Generated from @assert where(array('date', '2015-1-1 30:30'))->text() [==] " WHERE `date`='2015-1-1 30:30'".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere4()
	{

		$this->assertEquals(
		" WHERE `date`='2015-1-1 30:30'", $this->object->where(array('date', '2015-1-1 30:30'))->text()
		);
	}

	/**
	 * Generated from @assert where(array('id', '=', 1))->text() [==] " WHERE `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere5()
	{

		$this->assertEquals(
		" WHERE `id`=1", $this->object->where(array('id', '=', 1))->text()
		);
	}

	/**
	 * Generated from @assert where('`id`=1 OR (SELECT ....)')->text() [==] " WHERE `id`=1 OR (SELECT ....)".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere6()
	{

		$this->assertEquals(
		" WHERE `id`=1 OR (SELECT ....)", $this->object->where('`id`=1 OR (SELECT ....)')->text()
		);
	}

	/**
	 * Generated from @assert where(array('id', '=', 1))->text() [==] " WHERE `id`=1".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere7()
	{

		$this->assertEquals(
		" WHERE `id`=1", $this->object->where(array('id', '=', 1))->text()
		);
	}

	/**
	 * Generated from @assert where(array('id', 'IN', array(1, 2, '3')))->text() [==] " WHERE `id` IN (:id0, :id1, :id2)".
	 *
	 * @covers Core\Database\QueryBuilder::where
	 */
	public function testWhere8()
	{

		$this->assertEquals(
		" WHERE `id` IN (:id0, :id1, :id2)", $this->object->where(array('id', 'IN', array(1, 2, '3')))->text()
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::cacheOn
	 * @todo   Implement testCacheOn().
	 */
	public function testCacheOn()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::count
	 * @todo   Implement testCount().
	 */
	public function testCount()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::delete
	 * @todo   Implement testDelete().
	 */
	public function testDelete()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::execute
	 * @todo   Implement testExecute().
	 */
	public function testExecute()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::first
	 * @todo   Implement testFirst().
	 */
	public function testFirst()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::groupBy
	 * @todo   Implement testGroupBy().
	 */
	public function testGroupBy()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::having
	 * @todo   Implement testHaving().
	 */
	public function testHaving()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::toArray
	 * @todo   Implement testToArray().
	 */
	public function testToArray()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Core\Database\QueryBuilder::union
	 * @todo   Implement testUnion().
	 */
	public function testUnion()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}
}