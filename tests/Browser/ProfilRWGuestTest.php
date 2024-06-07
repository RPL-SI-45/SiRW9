<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProfilRWGuestTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')        
            ->clickLink('Profil RW')
            ->assertPathIs('/profilRW');  ;
        });
    }
    public function testExample2(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')        
            ->clickLink('Lihat Profil RW')
            ->assertPathIs('/profilRW');  ;
        });
    }
}
