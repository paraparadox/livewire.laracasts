<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /** @test */
    public function examples_page_contains_contact_form_livewire_component()
    {
        $this->get('/examples')->assertSeeLivewire('contact-form');
    }

    /** @test */
    public function contact_form_sends_out_an_email()
    {
//        Mail::fake();

        Livewire::test(ContactForm::class)
            ->set('name', 'Andre')
            ->set('email', 'andre@andre')
            ->set('phone', '988776655')
            ->set('message', 'Hey yo man!')
            ->call('submitForm')
            ->assertSee('We received your message successfully and will get back to you shortly!');

//        Mail::assertSent(function (ContactFormMailable $mail) {
//            $mail->build();
//            return $mail->hasTo('andre@andre.com') &&
//                $mail->hasFrom('andre@andre') &&
//                $mail->subject == 'Contact Form Submission';
//        });
    }
}
