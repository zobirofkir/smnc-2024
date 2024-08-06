<?php

namespace App\Payment;

class VariantPrices
{
    /**
     * @param string $statut
     * @return int
     */
    public static function inscriptionPrice(string $statut): int
    {
        $status = [
            "Membre titulaire de la SMN" => 800,
            "Résident" => 400,
            "Membre associé de la SMN" => 400,
            "Non membre de la SMN" => 3500
        ];

        return $status[$statut] ?? 0;
    }

    /**
     * @param string $statut
     * @param string $room
     * @param int $nights
     * @return int
     */
    public static function accommodationPrice(string $statut, string $room, int $nights): int
    {
        $roomsPrices = [
            "Membre titulaire de la SMN" => [
                'Chambre Single' => 2500,
                'Chambre Twin' => 2800,
                'Chambre Double' => 2800,
            ],
            "Résident" => [
                'Chambre Single' => 2500,
                'Chambre Twin' => 2800,
                'Chambre Double' => 2800,
            ],
            "Membre associé de la SMN" => [
                'Chambre Single' => 2500,
                'Chambre Twin' => 2800,
                'Chambre Double' => 2800,
            ],
            "Non membre de la SMN" => [
                'Chambre Single' => 1700 * $nights,
                'Chambre Twin' => 1900 * $nights,
                'Chambre Double' => 1900 * $nights,
            ]
        ];

        $roomPrice = $roomsPrices[$statut][$room] ?? 0;

        return  $roomPrice;
    }

    /**
     * @param mixed $meal
     * @return int
     */
    public static function mealPrice(mixed $meal): int
    {
        $mealPrices = [
            'Adulte' => 1600,
            'Enfant de plus de 8 ans' => 800
        ];

        return $mealPrices[$meal] ?? 0;
    }
}
