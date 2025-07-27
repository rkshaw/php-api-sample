<?php

/**
 * @OA\Schema(
 *     schema="AuthenticationFailed",
 *     type="object",
 *     title="AuthenticationFailed",
 *     required={"message"},
 *     @OA\Property(property="code", type="int", example="401"),
 *     @OA\Property(property="message", type="string", example="Invalid Authentication Token"),
 * )
 */

/**
 * @OA\Schema(
 *     schema="DataNotFound",
 *     type="object",
 *     title="DataNotFound",
 *     required={"message"},
 *     @OA\Property(property="code", type="int", example=404),
 *     @OA\Property(property="message", type="string", example="Record not found"),
 * )
 */

/**
 * @OA\Schema(
 *     schema="ValidationFailed",
 *     type="object",
 *     title="ValidationFailed",
 *     required={"errors"},
 *     @OA\Property(property="code", type="int", example=422),
 *     @OA\Property(
 *         property="errors",
 *         type="array",
 *         @OA\Items(type="string"),
 *         example={"name is required", "id must not provide"}
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="ErrorMessage",
 *     type="object",
 *     title="ErrorMessage",
 *     required={"message"},
 *     @OA\Property(property="code", type="string", example="DB_SERVER_001"),
 *     @OA\Property(property="file", type="string", example="product-gateway.php"),
 *     @OA\Property(property="line", type="int", example="100"),
 *     @OA\Property(property="message", type="string", example="Couldn't connect to db server")
 * )
 */
