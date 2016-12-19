<?php

/**
 * kinto
 *
 * Kinto is a minimalist JSON storage service with synchronisation and sharing abilities. It is meant to be easy to use and easy to self-host.  **Limitations of this OpenAPI specification:**   1. Validation on OR clauses is not supported (e.g. provide `data` or `permissions`   in patch operations).   2. [Filtering](http://kinto.readthedocs.io/en/stable/api/1.x/filtering.html)   is supported on any field by using `?{prefix}{field_name}={value}`.   3. [Backoff headers](http://kinto.readthedocs.io/en/stable/api/1.x/backoff.html)   may occur with any response, but they are only present if the server is under   in heavy load, so we cannot validate them on every request. They are listed only   on the default error message.   4. [Collection schemas](http://kinto.readthedocs.io/en/stable/api/1.x/collections.html#collection-json-schema)   can be provided when defining a collection, but they are not validated by   this specification.
 *
 * OpenAPI spec version: 1.13
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * An example of a project-specific implementation.
 *
 * After registering this autoload function with SPL, the following line
 * would cause the function to attempt to load the \Swagger\Client\Baz\Qux class
 * from /path/to/project/lib/Baz/Qux.php:
 *
 *      new \Swagger\Client\Baz\Qux;
 *
 * @param string $class The fully-qualified class name.
 *
 * @return void
 */
spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'Swagger\\Client\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/lib/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
