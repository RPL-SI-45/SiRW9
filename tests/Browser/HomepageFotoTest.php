<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomepageFotoTest extends DuskTestCase
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
            ->clickLink('Tambahkan Foto Homepage')
            ->attach('#image', public_path('uploads\photocarousel\test.jpg'))
            ->press('Tambahkan')
            ->assertSee('Berhasil menambahkan foto baru!');
        });
    }
}
