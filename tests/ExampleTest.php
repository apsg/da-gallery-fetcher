<?php
namespace Apsg\Dafetcher\Tests;

use Apsg\Dafetcher\Dafetcher;
use Apsg\Dafetcher\DTO\Image;

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

    /** @test */
    public function transformed_items()
    {
        // given
        $dafetcher = new Dafetcher();

        // when
        $result = $dafetcher->fetchTransformed();

        // then
        $this->assertTrue($result[0] instanceof Image);
        $this->assertNotNull($result[0]->full());
    }
}
