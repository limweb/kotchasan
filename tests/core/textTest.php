<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-12-12 at 22:42:04.
 */
class TextTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var Text
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Text;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	/**
	 * Generated from @assert ('&lt;, &gt;, &#92;, &nbsp;') [==] "<, >, \\,  ".
	 *
	 * @covers Text::quoteText
	 */
	public function testQuoteText()
	{

		$this->assertEquals(
		"<, >, \\,  ", \Text::quoteText('&lt;, &gt;, &#92;, &nbsp;')
		);
	}

	/**
	 * Generated from @assert ('&"'."'<>{}&amp;&#38;") [==] "&amp;&quot;&#039;&lt;&gt;&#x007B;&#x007D;&amp;&#38;".
	 *
	 * @covers Text::detail_to_text
	 */
	public function testDetail_to_text()
	{

		$this->assertEquals(
		"&amp;&quot;&#039;&lt;&gt;&#x007B;&#x007D;&amp;&#38;", \Text::detail_to_text('&"'."'<>{}&amp;&#38;")
		);
	}

	/**
	 * Generated from @assert ('&"'."'<>\/&amp;&#38;", true) [==] "&amp;&quot;&#039;&lt;&gt;&#92;/&amp;amp;&amp;#38;".
	 *
	 * @covers Text::htmlspecialchars
	 */
	public function testHtmlspecialchars()
	{

		$this->assertEquals(
		"&amp;&quot;&#039;&lt;&gt;&#92;/&amp;amp;&amp;#38;", \Text::htmlspecialchars('&"'."'<>\/&amp;&#38;", true)
		);
	}

	/**
	 * Generated from @assert ('&"'."'<>\/&amp;&#38;", false) [==] "&amp;&quot;&#039;&lt;&gt;&#92;/&amp;&#38;".
	 *
	 * @covers Text::htmlspecialchars
	 */
	public function testHtmlspecialchars2()
	{

		$this->assertEquals(
		"&amp;&quot;&#039;&lt;&gt;&#92;/&amp;&#38;", \Text::htmlspecialchars('&"'."'<>\/&amp;&#38;", false)
		);
	}

	/**
	 * @covers Text::rndname
	 * @todo   Implement testRndname().
	 */
	public function testRndname()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::cut
	 * @todo   Implement testCut().
	 */
	public function testCut()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::pregReplace
	 * @todo   Implement testPregReplace().
	 */
	public function testPregReplace()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::textarea
	 * @todo   Implement testTextarea().
	 */
	public function testTextarea()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::topic
	 * @todo   Implement testTopic().
	 */
	public function testTopic()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::detail
	 * @todo   Implement testDetail().
	 */
	public function testDetail()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::formatFileSize
	 * @todo   Implement testFormatFileSize().
	 */
	public function testFormatFileSize()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::unserialize
	 * @todo   Implement testUnserialize().
	 */
	public function testUnserialize()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::oneLine
	 * @todo   Implement testOneLine().
	 */
	public function testOneLine()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Text::replaceAll
	 * @todo   Implement testReplaceAll().
	 */
	public function testReplaceAll()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}
}