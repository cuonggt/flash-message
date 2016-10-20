<?php

class FlashTest extends TestCase
{
    /** @test */
    public function it_displays_success_flash_messages()
    {
        $this->session->shouldReceive('flash')->with('flash_message', [
            'title'   => 'Success!',
            'message' => 'User successfully created.',
            'level'   => 'success',
        ]);

        $this->flash->success('Success!', 'User successfully created.');
    }

    /** @test */
    public function it_displays_info_flash_messages()
    {
        $this->session->shouldReceive('flash')->with('flash_message', [
            'title'   => 'Info!',
            'message' => 'Info Message.',
            'level'   => 'info',
        ]);

        $this->flash->info('Info!', 'Info Message.');
    }

    /** @test */
    public function it_displays_error_flash_messages()
    {
        $this->session->shouldReceive('flash')->with('flash_message', [
            'title'   => 'Error!',
            'message' => 'Error Message.',
            'level'   => 'error',
        ]);

        $this->flash->error('Error!', 'Error Message.');
    }

    /** @test */
    public function it_displays_warning_flash_messages()
    {
        $this->session->shouldReceive('flash')->with('flash_message', [
            'title'   => 'Warning!',
            'message' => 'Warning Message.',
            'level'   => 'warning',
        ]);

        $this->flash->warning('Warning!', 'Warning Message.');
    }

    /** @test */
    public function it_displays_overlay_flash_messages()
    {
        $this->session->shouldReceive('flash')->with('flash_message_overlay', [
            'title'   => 'Overlay!',
            'message' => 'Overlay Message.',
            'level'   => 'info',
        ]);

        $this->flash->overlay('Overlay!', 'Overlay Message.');
    }

    /** @test */
    public function it_displays_custom_flash_messages()
    {
        $this->session->shouldReceive('flash')->with('custom_flash_message', [
            'title'   => 'Custom Title!',
            'message' => 'Custom Message.',
            'level'   => 'custom_level',
        ]);

        $this->flash->create('Custom Title!', 'Custom Message.', 'custom_level', 'custom_flash_message');
    }
}
