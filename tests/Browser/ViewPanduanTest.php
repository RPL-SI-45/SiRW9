<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewPanduanTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')        
            ->clickLink('Layanan') 
            ->clickLink('Panduan Layanan') 
            ->assertPathIs('/panduanlayanan') 
            ->pause(1000) 
            ->scrollIntoView('#faq')
            ->click('.portfolio-item.filter-pead .faq-list li:first-child a'); 
        });
    }
}
