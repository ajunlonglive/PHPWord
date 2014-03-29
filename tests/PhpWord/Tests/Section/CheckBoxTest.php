<?php
/**
 * PHPWord
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2014 PHPWord
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt LGPL
 */

namespace PhpOffice\PhpWord\Tests\Section;

use PhpOffice\PhpWord\Section\CheckBox;

/**
 * Test class for PhpOffice\PhpWord\Section\CheckBox
 *
 * @runTestsInSeparateProcesses
 */
class CheckBoxTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Construct
     */
    public function testConstruct()
    {
        $oCheckBox = new CheckBox();

        $this->assertInstanceOf('PhpOffice\\PhpWord\\Section\\CheckBox', $oCheckBox);
        $this->assertEquals(null, $oCheckBox->getText());
        $this->assertInstanceOf('PhpOffice\\PhpWord\\Style\\Font', $oCheckBox->getFontStyle());
        $this->assertInstanceOf('PhpOffice\\PhpWord\\Style\\Paragraph', $oCheckBox->getParagraphStyle());
    }

    /**
     * Get name and text
     */
    public function testCheckBox()
    {
        $oCheckBox = new CheckBox('chkBox', 'CheckBox');

        $this->assertEquals($oCheckBox->getName(), 'chkBox');
        $this->assertEquals($oCheckBox->getText(), 'CheckBox');
    }

    /**
     * Get font style
     */
    public function testFont()
    {
        $oCheckBox = new CheckBox('chkBox', 'CheckBox', 'fontStyle');
        $this->assertEquals($oCheckBox->getFontStyle(), 'fontStyle');

        $oCheckBox->setFontStyle(array('bold' => true, 'italic' => true, 'size' => 16));
        $this->assertInstanceOf('PhpOffice\\PhpWord\\Style\\Font', $oCheckBox->getFontStyle());
    }

    /**
     * Get paragraph style
     */
    public function testParagraph()
    {
        $oCheckBox = new CheckBox('chkBox', 'CheckBox', 'fontStyle', 'paragraphStyle');
        $this->assertEquals($oCheckBox->getParagraphStyle(), 'paragraphStyle');

        $oCheckBox->setParagraphStyle(array('align' => 'center', 'spaceAfter' => 100));
        $this->assertInstanceOf('PhpOffice\\PhpWord\\Style\\Paragraph', $oCheckBox->getParagraphStyle());
    }
}
