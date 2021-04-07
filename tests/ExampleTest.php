<?php
namespace Apsg\Dafetcher\Tests;

use Apsg\Dafetcher\Dafetcher;

class ExampleTest extends TestCase
{
    /** @test */
    public function basic_gallery_fetch()
    {
        // given
        $dafetcher = new Dafetcher();

        // when
        $result = $dafetcher->fetch();

        // then
        $this->assertTrue(is_array($result));
        $this->assertNotNull($result[0]->deviationid);
    }
}
