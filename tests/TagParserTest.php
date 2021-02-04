<?php

namespace Test;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase {
    public function test_parse_a_comma_separated_list_of_tags()
    {
        $parser = new TagParser();

        $tags = $parser->parse("a, b, c");
        $expected = ["a", "b", "c"];

        $this->assertSame($tags, $expected);
    }
}
