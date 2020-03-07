<?php

namespace Tests\Feature;

use Tests\TestCase;

class PositionTest extends TestCase
{
    /**
     * -----------ADD-----------
     */

    /** @test */
    public function successful_position_added()
    {
        $response = $this->post('/company/position-add', [
            'name' => 'Test position',
            'description' => 'Test positions adding'
        ]);

        $response->assertRedirect();
    }

    /**
     * -----------UPDATE-----------
     */

    /** @test */
    public function successful_position_updated()
    {
        $response = $this->post('/company/position-update/1', [
            'name' => 'Test position updated',
            'description' => 'Test positions adding updated'
        ]);

        $response->assertRedirect();
    }

    /**
     * -----------DELETE-----------
     */

    /** @test */
    public function successful_position_deleted()
    {
        $response = $this->delete('/company/position-delete/1', [
            'name' => 'Test position updated',
            'description' => 'Test positions adding updated'
        ]);

        $response->assertRedirect();
    }
}
