<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SecurityRegressionTest extends TestCase
{
    use RefreshDatabase;

    private function account($email, $role = 1)
    {
        return User::create(['use_name' => 'Demo User', 'email' => $email, 'password' => Hash::make('local-test-password'), 'role' => $role]);
    }

    public function test_guest_cannot_delete_an_admin_record()
    {
        $this->post(route('listing-delete', ['model' => 'User', 'id' => 1]))->assertRedirect(route('admin-login'));
    }

    public function test_regular_account_cannot_authenticate_as_admin()
    {
        $this->account('student@example.com');
        $this->post(route('admin-loginPost'), ['email' => 'student@example.com', 'password' => 'local-test-password']);
        $this->assertGuest('admin');
    }

    public function test_profile_update_ignores_a_different_account_id()
    {
        $actor = $this->account('actor@example.com');
        $victim = $this->account('victim@example.com');
        $this->actingAs($actor)->post(route('postProfile'), [
            'id' => $victim->id, 'use_name' => 'Updated', 'email' => 'updated@example.com', 'address' => 'Demo address', 'phone' => '0000000000',
        ])->assertSessionHasNoErrors();
        $this->assertSame('Updated', $actor->fresh()->use_name);
        $this->assertSame('victim@example.com', $victim->fresh()->email);
    }
}
