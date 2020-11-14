<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SearchFormTest extends TestCase
{
    /** @test */
    public function examples_page_contains_search_form_livewire_component()
    {
        $this->get('/examples')->assertSeeLivewire('search-form');
    }

    /** @test */
    public function search_form_searches_correctly_if_song_exists()
    {
        Livewire::test(SearchForm::class)
            ->assertDontSee('John Lennon')
            ->set('search', 'Imagine')
            ->assertSee('John Lennon');
    }

    /** @test */
    public function search_form_shows_message_if_no_song_exists()
    {
        Livewire::test(SearchForm::class)
            ->set('search', 'aefa5184a8f4a9')
            ->assertSee('There are no results for');
    }
}
