<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreatePanduanTest extends DuskTestCase
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
            ->clickLink('Panduan')
            ->clickLink('Tambah Panduan Layanan')
            ->assertSee('Tambah Panduan Layanan') 
            ->type('Judul_Panduan', 'Panduan Test') 
            ->keys('trix-editor[input="IsiPanduan"]', 'Test Isi Panduan')
            ->select('KategoriPanduan', 'Informasi Umum') 
            ->press('Tambah Panduan Layanan') 
            ->assertPathIs('/admin/panduanlayanan');
        });
    }
}
