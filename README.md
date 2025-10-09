PHP API SAMPLE Demo
==================
Features:
- PSR autoloading
- Exception middleware
- PDO Database service (configure DB in api/DataLayer/Database.php)
- Product CRUD (id,name,size,is_available)
- Custom action routing: /api/v1/{controller}/{customMethod}
- Swagger annotations (swagger.php + app/Docs/*.php)

Setup:
1. Unzip into your htdocs (e.g., D:/xampp/htdocs/php-api-psr4)
2. Run: composer install
3. Create database and table (see app/Config/sql.sql)
4. Adjust DB credentials in api/DataLayer/Database.php
5. Start Apache or run: php -S localhost:8000 -t public
6. Access API via: http://localhost/php-api/api/v1/products

