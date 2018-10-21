<?php

namespace KeywordExtractor\Modifiers\Transformers;

use PHPUnit\Framework\TestCase;

class LowerCaseTransformerTest extends TestCase
{
    public function testModifyText()
    {
        $transformer = new LowerCaseTransformer();
        $this->assertEquals('this is a test', $transformer->modifyText('This is A TEST'));
    }
}
