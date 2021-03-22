<?php
namespace Apsg\Dafetcher\Tests;

use Apsg\Dafetcher\Dafetcher;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function facade_is_working()
    {
        // given
        $this->app->make(Dafetcher::class)->fetch();

        // when

        // then
    }
}
