return [
    'paths' => ['api/*'],  // Define the paths that should be CORS-enabled
    'allowed_methods' => ['*'],  // Allowed HTTP methods, '*' allows all methods
    'allowed_origins' => ['*'],  // Allowed origins, '*' allows all origins
    'allowed_origins_patterns' => [],  // Leave as an empty array if no patterns
    'allowed_headers' => ['*'],  // Headers allowed in requests
    'exposed_headers' => [],  // Headers exposed to the browser
    'max_age' => 0,  // Maximum age for caching CORS requests
    'supports_credentials' => true,  // Set this to true to allow credentials (cookies, etc.)
];
