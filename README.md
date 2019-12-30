# Shasta Chapter CNPS

https://shasta-cnps.org

## Prereqs

`docker` & `docker-compose`

## Dev Setup

0. Pull this repo
0. Grab a SQL dump from [cPanel](https://cpanel-box5485.bluehost.com/cpsess1052648888/3rdparty/phpMyAdmin/server_export.php?lang=en) and put it in `containers/mysql/initdb.d`
0. Run `docker-compose up`
0. Log in at `http://localhost:8080/wp-admin`

## Deployment

0.
