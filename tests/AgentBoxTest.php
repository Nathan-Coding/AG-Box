<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/AgentBox.php';
final class AgentBoxTest extends TestCase
{
    public function testQ1Case(): void
    {   
        $Q1 = new Q1();
        $this->assertEquals($Q1->repeatWord('documentarily'), true);
        $this->assertEquals($Q1->repeatWord('aftershock'), true);
        $this->assertEquals($Q1->repeatWord('countryside'), true);
        $this->assertEquals($Q1->repeatWord('six-year-old'), true);
        
        $this->assertEquals($Q1->repeatWord('Double-down', false), false);
        $this->assertEquals($Q1->repeatWord('Euclidean', false), false);
        $this->assertEquals($Q1->repeatWord('epidemic'), false);
    }

    public function testQ2Case(): void
    {   
        $Q2 = new Q2();
        $this->assertEquals($Q2->literalDateParsing('The first Monday of October 2019'), '2019-10-07');
        $this->assertEquals($Q2->literalDateParsing('The third Tuesday of October 2019'), '2019-10-15');
        $this->assertEquals($Q2->literalDateParsing('The last Wednesday of October 2019'), '2019-10-30');
    }

    public function testQ3Case(): void
    {   
        $Q3 = new Q3();
        $this->assertEquals($Q3->stringMerge('MICHAEL', 'JORDAN'), 'MJIOCRHDAAENL');
    }

    public function testQ4Case(): void
    {   
        $Q4 = new Q4();
        $this->assertEquals($Q4->superDigit(4), 4);
        $this->assertEquals($Q4->superDigit(18), 9);
        $this->assertEquals($Q4->superDigit(258), 6);
    }
    
    public function testQ5Case(): void
    {     
        $expectedArray = [
            '1P3115' => 'commercial',
            '1P0116' => 'commercial',
            '1P0117' => 'commercial',
            '1P0118' => 'rental',
            '1P0119' => 'rural',
            '1P0120' => 'business',
            '1P0121' => 'business',
            '1P0122' => 'business',
            '1P0123' => 'holidayRental',
            '1P0036' => 'residential',
            '1P0006' => 'commercial',
            '2631096' => 'holidayRental'
        ];
        $Q5 = new Q5();
        $filePath = __DIR__ . '/../src/sample-reaxml.xml';
        $this->assertEquals($Q5->importXML($filePath), $expectedArray);
    }
}