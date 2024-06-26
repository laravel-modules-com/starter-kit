<?php

namespace Modules\AuditTrails\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\AuditTrails\Models\AuditTrail;

class AuditTrailsFactory extends Factory
{
    protected $model = AuditTrail::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->uuid(),
            'reference_id' => $this->faker->uuid(),
            'title' => $this->faker->title(),
            'section' => $this->faker->title(),
            'type' => $this->faker->title(),
        ];
    }
}
