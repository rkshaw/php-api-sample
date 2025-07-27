<?php

/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     title="Product",
 *     required={"name", "size", "is_available"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Product name"),
 *     @OA\Property(property="size", type="integer", example=1),
 *     @OA\Property(property="is_available", type="boolean", example=true)
 * )
 */
