Up and Running:

If using docker-compose mappings, run `composer install --ignore-platform-reqs` in the api directory.
Otherwise, remove the volume mapping from docker-compose.yml

Bring everything up `docker-compose up -d`

Restore the database: `mariadb --database=concert -h127.0.0.1 -P$DB_PORT -uconcert -pconcert < db.sql`

Import the sample requests from "Insomnia.json"
