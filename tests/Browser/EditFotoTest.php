<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditFotoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
            ->clickLink('Login Admin')
            ->assertSee('Email')
            ->type('email','admin@gmail.com')
            ->type('password','admin123')
            ->press('Login')
            ->clickLink('Edit Homepage')
            ->with('#photoCard', function (Browser $card) {
                $card->click('.badge.bg-warning');
            })
            ->attach('#image', public_path('uploads\photocarousel\test.jpg'))
            ->press('Edit Foto')
            ->assertSee('Berhasil mengupdate foto!');
        });
    }
}
