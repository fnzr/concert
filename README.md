Up and Running:

Clone this repository.

To use local mappings, run `composer install --ignore-platform-reqs` in the api directory and uncomment the lines in the docker-compose.yml file.
Otherwise, proceed.

Bring everything up `docker-compose up -d`

Restore the database: `docker-compose exec db bash -c "mariadb  --database=concert -uconcert -pconcert < /var/db.sql"`

Import the sample requests from "Insomnia.json". Modify the graphq_url variable to your url.
