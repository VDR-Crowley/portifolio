<?php
    function renderTemplate($template, $data): array|string
    {
        $placeholders = array_map(fn($key) => "{{{$key}}}", array_keys($data));
        return str_replace($placeholders, array_values($data), $template);
    }