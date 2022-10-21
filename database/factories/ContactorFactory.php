<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contactor>
 */
class ContactorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codigo' => 'MOL0059',
            'referencia' => 'DILM40',
            'voltaje'=>'220VAC',
            'bobina'=> 'MOL0156',
            'refe_bobina' =>'DILM-65XSP-220VAC',
            'alternativa1' =>'*MOL0057 *MOL0058 *MOL0060',
            'referencia1' => 'DILM40',
            'alternativa2'=>'MOL0057 al MOL0068',
            'referencia2'=>'*DILM40 *DILM50 *DILM65',
        ];
        [
            'codigo' => 'MOL0060',
            'referencia' => 'DILM40',
            'voltaje'=>'440VAC',
            'bobina'=> 'MOL0157',
            'refe_bobina' =>'DILM-65XSP-440VAC',
            'alternativa1' =>'*MOL0057 *MOL0058 *MOL0060',
            'referencia1' => 'DILM40',
            'alternativa2'=>'MOL0057 al MOL0068',
            'referencia2'=>'*DILM40 *DILM50 *DILM65',
        ];
    }
}
