FROM php:8.2-cli
WORKDIR /app
COPY . .

RUN apt-get update && apt-get install -y sqlite3 && \
    sqlite3 data.sqlite "CREATE TABLE users (id INTEGER, name TEXT); \
                         INSERT INTO users VALUES (1, 'Jan'); \
                         INSERT INTO users VALUES (2, 'Anna');"

CMD ["php", "bin/dump_table.php", "users"]
