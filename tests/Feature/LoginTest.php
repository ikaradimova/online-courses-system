<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * -----------SUCCESS-----------
     */
    /** @test */
    public function success_login()
    {
        $response = $this->post('/company/login', [
            'email' => 'test@test.com',
            'password' => 'test'
        ]);

        $response->assertSessionMissing('errors');
    }

    /**
     * -----------EMPTY FIELDS-----------
     */

    /** @test */
    public function no_email_login()
    {
        $response = $this->post('/company/login', [
            'email' => '',
            'password' => 'test'
        ]);

        $response->assertSessionHasErrors();

    }

    /** @test */
    public function no_password_login()
    {
        $response = $this->post('/company/login', [
            'email' => 'test@test.com',
            'password' => ''
        ]);

        $response->assertSessionHasErrors();

    }

    /** @test */
    public function no_email_and_no_password_login()
    {
        $response = $this->post('/company/login', [
            'email' => '',
            'password' => ''
        ]);

        $response->assertSessionHasErrors();
    }

    /**
     * -----------INVALID-----------
     */

    /** @test */
    public function wrong_credentials_login()
    {
        $response = $this->post('/company/login', [
            'email' => 'fsfds@tesgdgd.com',
            'password' => 'ggddgd'
        ]);

        $response->assertSessionHasErrors();
    }

    /** @test */
    public function invalid_email_login()
    {
        $response = $this->post('/company/login', [
            'email' => 'test',
            'password' => 'ggddgd'
        ]);

        $response->assertSessionHasErrors();
    }
}
