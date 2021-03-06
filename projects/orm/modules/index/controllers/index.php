<?php
/**
 * @filesource index/controllers/index.php
 * @link http://www.kotchasan.com/
 * @copyright 2015 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Index;

use \Core\Orm\Recordset as Recordset;
use \Index\World\Model as World;

/**
 * default Controller
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Controller extends \Controller
{

	public function index()
	{
		// อ่านรายชื่อฟิลด์ของตาราง
		$model = Recordset::create('Index\World\Model');
		$fields = $model->getFileds();
		echo implode(', ', array_keys($fields)).'<br>';
		// ลบข้อมูลทั้งตาราง
		$model->truncate();
		// insert new record
		for ($i = 0; $i < 10000; $i++) {
			$query = World::create();
			$query->updated_at = \Datetool::mktimeToSqlDateTime(\Kotchasan::$mktime);
			$query->save();
		}
		// อัปเดททุก record
		$model->updateAll(array('created_at' => \Datetool::mktimeToSqlDateTime(\Kotchasan::$mktime)));
		// อ่านจำนวนข้อมูลทั้งหมดในตาราง
		echo 'All '.$model->count().' records.<br>';
		// สุ่ม record มาแก้ไข
		for ($i = 0; $i < 5; $i++) {
			$rnd = rand(1, 10000);
			$world = $model->find($rnd);
			$world->name = 'Hello World!';
			$world->save();
		}
		// query รายการที่มีการแก้ไข
		$model->where(array('name', '!=', ''));
		// อ่านจำนวนข้อมูลที่พบ
		echo 'Found '.$model->count().' records.<br>';
		// แสดงผลรายการที่พบ
		foreach ($model->all('id', 'name') as $item) {
			echo $item->id.'='.$item->name.'<br>';
			// ลบรายการที่กำลังแสดงผล
			$item->delete();
		}
		// อ่านรายชื่อฟิลด์ของ query
		$fields = $model->getFileds();
		echo implode(', ', array_keys($fields)).'<br>';
		// อ่านจำนวนข้อมูลที่เหลือ
		echo 'Remain '.Recordset::create('Index\World\Model')->count().' records.<br>';
	}
}