<?php

namespace Tests;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * -----------SUCCESS-----------
     */

    /** @test */
    public function success_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '222222222',
            'name' => 'test 2',
            'manager' => 'test 2',
            'email' => 'test2@test.com',
            'password' => 'test'
        ]);

        $response->assertRedirect();
    }

    /**
     * -----------EXISTING DATA-----------
     */

    /** @test */
    public function existing_bulstat_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '11111111111',
            'name' => 'test 7',
            'manager' => 'test 7',
            'email' => 'test7@test.com',
            'password' => 'test'
        ]);
        $response->assertSessionHasErrors();
    }

    /** @test */
    public function existing_name_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '11111111111',
            'name' => 'test',
            'manager' => 'test 7',
            'email' => 'test7@test.com',
            'password' => 'test'
        ]);
        $response->assertSessionHasErrors();
    }

    /** @test */
    public function existing_email_register()
    {
        $response = $this->post('/company/register', [
                'bulstat' => '777777777',
                'name' => 'test 7',
                'manager' => 'test 7',
                'email' => 'test@test.com',
                'password' => 'test'
            ]);
            $response->assertSessionHasErrors();
    }

    /**
     * -----------EMPTY FIELDS-----------
     */

    /** @test */
    public function empty_bulstat_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '',
            'name' => 'test 7',
            'manager' => 'test 7',
            'email' => 'test@test.com',
            'password' => 'test'
        ]);
        $response->assertSessionHasErrors();
    }

    /** @test */
    public function empty_name_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '1531536',
            'name' => '',
            'manager' => 'test 7',
            'email' => 'test@test.com',
            'password' => 'test'
        ]);
        $response->assertSessionHasErrors();
    }

    /** @test */
    public function empty_manager_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '1531536',
            'name' => 'fsfdfsf',
            'manager' => '',
            'email' => 'test@test.com',
            'password' => 'test'
        ]);
        $response->assertSessionHasErrors();
    }

    /** @test */
    public function empty_email_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '1531536',
            'name' => 'fsfdfsf',
            'manager' => 'fdsfdsffsd',
            'email' => '',
            'password' => 'test'
        ]);
        $response->assertSessionHasErrors();
    }

    /** @test */
    public function empty_password_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '1531536',
            'name' => 'fsfdfsf',
            'manager' => 'fdsfdsffsd',
            'email' => 'test@testing.tests',
            'password' => ''
        ]);
        $response->assertSessionHasErrors();
    }

    /**
     * -----------INVALID-----------
     */

    /** @test */
    public function invalid_email_register()
    {
        $response = $this->post('/company/register', [
            'bulstat' => '1531536',
            'name' => 'fsfdfsf',
            'manager' => 'fdsfdsffsd',
            'email' => 'test',
            'password' => 'test'
        ]);
        $response->assertSessionHasErrors();
    }

}
